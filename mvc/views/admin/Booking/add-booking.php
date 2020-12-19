<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Booking Details</h1>
    </div>

    <!-- New Booking Form Example -->
    <form method="POST">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Add Booking Details</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">BookingID</label>
                        <input name="BookingID"  type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">GuestID</label>
                        <input type="text" name="GuestID" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ReservationID</label>
                        <input name="ReservationID"  type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">DateCheckIn</label>
                        <input type="date" name="DateCheckIn" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">DateCheckOut</label>
                        <input name="DateCheckOut"  type="date" class="form-control">
                        
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">RoomCount</label>
                        <input type="text" name="RoomCount" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 p-t-20 text-center">
                <button type="submit" name="addbooking" class="mdl-button mdl-button--raised btn-yellow">Submit</button>
                <a class="mdl-button mdl-button--raised btn-default" href="<?php echo URLAdmin."viewbooking" ?>" style="text-decoration: none;">Cancel</a>
            </div> 
        </div>
    </div>
    </form>
</div>
<!-- /.container-fluid -->
