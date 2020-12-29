<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
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
        
        .btn {
            background: #edcb9a;
            color: #fff;
            letter-spacing: 0.5px;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 10px 20px;
            border-radius: 50px;
            outline: none;
            border: none;
        }

        .btn:hover{
            background: #d8ba8e;
            cursor: pointer;
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
    <table width="100%" bgcolor="#f5eddb" class="main" border="0" cellpadding="0" cellspacing="0">
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
                                                    <a href="#">QUITE LUXURY Hotel</a>
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
                                    <td class="h2">Hello <?php echo $_SESSION['guest']['name']; ?> ,</td>
                                </tr>
                                <tr>
                                    <td class="bodycopy">Your reservation has been submitted to us and we'll contact you as quickly as possible to complete your booking. If you have any question please don't hesitate to contact us via email <span style="font-size: 18px; color: green;">quiteluxuryhotel@gmail.com</span > or via phone number <span style="font-size: 18px; color: green;"> 012345678</span></td>
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

                                            <!-- <tr>
                                                <td>Booking ID</td>
                                                <td>%booking_id%</td>
                                            </tr> -->

                                            <tr>
                                                <td>Name</td>
                                                <td><?php echo $_SESSION['guest']['name']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td><?php echo $_SESSION['guest']['mail']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Phone</td>
                                                <td><?php echo $_SESSION['guest']['phone']; ?></td>
                                            </tr>
                                          
                                            <tr>
                                                <td>Room Type</td>
                                                <td><?php echo $_SESSION['finaloffer']['roomtype']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Number of rooms</td>
                                                <td><?php echo $_SESSION['finaloffer']['roomcount']; ?> Phòng</td>
                                            </tr>

                                            <tr>
                                                <td>Adults</td>
                                                <td><?php echo $_SESSION['guest']['numberAdult']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Children</td>
                                                <td><?php echo $_SESSION['guest']['numberChildren']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Arrival</td>
                                                <td><?php echo $_SESSION['guest']['dateCheckIn']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Departure</td>
                                                <td><?php echo $_SESSION['guest']['dateCheckOut']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Country</td>
                                                <td><?php echo $_SESSION['guest']['country']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Comments</td>
                                                <td><?php echo $_SESSION['guest']['Decription']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 18px" class="h3">Total price: </td>
                                                <td><?php echo $_SESSION['finaloffer']['price']; ?> $</td>
                                            </tr>

                                        </table>

                                    </td>

                                </tr>
                               

                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td class="innerpadding bodycopy mssg">
                            <form method="POST">
                                <button id="submit" name="finalBooking" class="btn">booking confirmation</button></td>
                            </form>
                    </tr>
                    <tr>
                        <td class="footer" bgcolor="#f7f8f9">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="center" class="footercopy">
                                      &#169; 2020 <a href="http://localhost:8080/Web_App/Quite_Luxury/Home">QUITE LUXURY Hotel</a> All Rights Reserved.
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
       var html =`
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
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
        
        .btn {
            background: #edcb9a;
            color: #fff;
            letter-spacing: 0.5px;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 10px 20px;
            border-radius: 50px;
            outline: none;
            border: none;
        }

        .btn:hover{
            background: #d8ba8e;
            cursor: pointer;
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
    <table width="100%" bgcolor="#f5eddb" class="main" border="0" cellpadding="0" cellspacing="0">
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
                                                    <a href="#">QUITE LUXURY Hotel</a>
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
                                    <td class="h2">Hello <?php echo $_SESSION['guest']['name']; ?> ,</td>
                                </tr>
                                <tr>
                                    <td class="bodycopy">Your reservation has been submitted to us and we'll contact you as quickly as possible to complete your booking. If you have any question please don't hesitate to contact us via email <span style="font-size: 18px; color: green;">quiteluxuryhotel@gmail.com</span > or via phone number <span style="font-size: 18px; color: green;"> 012345678</span></td>
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

                                            <!-- <tr>
                                                <td>Booking ID</td>
                                                <td>%booking_id%</td>
                                            </tr> -->

                                            <tr>
                                                <td>Name</td>
                                                <td><?php echo $_SESSION['guest']['name']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td><?php echo $_SESSION['guest']['mail']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Phone</td>
                                                <td><?php echo $_SESSION['guest']['phone']; ?></td>
                                            </tr>
                                          
                                            <tr>
                                                <td>Room Type</td>
                                                <td><?php echo $_SESSION['finaloffer']['roomtype']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Number of rooms</td>
                                                <td><?php echo $_SESSION['finaloffer']['roomcount']; ?> Phòng</td>
                                            </tr>

                                            <tr>
                                                <td>Adults</td>
                                                <td><?php echo $_SESSION['guest']['numberAdult']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Children</td>
                                                <td><?php echo $_SESSION['guest']['numberChildren']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Arrival</td>
                                                <td><?php echo $_SESSION['guest']['dateCheckIn']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Departure</td>
                                                <td><?php echo $_SESSION['guest']['dateCheckOut']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Country</td>
                                                <td><?php echo $_SESSION['guest']['country']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Comments</td>
                                                <td><?php echo $_SESSION['guest']['Decription']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 18px" class="h3">Total price: </td>
                                                <td><?php echo $_SESSION['finaloffer']['price']; ?> $</td>
                                            </tr>

                                        </table>

                                    </td>

                                </tr>
                               

                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td class="footer" bgcolor="#f7f8f9">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="center" class="footercopy">
                                      &#169; 2020 <a href="http://localhost:8080/Web_App/Quite_Luxury/Home">QUITE LUXURY Hotel</a> All Rights Reserved.
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
    </body>
</html>
        `;
        document.getElementById("submit").addEventListener("click", myFunction);
        function myFunction() {
        //   document.getElementById("demo").innerHTML = "Hello World";
       
            Email.send({
            Host: "smtp.gmail.com",
            Username: "henrytranls2k@gmail.com",
            Password: "Henry1234",
            SecureToken: "Generate token here",
            From: "henrytranls2k@gmail.com",
            To: "<?php echo $_SESSION['guest']['mail']; ?>",
            Subject: "You've booked from Quite Luxury!",
            Body: html 
        }).then(
            alert("mail sent successfully")
        );
        }
    </script>
</body>
</html>

