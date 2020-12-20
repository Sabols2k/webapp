

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Accounts</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Accounts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="http://localhost:8080/Web_App/Quite_Luxury/admin/addaccount" class="btn btn-light btn-icon-split mb-3">
                    <span class="icon text-gray-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">ADD NEW</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>AccountID</th>
                            <th>IMG</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>BirthDate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                        $stt=1;
                        foreach($data['account'] as $row){
                    ?>
                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><?php echo $row['aAdminID'] ?></td>
                            <td><img style="height: 100px" src="<?php echo imgAccount . $row['aimg'] ?>" alt=""></td> 
                            <td><?php echo $row['aUsername'] ?></td>
                            <td><?php echo $row['aPassword'] ?></td>
                            <td><?php echo $row['aEmail'] ?></td>
                            <td><?php echo $row['aFirstName'] ?></td>
                            <td><?php echo $row['aLastName'] ?></td>
                            <td><?php echo $row['aAddress'] ?></td>
                            <td><?php echo $row['aCountry'] ?></td>
                            <td><?php echo $row['aPhone'] ?></td>
                            <td><?php echo $row['aGender'] ?></td>
                            <td><?php echo $row['aBirthday'] ?></td>
                            <td>
                                <button class="btn btn-edit">
                                    <a href="<?php echo URLAdmin.'editaccount/'.$row['aAdminID']; ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </button>
                                <button class="btn btn-delete">
                                    <a onclick="return window.confirm('Bạn muốn xóa không');"  href="<?php echo URLAdmin.'deleteAccount/'.$row['aAdminID']; ?>" style="color: #fff;">
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

            