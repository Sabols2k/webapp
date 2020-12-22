<?php

class Admin extends Controller{
    // function __construct() {
	// 	parent::__construct();
		  
	// }
    // Must have SayHi()
    public function __construct() {
     
        // Session::init();
        $this->adminModel = $this->modeladmin("login");
        $this->accountModel= $this->modeladmin("account");
        
    }
    function index(){
        // $this->viewadmin("index");
        
        $data['main'] = "home/main";
        // require_once "./mvc/views/admin/index.php";
        $this->viewadmin("index",$data);
    }

    // function Login(){
    //    // require_once "./mvc/views/admin/login.php";
    //    $this->viewadmin("login",[""]);
    //    $ref = $this->modeladmin("login");
    //    $ref->login();
    // }
   
    public function login() {
        
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
        
        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $model=$this->modeladmin("login");
                $user =  $model->login($data['username'], $data['password']);
                
                // print_r($user);
                // echo mysqli_num_rows($data['user']);
                // print_r( $data['user']); die();
                // die();
                
                if(isset($user['aUsername'])){
                    $this->createUserSession($user);
                }
                else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('admin/login', $data);
            
                }
               
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->viewadmin('login', $data);
    }

    public function createUserSession($user) {
        
        $_SESSION['test'] = 'abc';
        $_SESSION['user_id'] = $user['aAdminID '] ;
        $_SESSION['username'] = $user['aUsername'];
        $_SESSION['mail'] = $user['aEmail'];
        
        header('Location:'.URLAdmin);
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['mail']);

        // $data['main']="Booking/view-booking";
        header('location:'.URLAdmin.'login');
        // $this->viewadmin("login");
        

    }
  // function logout()
	// {
	// 	Session::destroy();
	// 	header('location: index');
	// 	exit;
    // }

//admin booking

    function ViewBooking(){
        $model=$this->modeladmin("booking");
        $data['booking'] =  $model->getAllBooking();

        $data['main']="Booking/view-booking";
        $this->viewadmin("index", $data);
    }
    
    public function Addbooking() {
        $data['booking'] = [
            'bBookingID' =>'',
            'bGuestID' => '',
            'bReservationAgentID' => '', 
            'bDateCheckIn' => '',
            'bDateCheckOut' => '',
            'bRoomCount' => ''
        ];
        
        //Check for post
        if(isset($_POST['addbooking'])) {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data['booking'] = [
                'bBookingID' => trim($_POST['BookingID']),
                'bGuestID' => trim($_POST['GuestID']),
                'bReservationAgentID' => trim($_POST['ReservationID']),
                'bDateCheckIn' => trim($_POST['DateCheckIn']),
                'bDateCheckOut' => trim($_POST['DateCheckOut']),
                'bRoomCount' => trim($_POST['RoomCount']),
            
            ];
       
            $model=$this->modeladmin("booking");
            $model->InsertBooking($data['booking']['bBookingID'],
                $data['booking']['bGuestID' ],
                $data['booking']['bReservationAgentID' ],
                $data['booking']['bDateCheckIn' ],
                $data['booking']['bDateCheckOut' ],
                $data['booking']['bRoomCount' ]
            );
          
        } 
        $data['main'] ="Booking/add-booking";
        $this->viewadmin('index',$data);
    }
    public function editbooking($id){
       
        $booking = [
            'BookingID'=> '',
            'GuestID' => '',
            'ReservationAgentID' => '',
            'DateCheckIn' => '',
            'DateCheckOut'=> '',
            'RoomCount' => '',
            
        ];
   
            $model= $this->modeladmin("booking");
            $data['booking'] = $model->getDataBookingById($id);
            // print_r($data); die();
             //Check for post
            if(isset($_POST['editBooking'])) {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $booking = [
                    'BookingID' => trim($_POST['BookingID']),
                    'GuestID' => trim($_POST['GuestID']),
                    'ReservationAgentID' => trim($_POST['ReservationAgentID']),
                    'DateCheckIn' => trim($_POST['DateCheckIn']),
                    'DateCheckOut' => trim($_POST['DateCheckOut']),
                    'RoomCount' => trim($_POST['RoomCount']),
                    
                ];
                // print_r ($booking);
                $model=$this->modeladmin("booking");
                $model->updateBooking($id,$booking['BookingID'],   $booking['GuestID' ], $booking['ReservationAgentID'], $booking['DateCheckIn' ],$booking['DateCheckOut'], $booking['RoomCount'] );

                
                $data['booking'] =  $model->getAllBooking();
                $data['main']="Booking/view-booking";
                header('Location:'.URLAdmin. 'viewbooking');
                $this->viewadmin("index",$data);
            }
        $data['main']="Booking/edit-booking";
        $this->viewadmin("index",$data);

    }
    public function deleteBooking($id){
        $model= $this->modeladmin("booking");
        $model->DeleteBookingById($id);
        header('Location:'.URLAdmin. 'viewbooking');
    }


// admin room
    function ViewRoom(){
        $model=$this->modeladmin("room");
        $data['room'] =  $model->getAllRoom();
        
        $data['main']="Room/view-room";
        $this->viewadmin('index',$data);
    }

    public function AddRoom() {
          
           $data = [
            'RoomTypeID' => '',
            'RoomPrice' => '',
            'Description' => '',
            'RoomstatusID' => '',
            'RoomTypeIDError' => '',
            'RoomPriceError' => '',
            'DescriptionError' => '',
            'RoomstatusIDError' => '',
           
        ];
    
        
        //Check for post
        if(isset($_POST['addroom'])) {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data['room'] = [
                'RoomTypeID' => trim($_POST['RoomTypeID']),
                'RoomPrice' => trim($_POST['RoomPrice']),
                'Description' => trim($_POST['Description']),
                'RoomstatusID' => trim($_POST['RoomstatusID']),
                'RoomTypeIDError' => '',
                'RoomPriceError' => '',
                'DescriptionError' => '',
                'RoomstatusIDError' => ''

            ];
            //Validate username
            if (empty($data['RoomTypeID'])) {
                $data['RoomTypeIDError'] = 'Please enter roomtype.';
            }

            //Validate password
            if (empty($data['RoomPrice'])) {
                $data['RoomPriceError'] = 'Please enter RoomPriceError.';
            }

            //Check if all errors are empty
            if (empty($data['RoomPriceError']) && empty($data['RoomTypeIDError'])) {
                $model=$this->modeladmin("room");
                $model->InsertRoom($data['RoomTypeID' ],
                        $data['RoomPrice'],
                        $data['Description' ],
                        $data['RoomstatusID' ]
                    );
                
            }

        } 
        $data['main']= "Room/add-room";
        $this->viewadmin("index",$data);
    }

    public function editroom($id){
       
        $room = [
            'RoomID'=> '',
            'RoomTypeID' => '',
            'RoomPrice' => '',
            'Description' => '',
            'RoomstatusID' => '',
            'RoomIDError'=> '',
            'RoomTypeIDError' => '',
            'RoomPriceError' => '',
            'DescriptionError' => '',
            'RoomstatusIDError' => '',
        
        ];
   
            $model= $this->modeladmin("room");
            $data['room'] = $model->getDataRoomById($id);
            // print_r($data); die();
             //Check for post
            if(isset($_POST['editRoom'])) {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $room = [
                    'RoomID' => trim($_POST['RoomID']),
                    'RoomTypeID' => trim($_POST['RoomTypeID']),
                    'RoomPrice' => trim($_POST['RoomPrice']),
                    'Description' => trim($_POST['Description']),
                    'RoomstatusID' => trim($_POST['RoomstatusID']),
                    

                ];
                // print_r ($room);
                $model=$this->modeladmin("room");
                $model->updateRoom($id,$room['RoomID'],   $room['RoomTypeID' ], $room['RoomPrice'], $room['Description' ],$room['RoomstatusID' ] );
                
                $data['room'] =  $model->getAllRoom();
                $data['main']="Room/view-room";
                header('Location:'.URLAdmin. 'viewroom');
                $this->viewadmin("index",$data);
            }
        $data['main']="Room/edit-room";
        $this->viewadmin("index",$data);

    }

    public function deleteRoom($id){
        $model= $this->modeladmin("room");
        $model->DeleteRoomById($id);
        header('Location:'.URLAdmin. 'viewroom');
    }
    //view account admin
    
    public function viewaccount(){
        $table = "admin";
        // $model=$this->modeladmin("account");
        
        $data['account'] = $this->adminModel->getAllData($table);
        $data['main'] = 'Account/view-account';

        // $data=$db->getAllData($table);
        

        $this->viewadmin("index",$data);
    }
    
    public function AddAccount() {
        $data['account'] = [
            'img' =>'',
            'username' =>'',
            'password' => '',
            'email' => '', 
            'firstname' => '',
            'lastname' => '',
            'address' => '',
            'country' => '',
            'phone' => '',
            'gender' => '',
            'birthday' => '',
            'rolesID' => '',
            'usernameError' => '',
            'passwordError' => '',
            'emailError' => ' ',
            'firstnameError' => ' ',
            'lastnameError' => ' ',
            'addressError' => ' ',
            'countryError' => ' ',
            'phoneError' => ' ',
            'genderError' => ' ',
            'birthdayError' => ' ',
            'rolesIDError' => ' ',
        ];

            // Check extension
            // if( in_array($imageFileType,$extensions_arr) ){
               // Upload file
            //    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
          
            // }
       
        //Check for post
        if(isset($_POST['addaccount'])) {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $file = $_FILES['file']['name'];
            $target_dir = imgAdmin."account/";
            $path=$target_dir.$file;
            
            // $target_file = $target_dir . basename($_FILES["file"]["name"]);
          
            // Select file type
            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          
            // Valid file extensions
            // $extensions_arr = array("jpg","jpeg","png","gif");

            $data['account'] = [
                
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'img' =>$_FILES['file']['name'],
                'email' => trim($_POST['email']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'address' => trim($_POST['address']),
                'country' => trim($_POST['country']),
                'phone' => trim($_POST['phone']),
                'gender' => trim($_POST['gender']),
                'birthday' => trim($_POST['birthday']),
                'rolesID' => trim($_POST['rolesID']),
                'usernameError' => '',
                'passwordError' => '',
                'emailError' => ' ',
                'firstnameError' => ' ',
                'lastnameError' => ' ',
                'addressError' => ' ',
                'countryError' => ' ',
                'phoneError' => ' ',
                'genderError' => ' ',
                'birthdayError' => ' ',
                'rolesIDError' => ' '



            ];

            
            //Validate username
            if (empty($data['account']['username'])) {
                $data['usernameError'] = 'Please enter a username.';    
            }

            //Validate password
            if (empty($data['account']['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['account']['usernameError']) && empty($data['account']['passwordError'])) {
                // echo $_FILES['file']['tmp_name'];
                // echo $target_dir.$file;
                // die();
                if(isset($path)){

                    $target_dir = $target_dir."(1)";
                    $path=$target_dir.$file;
                    move_uploaded_file($_FILES['file']['tmp_name'], $path);
                    $data['account']['img']="(1)".$file;
                }
                
                $model=$this->modeladmin("account");
                $model->InsertAccount($data['account']['username'],
                    $data['account']['password'],
                    $data['account']['img'],
                    $data['account']['email' ],
                    $data['account']['firstname' ],
                    $data['account']['lastname' ],
                    $data['account']['address' ],
                    $data['account']['country' ],
                    $data['account']['phone' ],
                    $data['account'][ 'gender' ],
                    $data['account']['birthday' ],
                    $data['account']['rolesID' ]
                    );
               
            }

        } 
        $data['main'] ="Account/add-account";
        $this->viewadmin('index',$data);
    }
    public function editAccount($id){
       
        $account = [
            'aAdminID'=> '',
            'aUsername' => '',
            'aPassword' => '',
            'aEmail' => '',
            'aFirstName' => '',
            'aLastName'=> '',
            'aAddress' => '',
            'aCountry' => '',
            'aPhone' => '',
            'aGender' => '',
            'aBirthday' => '',
        
        ];
   
            $model= $this->modeladmin("account");
            $data['account'] = $model->getDataAccountById($id);
            // print_r($data); die();
             //Check for post
            if(isset($_POST['editAccount'])) {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $account = [
                    'aAdminID'=> trim($_POST['aAdminID']),
                    'aUsername' => trim($_POST['aUsername']),
                    'aPassword' =>  trim($_POST['aPassword']),
                    'aEmail' =>  trim($_POST['aEmail']),
                    'aFirstName' =>  trim($_POST['aFirstName']),
                    'aLastName'=>  trim($_POST['aLastName']),
                    'aAddress' =>  trim($_POST['aAddress']),
                    'aCountry' =>  trim($_POST['aCountry']),
                    'aPhone' =>  trim($_POST['aPhone']),
                    'aGender' =>  trim($_POST['aGender']),
                    'aBirthday' =>  trim($_POST['aBirthday']),
                    

                ];
                // print_r ($room);
                $model=$this->modeladmin("account");
                $model->updateAccount($id,$account['aAdminID'], $account['aUsername' ], $account['aPassword'], $account['aEmail'],$account['aFirstName' ],$account['aLastName' ],$account['aAddress' ],$account['aCountry' ],$account['aPhone' ],$account['aGender' ],$account['aBirthday' ] );
                
                $data['account'] =  $model->getAllAccount();
                $data['main']="Account/view-account";
                header('Location:'.URLAdmin. 'viewaccount');
                $this->viewadmin("index",$data);
            }
        $data['main']="Account/edit-account";
        $this->viewadmin("index",$data);

    }
    public function deleteAccount($id){
        $model= $this->modeladmin("account");
        $model->DeleteAccountById($id);
        header('Location:'.URLAdmin. 'viewaccount');
    }
    
}
?>