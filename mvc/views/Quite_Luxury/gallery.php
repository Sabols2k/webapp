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
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>GALLERY</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Gallery</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="gallery-page">
        <!-- FILTERS -->
        <div class="container">
          <div class="gallery-filters">
            <a href="#" data-filter="*" class="filter active">ALL</a>
            <a href="#" data-filter=".filter-restaurnat" class="filter">RESTAURANT</a>
            <a href="#" data-filter=".filter-swimmingpool" class="filter">SWIMMING POOL</a>
            <a href="#" data-filter=".filter-spa" class="filter">SPA</a>
            <a href="#" data-filter=".filter-roomview" class="filter">ROOM VIEW</a>
          </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
          <div class="grid image-gallery row">
            <!-- ITEM -->
            <div class="gallery-item filter-swimmingpool col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery1.jpg">
                  <img src="images/gallery/gallery1.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Swimming Pool</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-roomview col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery2.jpg">
                  <img src="images/gallery/gallery2.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Room View</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery3.jpg">
                  <img src="images/gallery/gallery3.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Cocktail</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-restaurnat col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery4.jpg">
                  <img src="images/gallery/gallery4.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Breakfast</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery5.jpg">
                  <img src="images/gallery/gallery5.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Playground</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-restaurnat col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery6.jpg">
                  <img src="images/gallery/gallery6.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Restaurant</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery7.jpg">
                  <img src="images/gallery/gallery7.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Wedding Ceremony</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-roomview col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery8.jpg">
                  <img src="images/gallery/gallery8.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Beach</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery9.jpg">
                  <img src="images/gallery/gallery9.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Honeymoon Room</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-roomview col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery10.jpg">
                  <img src="images/gallery/gallery10.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Sea</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-spa col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery11.jpg">
                  <img src="images/gallery/gallery11.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Spa Therapy</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-restaurnat col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery12.jpg">
                  <img src="images/gallery/gallery12.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Restaurant</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-roomview filter-restaurnat col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery13.jpg">
                  <img src="images/gallery/gallery13.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Restaurant</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery14.jpg">
                  <img src="images/gallery/gallery14.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Sea</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-restaurnat col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery15.jpg">
                  <img src="images/gallery/gallery15.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Restaurant</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item filter-roomview col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery16.jpg">
                  <img src="images/gallery/gallery16.jpg" class="img-fluid" alt="Image">
                </a>
                <figcaption>Room View</figcaption>
              </figure>
            </div>
          </div>
        </div>
      </main>
      <!-- ========== FOOTER ========== -->
      <?php
        require_once "general/footer.php";
      ?> 
    </div>
    <div class="notification"></div>
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
