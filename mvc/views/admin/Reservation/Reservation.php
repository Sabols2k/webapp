

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Reservations</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Reservations</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Guest</th>
                            <th>Total Rooms</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Guest</th>
                            <th>Total Rooms</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php  
                        $stt=1;
                        foreach($data['reservation'] as $row){
                    ?>
                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><?php echo $row['bBookingID'] ?></td>
                            <td><?php echo $row['gGuestID'] ?></td>
                            <td><?php echo $row['gName'] ?></td>
                            <td><?php echo $row['gEmail'] ?></td>
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
                                <button class="btn btn-confirm">
                                    <a href="<?php echo URLAdmin.'/'.$row['']; ?>">
                                        <i class="fad fa-check-circle"></i>
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

            