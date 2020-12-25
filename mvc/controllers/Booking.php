<?php

class Booking extends Controller{
    public function __construct() {
        // Session::init();
    }
    public function index(){
        $data['booking'] = [
            'Name' =>'',
            'Mail' => '',
            'Phonenumber' => '', 
            'Country' => '',
            'DateCheckIn' => '',
            'DateCheckOut' => '',
            'NumberAdult' => '',
            'NumberChildren' => '',
            'RoomType' => '',
            'Description' => '',
            'NameError' =>'',
            'MailError' => '',
            'PhonenumberError' => '', 
            'CountryError' => '',
            'DateCheckInOutError' => '',
            'NumberPeopleError' => '',
            'RoomTypeError' => '',
            // 'DescriptionError' => '',

        ];
    
        //Check for post
        if(isset($_POST['bookingform'])) {
            //Sanitize post data
            
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // $datechekInOut= trim($_POST['booking-date']);
            $datechekInOut = explode('-',trim($_POST['booking-date']));
            $data['booking'] = [
                'Name' =>trim($_POST['bookingname']),
                'Mail' => trim($_POST['booking-email']),
                'Phonenumber' => trim($_POST['booking-phone']), 
                'Country' => trim($_POST['booking-country']),
                'DateCheckIn' => trim($datechekInOut['2'])."-".trim($datechekInOut['1'])."-".trim($datechekInOut['0']),
                'DateCheckOut' => trim($datechekInOut['5'])."-".trim($datechekInOut['4'])."-".trim($datechekInOut['3']),
                'NumberAdult' => trim($_POST['booking-adults']),
                'NumberChildren' => trim($_POST['booking-children']),
                'RoomType' => trim($_POST['booking-roomtype']),
                'Description' => trim($_POST['booking-comments']),
                
            
            ];
            if (empty($data['booking']['Name'])) {
                $data['booking']['NameError'] = '* Please type your name. Please try again.';
              
            }else{
                $data['booking']['NameError']="";
            }
            if (empty($data['booking']['Mail'])) {
                $data['booking']['MailError'] = '* Please type your mail. Please try again.';
              
            }else{
                $data['booking']['MailError']="";
            }
            if (empty($data['booking']['Phonenumber'])) {
                $data['booking']['PhonenumberError'] = '* Please type your phone. Please try again.';
              
            }else{
                $data['booking']['PhonenumberError']="";
            }
            if (empty($data['booking']['Country'])) {
                $data['booking']['CountryError'] = '* Please type your country. Please try again.';
              
            }else{
                $data['booking']['CountryError']="";
            }
            if (empty($data['booking']['DateCheckIn']) || empty($data['booking']['DateCheckOut'])) {
                $data['booking']['DateCheckInOutError'] = '* Please type your date check in or check out. Please try again.';
              
            }else{
                $data['booking']['DateCheckInOutError']="";
            }
            
            if (empty($data['booking']['NumberAdult']) && empty($data['booking']['NumberChildren'])) {
                $data['booking']['NumberPeopleError'] = '* Please type your number people. Please try again.';
              
            }else{
                $data['booking']['NumberPeopleError']="";
            }
            if (empty($data['booking']['RoomType'])) {
                $data['booking']['RoomTypeError'] = '* Please type your roomtype. Please try again.';
              
            }else{
                $data['booking']['RoomTypeError']="";
            }


            // print_r($data); die();
            if(empty($data['booking']['NameError'])){
                $this->createGuestSession($data['booking']);
                $data['booking']['NameError']="";
            }
            else  {
                $data['booking']['NameError'] = '* Please type your name. Please try again.';
                //  $this->view('layout/Booking-form', $data);
            }
            // print_r($_SESSION['guest']);
            // $model=$this->modeladmin("booking");
            // $model->InsertBooking($data['booking']['bBookingID'],
            //     $data['booking']['bGuestID' ],
            //     $data['booking']['bReservationAgentID' ],
            //     $data['booking']['bDateCheckIn' ],
            //     $data['booking']['bDateCheckOut' ],
            //     $data['booking']['bRoomCount' ]
            // );
            // echo "da booking"; die();
          
        } 
        // $data['main'] ="Booking/add-booking";
        $this->view('layout/Booking-form', $data);
        // require_once "./mvc/views/layout/Booking-form.php";

    }
    function createGuestSession($guest){
        $_SESSION['guest']['hotel']="Quite Luxury";
        $_SESSION['guest']['name'] =  $guest['Name'] ;
        $_SESSION['guest']['mail'] = $guest['Mail'];
        $_SESSION['guest']['phone'] = $guest['Phonenumber'];
        $_SESSION['guest']['country'] = $guest['Country'];
        $_SESSION['guest']['dateCheckIn'] = $guest['DateCheckIn'];
        $_SESSION['guest']['dateCheckOut'] =$guest['DateCheckOut'];
        $_SESSION['guest']['numberAdult'] = $guest['NumberAdult'];
        $_SESSION['guest']['numberChildren'] = $guest['NumberChildren'];
        $_SESSION['guest']['roomtype'] = $guest['RoomType'];
        $_SESSION['guest']['Decription'] = $guest['Description'];
    }
    function auth(){
        $this->view('layout/customer-mail');
    }
    function suggestion(){
        $people= (int)$_SESSION['guest']['numberAdult'] + (int)$_SESSION['guest']['numberChildren'];

        print_r ($_SESSION['guest']);
        // $name, $mail, $phone, $numberguest, $datecheckin, $datecheckout, 
        switch($_SESSION['guest']['roomtype']){
            case 'Single Room':
                // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];

                echo $people;
                
                break;
            case 'Double Room':
                // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                echo $people;
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
    }

}
?>