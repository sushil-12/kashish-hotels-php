<!doctype html>
<html lang="en">
  <head>
    <title>Kashish hotels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php include "layout/navbar.php"; session_start(); ?>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Reservation</h1>
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
            <h2 class="mb-5">Reservation Form</h2>
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

              <form action="submit_form.php" method="post">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="arrival_date">Arrival Date</label>
                        <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='text' class="form-control" id='arrival_date' name="arrival_date" />
                        </div>
                    </div>

                    <div class="col-sm-6 form-group">
                        <label for="departure_date">Departure Date</label>
                        <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='text' class="form-control" id='departure_date' name="departure_date" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="room">Room</label>
                        <select id="room" class="form-control" name="room">
                            <option value="1">1 Room</option>
                            <option value="2">2 Rooms</option>
                            <option value="3">3 Rooms</option>
                            <option value="4">4 Rooms</option>
                            <option value="5">5 Rooms</option>
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="guests">Guests</label>
                        <select id="guests" class="form-control" name="guests">
                            <option value="1">1 Guest</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                            <option value="5">5+ Guests</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="message">Write a Note</label>
                        <textarea id="message" class="form-control" name="message" cols="30" rows="8"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="submit" value="Send Enquiry" class="btn btn-primary">
                    </div>
                </div>
              </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Featured Room</h3>
                <div class="media d-block room mb-0">
              <figure>
                <img src="images/img_1.jpg" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Featured Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Presidential Room</a></h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                  <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                </ul>
                <p>Kashish hotels and restaurantss provide best expirence to stay and ready to fulfil your requirements </p>
                <p><a href="#" class="btn btn-primary btn-sm">Book Now </a></p>
              </div>
            </div>
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
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   
    <?php include "layout/footer.php"; ?>
  </body>
</html>