<!doctype html>
<html lang="en">
  <head>
    <title>Kashish Hotels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <?php include 'layout/navbar.php'; session_start();?>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Contact Us</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Contact Form</h2>
            <!-- Display session message if it exists -->
            <?php if (isset($_SESSION['message'])) : ?>
                <div class="alert alert-<?php echo strpos($_SESSION['message'], 'failed') !== false ? 'danger' : 'success'; ?>" role="alert">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
                // Once the message is displayed, unset the session variable to clear it
                unset($_SESSION['message']);
                ?>
            <?php endif; ?>
          <form action="contact-form.php" method="post">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" name="name" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" name="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Kashish Hotels and Restaurants</h3>
                <p class="mb-5"><img src="images/banner.png" alt="" class="img-fluid"></p>
                <p>Discover the ultimate in hospitality at Kashish Hotels and Restaurants. We're here to make your stay unforgettable, catering to your every need with warmth and attention. From cozy rooms to delicious dining, we've got you covered. Relax and enjoy - we'll take care of the rest. Welcome to your home away from home.</p>
              </div>
        </div>
      </div>
    </section>
    <!-- END section -->


   
   

    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
            <p class="lead mb-5">Discover the ultimate in hospitality at Kashish Hotels and Restaurants. We're here to make your stay unforgettable, catering to your every need with warmth and attention. From cozy rooms to delicious dining, we've got you covered. Relax and enjoy - we'll take care of the rest. Welcome to your home away from home.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   
  
    <?php include 'layout/footer.php' ?>
  </body>
</html>