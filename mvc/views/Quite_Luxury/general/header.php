<header class="horizontal-header sticky-header" data-menutoggle="991">
        <div class="container">
          <!-- BRAND -->
          <div class="brand">
            <div class="logo">
              <a href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/index.html">
                <h1>Quite Luxury.</h1>
              </a>
            </div>
          </div>
          <!-- MOBILE MENU BUTTON -->
          <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
          <!-- MAIN MENU -->
          <nav id="main-menu" class="main-menu">
            <ul class="menu">
              <li class="menu-item dropdown active">
                <a href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/index.html">HOME</a>
              </li>
              <li class="menu-item">
                <a href="<?php echo URL ."views/Quite_Luxury/about-us.php"?>">About Us</a>
              </li>
              <li class="menu-item">
                <a href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/rooms-list.html">ROOMS</a>
              </li>
              <li class="menu-item dropdown">
                <a href="#">SERVICES</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/restaurant.html">Our Restaurant</a>
                  </li>
                  <li class="menu-item">
                    <a href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/spa.html">Our Spa</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a href="#">NEWS</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/blog.html">Blog</a>
                  </li>
                  <li class="menu-item">
                    <a href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/events.html">Events</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="http://localhost:8080/Web_App/Quite_Luxury/mvc/Assets/contact.html">CONTACT US</a>
              </li>
              <li class="menu-item menu-btn">
                <a href="<?php echo URL.'Booking'?>" class="btn">
                  <i class="fa fa-calendar"></i>
                  BOOK ONLINE</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>