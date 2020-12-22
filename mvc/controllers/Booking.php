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

        ];
        
        //Check for post
        if(isset($_POST['bookingform'])) {
            //Sanitize post data
            die();
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data['booking'] = [
                'Name' =>trim($_POST['bookingname']),
                'Mail' => trim($_POST['booking-email']),
                'Phonenumber' => trim($_POST['booking-phone']), 
                'Country' => trim($_POST['booking-country']),

                'DateCheckIn' => trim($_POST['daterangepicker_start']),
                'DateCheckOut' => trim($_POST['daterangepicker_end']),

                'NumberAdult' => trim($_POST['booking-adults']),
                'NumberChildren' => trim($_POST['booking-children']),
                'RoomType' => trim($_POST['booking-roomtype']),
                'Description' => trim($_POST['booking-comments'])
            
            ];

            // print_r($data); die();
            // if(isset($data['booking']['Name'])){
            //     $this->createGuestSession($data['booking']);
            // }
            // else {
            //     $data['booking']['NameError'] = 'Please type your name. Please try again.';

            //     // $this->view('layout/Booking-form', $data);
        
            // }
            // print_r($_SESSION['guest']);
            // $model=$this->modeladmin("booking");
            // $model->InsertBooking($data['booking']['bBookingID'],
            //     $data['booking']['bGuestID' ],
            //     $data['booking']['bReservationAgentID' ],
            //     $data['booking']['bDateCheckIn' ],
            //     $data['booking']['bDateCheckOut' ],
            //     $data['booking']['bRoomCount' ]
            // );
            echo "da booking"; die();
          
        } 
        // $data['main'] ="Booking/add-booking";
        $this->view('layout/Booking-form', $data);
        // require_once "./mvc/views/layout/Booking-form.php";

    }
    function createGuestSession($guest){
        $_SESSION['guest']['name'] =  $guest['Name'] ;
        $_SESSION['guest']['mail'] = $guest['Mail'];
        $_SESSION['guest']['dateCheckIn'] = $guest['DateCheckIn'];
        $_SESSION['guest']['dateCheckOut'] =$guest['DateCheckOut'];
    }

}
?>