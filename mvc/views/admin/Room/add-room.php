<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Room Details</h1>
    </div>

    <!-- New Booking Form Example -->
    <form method="POST">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Add Room Details</h6>
        </div>
        <div class="card-body">
            <div class="row">
                
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Type</label>
                        <select name="RoomTypeID" class="form-control" id="exampleFormControlSelect1">
                            <option>SingleRoom</option>
                            <option>DoubleRoom</option>
                            <option>FamilyRoom</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Price</label>
                        <input name="RoomPrice" type="text" class="form-control">
                    </div>                               
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Description</label>
                        <input name="Description"type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select name="RoomstatusID" class="form-control" id="exampleFormControlSelect1">
                            <option></option>
                            <option>Trống</option>
                            <option>Chờ</option>
                            <option>Đầy</option>
                        </select>
                    </div>
                </div>
                
            </div>
            
            <!-- <div class="col-lg-12 p-t-20">
                <label class="control-label col-md-3">Upload Photo</label>
                <form id="id_dropzone" class="dropzone">
                    <div class="dz-message">
                        <div class="dropIcon p-4">
                            <img src="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/admin/img/baseline_backup_black.png">
                        </div>
                        <h3>Drop files here or click to upload.</h3>
                        <em> ( This is just a demo. Selected files are <strong>not</strong>
                            actually uploaded.)
                        </em>
                    </div>
                </form>
            </div> --> 
            <!-- <div class="col-lg-12 p-t-20">
                <div class="form-group mt-4">
                    <label for="exampleFormControlTextarea1">Room Details</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
            </div> -->
            <div class="col-lg-12 p-t-20 text-center">
                <button type="submit" name="addroom" class="mdl-button mdl-button--raised btn-pink">Submit</button>
                <button type="button" class="mdl-button mdl-button--raised btn-default">Cancel</button>
            </div> 
        </div>

    </div>
    </form>
</div>
<!-- /.container-fluid -->