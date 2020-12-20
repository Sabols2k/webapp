<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Account Details</h1>
    </div>

    <!-- New account Form Example -->
    <form method="POST">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Edit Account Details</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ảnh đại diện</label>
                        <input value="<?php echo $data['account']['aimg']; ?>" name="aUsername" type="text" class="form-control">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">AdminID</label>
                        <input value="<?php echo $data['account']['aAdminID']; ?>" name="aAdminID" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Username</label>
                        <input value="<?php echo $data['account']['aUsername']; ?>" name="aUsername" type="text" class="form-control">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input value="<?php echo $data['account']['aPassword']; ?>" name="aPassword" type="text" class="form-control">
                    </div>                               
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input value="<?php echo $data['account']['aEmail']; ?>" name="aEmail"type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">FirstName</label>
                            <input value="<?php echo $data['account']['aFirstName']; ?>" name="aFirstName"type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">LastName</label>
                            <input value="<?php echo $data['account']['aLastName']; ?>" name="aLastName"type="text" class="form-control">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <input value="<?php echo $data['account']['aAddress']; ?>" name="aAddress"type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Country</label>
                            <input value="<?php echo $data['account']['aCountry']; ?>" name="aCountry"type="text" class="form-control">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Phone</label>
                            <input value="<?php echo $data['account']['aPhone']; ?>" name="aPhone"type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Gender</label>
                            <input value="<?php echo $data['account']['aGender']; ?>" name="aGender"type="text" class="form-control">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Birthday</label>
                            <input value="<?php echo $data['account']['aBirthday']; ?>" name="aBirthday"type="date" class="form-control">
                    </div>
                </div>
               
                
            </div>
            
           
            <div class="col-lg-12 p-t-20 text-center">
                <button  type="submit" name="editAccount" value="Update" class="mdl-button mdl-button--raised btn-pink" href="<?php echo URLAdmin.'viewaccount'?>"> Submit
               </button>
                <button type="button" class="mdl-button mdl-button--raised btn-default">Cancel</button>
            </div> 
        </div>

    </div>
    </form>
</div>
<!-- /.container-fluid -->
