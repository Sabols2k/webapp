
<!-- // session_start(); //start the PHP_session function  -->
<!-- // echo "hfdjf";
// if(isset($_SESSION['user_id']))
// {
//     //  $_SESSION['page_count'] += 1;
//      echo 'You are visitor number ' . $_SESSION['user_id'];
// }
// else
// {
//      $_SESSION['page_count'] = 1;
// }
//  echo 'You are visitor number ' . $_SESSION['page_count']; -->
<?php  
    // echo 'abc'. $_SESSION['test'];
    if(empty($_SESSION['username'])){
        header('Location:'.URLAdmin.'login');

    }
    // print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once('general/meta.php');
    require_once('general/css.php');
    ?>
    <title>Admin - Hotel Booking Room</title>
    <link rel="icon" href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/admin/img/favicon-logo.png">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
            require_once('general/sidebar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                    require_once('general/navbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php
                    require_once($data['main'].'.php');
                ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Design by &copy; Team 5 / 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php
        require_once('general/logout.php');
    ?>
    <?php
        require_once('general/js.php');
    ?>
  
</body>

</html>