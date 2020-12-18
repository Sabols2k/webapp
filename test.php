<?php 


public function editbooking($id){
       
    $booking = [
        'BookingID'=> '',
        'GuestID' => '',
        'ReservationAgentID' => '',
        'DateCheckIn' => '',
        'DateCheckOut'=> '',
        'bookingCount' => '',
        
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
                'RoonCount' => trim($_POST['RoomCount']),
                

            ];
            // print_r ($booking);
            $model=$this->modeladmin("booking");
            $model->updateBooking($id,$booking['bookingID'],   $booking['bookingTypeID' ], $booking['bookingPrice'], $booking['Description' ],$booking['bookingstatusID' ] );
            
            $data['booking'] =  $model->getAllBooking();
            $data['main']="booking/view-booking";
            header('Location:'.URLAdmin. 'viewbooking');
            $this->viewadmin("index",$data);
        }
    $data['main']="booking/edit-booking";
    $this->viewadmin("index",$data);

}


?>