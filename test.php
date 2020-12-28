<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap core JavaScript-->
</head>
<body>
    <form action="">
    <button style="color: #fff; background: #000;"  type="button" class="btn btn-primary pt-3 pb-3 pl-5 pr-5" id="btn">Thanh toán </button>
    </form>
</body>

</html>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>

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
    

</script>

    
<html>
  <!-- ITEM OFFER -->
  <div class="col-lg-6 mt10">
              <h3 class="room-title">
                <a href="#">OFFERS 2</a>
              </h3>
            </div>
            <div class="col-lg-6 mb30 mt10">
              <a href="#" class="btn btn-dark" style="float: right;">
                <i class="fa fa-bed"></i>BOOK NOW
              </a>
            </div>
            <!-- ITEM -->
            <div class="col-lg-6">
              <div class="room-block-item">
                <div class="row">
                  <div class="col-md-6">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="room.html">
                        <img src="<?php echo URL ."mvc/Assets/images/rooms/deluxe/deluxe.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <div class="col-md-6">
                    <div class="room-info">
                      <h3 class="room-title">
                        <a href="room.html">DELUXE ROOM</a>
                      </h3>
                      <span class="room-rates">
                        <i class="fa fa-check"></i>
                        <a href="#">Number of rooms: 8</a>
                      </span>
                      <div class="room-services">
                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                        <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
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
                        <img src="<?php echo URL ."mvc/Assets/images/rooms/family/family.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <div class="col-md-6">
                    <div class="room-info">
                      <h3 class="room-title">
                        <a href="room.html">FAMILY ROOM</a>
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
            <!-- ITEM OFFER -->
            <div class="col-lg-6 mt10">
              <h3 class="room-title">
                <a href="#">OFFERS 3</a>
              </h3>
            </div>
            <div class="col-lg-6 mb30 mt10">
              <a href="#" class="btn btn-dark" style="float: right;">
                <i class="fa fa-bed"></i>BOOK NOW
              </a>
            </div>
            <!-- ITEM -->
            <div class="col-lg-6">
              <div class="room-block-item">
                <div class="row">
                  <div class="col-md-6">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="room.html">
                        <img src="<?php echo URL ."mvc/Assets/images/rooms/king/king.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <div class="col-md-6">
                    <div class="room-info">
                      <h3 class="room-title">
                        <a href="room.html">KING ROOM</a>
                      </h3>
                      <span class="room-rates">
                        <i class="fa fa-check"></i>
                        <a href="#">Number of rooms: 8</a>
                      </span>
                      <div class="room-services">
                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                        <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
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
                        <img src="<?php echo URL ."mvc/Assets/images/rooms/honeymoon/honeymoon.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <div class="col-md-6">
                    <div class="room-info">
                      <h3 class="room-title">
                        <a href="room.html">HONEYMOON ROOM</a>
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
            <!-- ITEM OFFER -->
            <div class="col-lg-6 mt10">
              <h3 class="room-title">
                <a href="#">OFFERS 4</a>
              </h3>
            </div>
            <div class="col-lg-6 mb30 mt10">
              <a href="#" class="btn btn-dark" style="float: right;">
                <i class="fa fa-bed"></i>BOOK NOW
              </a>
            </div>
            <!-- ITEM -->
            <div class="col-lg-6">
              <div class="room-block-item">
                <div class="row">
                  <div class="col-md-6">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="room.html">
                        <img src="<?php echo URL ."mvc/Assets/images/rooms/view/view.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <div class="col-md-6">
                    <div class="room-info">
                      <h3 class="room-title">
                        <a href="room.html">ROOM WITH VIEW</a>
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
            <!-- ITEM -->
            <div class="col-lg-6">
              <div class="room-block-item">
                <div class="row">
                  <div class="col-md-6">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="room.html">
                        <img src="<?php echo URL ."mvc/Assets/images/rooms/luxury/luxury.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <div class="col-md-6">
                    <div class="room-info">
                      <h3 class="room-title">
                        <a href="room.html">LUXURY ROOM</a>
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
</html>

  
