<?php  
    if(isset($_SESSION['admin']['username'])){
        header('Location:'.URLAdmin);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - Login</title>
    <?php
    require_once('general/css.php');
    ?>
</head>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg" style="margin-top: 8rem;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome back Admin!</h1>
                                    </div>
                                    <form class="user" action="<?php echo URLAdmin ."/login"?>" method="POST">
                                        <div class="form-group">
                                            <input name="username" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username..."  maxlength=15 >
                                                <span class="invalidFeedback" style="color:red">
                                                    <?php echo $data['usernameError']; ?>
                                                </span>
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" maxlength=15 >
                                            <span class="invalidFeedback" style="color:red">
                                                <?php echo $data['passwordError']; ?>
                                            </span>
                                        </div>
                                        <button class="btn btn-info btn-user btn-block" id="submit" name="login" type="submit" value="submit">LOGIN</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="large" href="<?php echo URLAdmin."loginReserve"?>">Are you a receptionist?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/jquery/jquery.min.js"?>"></script>
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/jquery-easing/jquery.easing.min.js"?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo URL ."mvc/Assets/admin/js/sb-admin-2.min.js"?>"></script>

</body>

</html>