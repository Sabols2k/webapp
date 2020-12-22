
<?php 
  // echo "name". $data['booking']['Name'];
  print_r($_SESSION['guest']);
  // print_r($data['booking']);
  
  // echo  $data['booking']['NameError'];
?>
<!doctype html>
<html lang="en">
<head>
  <?php 
        require_once "general/meta.php";
        require_once "general/css.php";
    ?>
    <title>Hotel Quite Luxury</title>
    <!-- ========== FAVICON ========== -->
    <link rel="icon" href="<?php echo URL ."mvc/Assets/images/favicon-logo.png"?>">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            min-width: 100%!important;
        }   
        .content {
            width: 100%;
            max-width: 600px;
            border: 1px solid #f5eddb;
        }   
        .main {
            padding: 30px 0;
            color: #acbac4;
            line-height: 20px;
            font-family: sans-serif;
        }   
        .main a {
            color: #acbac4;
            text-decoration: none;
        }   
        .eheader {
            padding: 20px;
        }   
        .innerpadding {
            padding: 30px;
        }   
        .borderbottom {
            border-bottom: 1px solid #e6eff2;
        }   
        .title {
            text-align: center;
            text-transform: uppercase;
        }   
        .title a {
            font-size: 30px;
            line-height: 40px;
            color: #fff;
        }   
        .subhead {
            text-align: center;
            font-size: 12px;
            color: #fff;
        }   
        .h1 {
            text-align: center;
            font-size: 30px;
            color: #fff;
        }   
        .h2 {
            padding: 0 0 15px 0;
            font-size: 16px;
            line-height: 28px;
            font-weight: bold;
        }   
        .h3 {
            font-size: 15px;
            text-decoration: underline;
        }   
        .bodycopy {
            font-size: 14px;
            line-height: 22px;
        }   
        .details {
            font-size: 14px;
        }   
        .mssg {
            font-size: 12px;
            text-align: center;
        }   
        .footer {
            padding: 20px 30px 15px 30px;
            border-top: 1px solid #f2f2f2;
        }   
        .footer a {
            color: #edcb9a;
        }   
        .footercopy {
            font-size: 15px;
            color: #777777;
        }   
        .footercopy a {
            color: #edcb9a;
        }   
        .social a {
            font-size: 14px;
        }   
        table tr td {
          padding: 3px 0;
        }   
        @media screen and (max-width: 600px) { .main { padding: 0; } }
    </style>
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
      <div class="page-title gradient-overlay op6" style="background: url(<?php echo URL ."mvc/Assets/images/breadcrumb.jpg"?>); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>Booking Form</h1>
            <ol class="breadcrumb">
              <li>
                <a href="<?php echo URL?>">Home</a>
              </li>
              <li>Booking Form</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main>
        <div class="container">
          <div class="row">
            <!-- CONTENT -->
            
            <div class="col-lg-9 col-12">
            <table width="100%" class="main" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>

                <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td bgcolor="#edcb9a" class="eheader">

                            <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                <tr>
                                    <td height="70">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="title" style="padding: 5px 0 0 0;">
                                                    <a href="%site_url%">%site_title%</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="subhead" style="padding: 0 0 0 3px;">
                                                    Reservation Details
                                                </td>
                                            </tr>


                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="h2">Dear [customer_name],</td>
                                </tr>
                                <tr>
                                    <td class="bodycopy">We are pleased to inform you that your booking [booking id] is confirmed. <br><br>
                                        Your check-in : [date-time] <br>
                                        Your checkout : [date-time]
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">

                            <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                <tr>
                                    <td class="h3">Reservation Details:</td>
                                </tr>

                                <tr>
                                    <td class="innerpadding details">

                                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                            <tr>
                                                <td>[Add room type]</td>
                                            </tr>
                                            <tr>
                                                <td>[Add number of people]</td>
                                            </tr>
                                            <tr>
                                                <td>[Add summary of pricing]</td> 
                                            </tr>
                                        </table>

                                    </td>

                                </tr>

                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td class="innerpadding bodycopy mssg">
                            Sincerely awaiting your visit,
                            <br> [Hotel manager name] </td>
                    </tr>
                    <tr>
                        <td class="footer" bgcolor="#f7f8f9">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="center" class="footercopy">
                                      &#169; 2020 <a href="%site_url%">%site_title%</a> All Rights Reserved.
                                  </td>
                                </tr>
                                <tr>
                                    <td align="center" class="social" style="padding: 10px 0 0 0;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                                    <a href="%facebook_link%">
                                                        facebook
                                                    </a>
                                                </td>
                                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                                    <a href="%twitter_link%">
                                                        twitter
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
            </div>


            <!-- SIDEBAR -->
            <div class="col-lg-3 col-12">
              <div class="sidebar">
                <div class="contact-details">
                  <div class="section-title">
                    <h4>OFFERS</h4>
                    <p class="section-subtitle">CHECK OUT OUR SPECIAL OFFERS</p>
                  </div>
                  <div class="offer-item sm mb50">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="#">
                        <img src="<?php echo URL ."mvc/Assets/images/offers/offer1.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                    <div class="ribbon">
                      <span>HOT OFFER</span></div>
                    <div class="offer-price uppercase">
                      5 nights for $1,875
                    </div>
                    <h3 class="offer-title">
                      <a href="#">All-Inclusive Honeymoon Package</a>
                    </h3>
                  </div>
                  <!-- ITEM -->
                  <div class="offer-item sm mb50">
                    <figure class="gradient-overlay-hover link">
                      <a href="#">
                        <img src="<?php echo URL ."mvc/Assets/images/offers/offer2.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                    <div class="ribbon">
                      <span>HOT OFFER</span></div>
                    <div class="offer-price">
                      8 nights for $2,000
                    </div>
                    <h3 class="offer-title">
                      <a href="#">All-Inclusive Family Package</a>
                    </h3>
                  </div>
                  <!-- ITEM -->
                  <div class="offer-item sm mb50">
                    <figure class="gradient-overlay-hover link">
                      <a href="#">
                        <img src="<?php echo URL ."mvc/Assets/images/offers/offer3.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                    <div class="ribbon">
                      <span>HOT OFFER</span></div>
                    <div class="offer-price">
                      3 nights for $268
                    </div>
                    <h3 class="offer-title">
                      <a href="#">Fly, Stay and Save Over 30%</a>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- ========== FOOTER ========== -->
      <?php
        require_once "general/footer.php";
      ?> 
    </div>
    <!-- ========== NOTIFICATION ========== -->
    <div id="booking-notification" class="notification fixed"></div>
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

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
  $("#bookingform").click(function(event) {
    var html = `<h1 style="color: #fff; background: #000;" > xin chao </h1> <br/>`;
    
    // email = $("#inputEmail").val();
        Email.send({
            Host: "smtp.gmail.com",
            Username: "henrytranls2k@gmail.com",
            Password: "Henry1234",
            SecureToken: "Generate token here",
            From: "henrytranls2k@gmail.com",
            To: "dangducchau2000@gmail.com",
            Subject: "You've booked from Quite Luxury!",
            Body: html+ "xin chao bạn (khong co button)"
        })
      };

</script>