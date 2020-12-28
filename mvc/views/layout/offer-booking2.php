<!doctype html>
<html lang="en">
<head>
    <?php 
        require_once "general/meta.php";
        require_once "general/css.php";
    ?>
  </head>
  <body>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
      <!-- ========== TOP MENU ========== -->
      <?php
        require_once "general/topbar.php";
      ?> 
      <!-- ========== HEADER ========== -->
      <?php
        require_once "general/header.php";
      ?> 
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(<?php echo URL ."mvc/Assets/images/breadcrumb.jpg"?>"); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>CONTACT</h1>
            <ol class="breadcrumb">
              <li>
                <a href="<?php echo URL?>">Home</a>
              </li>
              <li>Contact</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="rooms-block">
        <div class="container">
          <div class="row">
            <?php  
              $stt=1;
              foreach($data['offer'] as $row){
                // print_r($data['offer']);
            ?>
              <!-- ITEM OFFER -->
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-6 mt10">
                    <h3 class="room-title">
                      <a href="#">OFFERS <?php echo $stt; ?></a>
                    </h3>
                  </div>
                  <div class="col-lg-6 mb30 mt10">
                    <a href="<?php echo URL ."Booking/Confirm" ?>" class="btn btn-dark" style="float: right;">
                      <i class="fa fa-bed"> </i>BOOK NOW
                    </a>
                  </div>
                  <!-- ITEM -->
                  <div class="col-lg-6">
                    <div class="room-block-item">
                      <div class="row">
                        <div class="col-md-6">
                          <figure class="gradient-overlay-hover link-icon">
                            <a href="room.html">
                              <img src="<?php echo URL ."mvc/Assets/images/rooms/single/single1.jpg"?>" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-md-6">
                          <div class="room-info">
                            <h3 class="room-title">
                              <a href="room.html">SINGLE ROOM</a>
                            </h3>
                            <span class="room-rates">
                              <i class="fa fa-check"></i>
                              <a href="#">Number of rooms: 2</a>
                            </span>
                            <div class="room-services">
                              <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                              <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                              <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ITEM -->
                  <div class="col-lg-6">
                    <div class="room-block-item">
                      <div class="row">
                        <div class="col-md-6">
                          <figure class="gradient-overlay-hover link-icon">
                            <a href="room.html">
                              <img src="<?php echo URL ."mvc/Assets/images/rooms/double/double.jpg"?>" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-md-6">
                          <div class="room-info">
                            <h3 class="room-title">
                              <a href="room.html">DOUBLE ROOM</a>
                            </h3>
                            <span class="room-rates">
                              <i class="fa fa-check"></i>
                              <a href="#">Number of rooms: 8</a>
                            </span>
                            <div class="room-services">
                              <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                              <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                              <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>      
            <?php
              $stt++;
                }
            ?> 
          </div>
          

          


          <div class="load-more">
            LOAD MORE ROOMS
          </div>
        </div>
      </main>
      <!-- ========== FOOTER ========== -->
      <?php
        require_once "general/footer.php";
      ?> 
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <?php 
        require_once('general/js.php');
    ?>
  </body>
</html>