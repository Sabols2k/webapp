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

    //ham dem so phong 
    function SL_Room($people, $maxguest){
        
        if($people % $maxguest ==0){
            $kq= floor($people / $maxguest);
        }
        else{
            $kq= floor($people / $maxguest) +1 ;
        }
        return $kq;
    }
    function SL_Room2($people, $maxguest){
        $kq= floor($people / $maxguest);
        return $kq;
    }
    // hàm này dùng để return ra maxguest và số phòng trống trong roomtype được chọn 
    function maxguest($roomtype){
        $model=$this->modellayout("bookingform");
        $data =  $model->demphongtrong();
        switch($roomtype){
            case 'Single Room':
                $kq['guest'] = 2;
                $kq['roomremain']= $data['0']['SL_PhongTrong'];
                return $kq;
                break;
            case 'Double Room':
                $kq['guest'] = 4;
                $kq['roomremain']= $data['1']['SL_PhongTrong'];
                return $kq;
                break;
            default:
                return $kq = NULL;
        }
    }
    function suggestion1(){
        // $people= (int)$_SESSION['guest']['numberAdult'] + (int)$_SESSION['guest']['numberChildren'];
        $people = 20;
        $model=$this->modellayout("bookingform");
        $data['room'] =  $model->demphongtrong();


        $guest= $this->maxguest($_SESSION['guest']['roomtype']);
        

        // print_r($data['room']);
        print_r ($_SESSION['guest']);
        echo "Số người: " . $people;
        echo "max guest: " .$guest['guest'];
        echo "So phong con lai: " .$guest['roomremain'];
        // print_r($guest);
        echo "Ket qua:";

       
        // echo "ket qua: ". ((int)$people / (int)$maxguest);
        // // $maxguest = 
        // // echo $data['room']['0']['rtMaxGuest'];
        if($people  <= ($guest['guest'] * $guest['roomremain']  )  )
        {
            // echo "du phong". $people;
            // viet ham dem so phong
            echo $_SESSION['guest']['roomtype'];
            echo $sl_room = $this->SL_Room($people,$guest['guest'] );
            echo "...";
        }
        else{

            $peopleremain = ((int)$people - (int)($guest['guest'] * $guest['roomremain']));
            echo $_SESSION['guest']['roomtype'];
            echo  $sl_room1 = $guest['roomremain'];
            echo "thieu phong cho:" . $peopleremain;
            switch($_SESSION['guest']['roomtype']){
                case 'Single Room':
                    // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                    $guest1= $this->maxguest('Double Room');
                    if($peopleremain  <= ($guest1['guest'] * $guest1['roomremain']  )  )
                    {
                        // echo "du phong". $people;
                        // viet ham dem so phong
                        echo 'Double Room';
                        // echo "" $peoplere; 

                        echo $sl_room = $this->SL_Room($peopleremain,$guest1['guest'] );
                        echo "...";
                    }
                    else{
                        echo "het phong. CUT";
                    }
                    
                    break;
                case 'Double Room':
                    // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                    $guest1= $this->maxguest('Single Room');
                    if($peopleremain  <= ($guest1['guest'] * $guest1['roomremain']  )  )
                    {
                        // echo "du phong". $people;
                        // viet ham dem so phong
                        echo 'Single Room';
                        // echo "" $peoplere; 

                        echo $sl_room = $this->SL_Room($peopleremain,$guest1['guest'] );
                        echo "...";
                    }
                    else{
                        echo "het phong. CUT";
                    }
                    
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }
           

        }
       
    }
    function suggestion2(){
        // $people= (int)$_SESSION['guest']['numberAdult'] + (int)$_SESSION['guest']['numberChildren'];
        $people = 25;
        $model=$this->modellayout("bookingform");
        $data['room'] =  $model->demphongtrong();


        $guest= $this->maxguest($_SESSION['guest']['roomtype']);
        

        // print_r($data['room']);
        print_r ($_SESSION['guest']);
        echo "Số người: " . $people;
        echo "max guest: " .$guest['guest'];
        echo "So phong con lai: " .$guest['roomremain'];
        // print_r($guest);
        echo "Ket qua:";

       
        // echo "ket qua: ". ((int)$people / (int)$maxguest);
        // // $maxguest = 
        // // echo $data['room']['0']['rtMaxGuest'];
        if($people  <= ($guest['guest'] * $guest['roomremain']  )  )
        {
            // echo "du phong". $people;
            // viet ham dem so phong
            echo $_SESSION['guest']['roomtype'];
            echo $sl_room = $this->SL_Room($people,$guest['guest'] );
            echo "...";
        }
        else{

            // $peopleremain = ((int)$people - (int)($guest['guest'] * $guest['roomremain']));
            // echo $_SESSION['guest']['roomtype'];
            // echo  $sl_room1 = $guest['roomremain'];
            // echo "thieu phong cho:" . $peopleremain;
            
             $guestdouble= $this->maxguest('Double Room');
             print_r($guestdouble);
             if( $people <= ($guestdouble['roomremain'] * $guestdouble['guest']) ){
                echo "so phong double room" . $slRoomDouble = $this->SL_Room2($people, $guestdouble['guest']);
                $guestsingle = $people - $slRoomDouble * $guestdouble['guest'];
                echo "so phong single room" .  $slroomSingle = $this->SL_Room($guestsingle,$guest['guest'] );
             }
             else{
                $peopleremain = ((int)$people - (int)($guestdouble['guest'] * $guestdouble['roomremain']));
                echo "so phong double room" . $slRoomDouble = $guestdouble['roomremain'];
                if($peopleremain  <= ($guest['guest'] * $guest['roomremain']  )  ){
                    echo "so phong single room" . $slroomSingle = $this->SL_Room($peopleremain,$guest['guest'] );
                }
                else{
                    echo "het phong. CUT";
                }
             }
            

            
           

        }
       
    }

    function suggestion3(){
        // $people= (int)$_SESSION['guest']['numberAdult'] + (int)$_SESSION['guest']['numberChildren'];
        $people = 17;
        $model=$this->modellayout("bookingform");
        $data['room'] =  $model->demphongtrong();


        $guest= $this->maxguest($_SESSION['guest']['roomtype']);
        

        // print_r($data['room']);
        print_r ($_SESSION['guest']);
        echo "Số người: " . $people;
        echo "max guest: " .$guest['guest'];
        echo "So phong con lai: " .$guest['roomremain'];
        // print_r($guest);
        echo "Ket qua:";

       
        // echo "ket qua: ". ((int)$people / (int)$maxguest);
        // // $maxguest = 
        // // echo $data['room']['0']['rtMaxGuest'];
        if($people  <= ($guest['guest'] * $guest['roomremain']  )  )
        {
            // echo "du phong". $people;
            // viet ham dem so phong
            echo $_SESSION['guest']['roomtype'];
            echo $sl_room = $this->SL_Room($people,$guest['guest'] );
            echo "...";
        }
        else{

            $peopleremain = ((int)$people - (int)($guest['guest'] * $guest['roomremain']));
            echo $_SESSION['guest']['roomtype'];
            echo  $sl_room1 = $guest['roomremain'];
            echo "thieu phong cho:" . $peopleremain;
            switch($_SESSION['guest']['roomtype']){
                case 'Single Room':
                    // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                    $guest2= $this->maxguest('Double Room');
                    if($peopleremain  <= ($guest2['guest'] * $guest2['roomremain']  )  )
                    {
                        // echo "du phong". $people;
                        // viet ham dem so phong
                        echo 'Double Room';
                        // echo "" $peoplere; 

                        echo $sl_room2 = $this->SL_Room($peopleremain,$guest2['guest'] );
                        
                        echo "...";
                        echo $guestroom2 = $sl_room2 * $guest2['guest'];
                        echo $guestroom1 = (int)($people - $guestroom2);
                        echo $sl_room1 = $this->SL_Room($guestroom1,$guest['guest'] );

                    }
                    else{
                        echo "het phong. CUT";
                    }
                    
                    break;
                case 'Double Room':
                     // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                     $guest2= $this->maxguest('Single Room');
                     if($peopleremain  <= ($guest2['guest'] * $guest2['roomremain']  )  )
                     {
                         // echo "du phong". $people;
                         // viet ham dem so phong
                         echo 'Single Room';
                         // echo "" $peoplere; 
 
                         echo $sl_room2 = $this->SL_Room($peopleremain,$guest2['guest'] );
                         
                         echo "...";
                         echo $guestroom2 = $sl_room2 * $guest2['guest'];
                         echo $guestroom1 = (int)($people - $guestroom2);
                         echo $sl_room1 = $this->SL_Room($guestroom1,$guest['guest'] );
 
                     }
                     else{
                         echo "het phong. CUT";
                     }
                    
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }
           

        }
       
    }

}
?>