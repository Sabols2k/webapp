

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Booking</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Bookings</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?php echo URLAdmin."addbooking"?>" class="btn btn-light btn-icon-split mb-3">
                    <span class="icon text-gray-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">ADD NEW</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>BookingID</th>
                            <th>GuestID</th>
                            <th>ReservationID</th>
                            <th>DateCheckIn</th>
                            <th>DateCheckOut</th>
                            <th>RoomCount</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>BookingID</th>
                            <th>GuestID</th>
                            <th>ReservationID</th>
                            <th>DateCheckIn</th>
                            <th>DateCheckOut</th>
                            <th>RoomCount</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php  
                        $stt=1;
                        foreach($data['booking'] as $row){
                    ?>
                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><?php echo $row['bBookingID'] ?></td>
                            <td><?php echo $row['bGuestID'] ?></td>
                            <td><?php echo $row['bReservationAgentID'] ?></td>
                            <td><?php echo $row['bDateCheckIn'] ?></td>
                            <td><?php echo $row['bDateCheckOut'] ?></td>
                            <td><?php echo $row['bRoomCount'] ?></td>
                            <td>
                                <button class="btn btn-edit">
                                    <a href="<?php echo URLAdmin."editbooking/".$row['bBookingID']; ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </button>
                                <button class="btn btn-delete">
                                    <a onclick="return window.confirm('Bạn muốn xóa không');"  href="<?php echo URLAdmin.'deleteBooking/'.$row['bBookingID']; ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                    <?php
                        $stt++;
                        }
                    ?>   
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- </div> -->
<!-- End of Main Content -->

            