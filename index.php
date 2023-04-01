<?php 
  include("config.php");
  include('admin/server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>JD Laundry</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/sa.png" rel="icon">
  <link href="img/sa.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <!-- <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  <!-- <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet"> -->
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script> -->

  <!-- Main Stylesheet File -->
  <script src="https://kit.fontawesome.com/643c3b561f.js" crossorigin="anonymous"></script>

  <link href="css/style.css" rel="stylesheet">

  <script src="js/bootstrap.min.js"></script>

  <script>
      // adding name attribute to the pricing modal
      function addName(book) {
        document.getElementById("link").setAttribute("name", book);
      }
  </script>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto"><?php echo $iconv ?></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo but a little size styling will be required -->
        <a href="#intro"><img src="img/shanes applause2.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#more-features">About Us</a></li>
          <li><a href="#features">Services</a></li>
          <li><a href="#pricing">Booking</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#gallery">Projects</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
  <div class="intro-text">
      <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
                <p class="reim">Reimagine Yourself & Your Space</p>
                <p class="with">With</p>
                <h2 class="name"><?php echo $namev ?></h2>
                <h4>Cleaning Service</h4>
                <p class="desc"><em><?php echo $descriptionv ?></em></p>
                <a href="#pricing" class="btn-get-started scrollto">Get Started</a>
          </div>
        <div class="col-md-6 col-12">
            <div class="image img-fluid"><img src="img/52055.jpg" class="image" alt=""></div>
        </div>
      </div>
      </div>
      </div>

    

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Your Comfort Depends On Us</h3>
          <span class="section-divider"></span>
          <p class="section-description">It's a lot more than just cleaning, it's making yourself and your home look the best possible way</p>
        </div>
        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
              <h4 class="title"><a href=""><span>1. </span>Order</a></h4>
              <p class="description">Click on 'Get Started' or go to the 'Booking' section to see available services</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa-regular fa-hand-pointer"></i></div>
              <h4 class="title"><a href=""><span>2. </span>Select Service</a></h4>
              <p class="description">Select the service you want and fill the quick form option that appears after</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa-solid fa-stopwatch" id="icon"></i></div>
              <h4 class="title"><a href=""><span>3. </span>Wait</a></h4>
              <p class="description">In less than 24 hours we will be at your door step doing what we do best</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa-regular fa-face-smile-wink"></i></div>
              <h4 class="title"><a href=""><span>4. </span>Enjoy Your Free Time</a></h4>
              <p class="description">Keep using our services and get back to doing things that matter more</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <h2 class="text-center">Our Pledge To You</h2>
      <p class="text-center">Shanes Applause is here to offer the best in cleaning services you can get anywhere in the country.</p>
      <div class="container">
        <div class="row text-center">
          <div class="cta col-4">
            <!-- <i class="fa-solid fa-check-double" id="icon"></i> -->
            <i class="fa-regular fa-thumbs-up" id="icon"></i>
            <!-- <iconify-icon icon="ion:thumbs-up-outline" id="icon"></iconify-icon> -->
            <h4>Trustworthy</h4>
          </div>
          <div class="cta col-4">
            <i class="fa-solid fa-money-bill-wave" id="icon"></i>
            <!-- <iconify-icon icon="ion:shield-checkmark-outline" id="icon"></iconify-icon> -->
            <h4>Affordable</h4>
          </div>
          <div class="cta col-4">
          <i class="fa-solid fa-mobile-screen-button" id="icon"></i>
            <!-- <iconify-icon icon="ion:phone-portrait-outline" id="icon"></iconify-icon> -->
            <h4>Convenient</h4>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Services Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Our Services</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="img/yy.png" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7">

            <div class="row" id="feat-col">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="fa-solid fa-house-chimney"></i></div>
                <h4 class="title">Home Cleaning</h4>
                <p class="description">You shouldn’t need to block out hours of your precious time for cleaning. Take back control of your time and do what you want!</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="fa-regular fa-building"></i></div>
                <h4 class="title">Office Cleaning</h4>
                <p class="description">The key is not in spending time but in investing it. Shanes applause is here to manage the cleaning needs of your offices, hostels or lodges.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="fa-solid fa-shirt"></i></div>
                <h4 class="title">Dry Cleaning <span class="soon">coming soon</span></h4>
                <p class="description">From everyday laundry to professional dry cleaning, we have a service that will meet your needs. Save 3-4 hours a week and let the experts handle it!</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="fa-solid fa-car-rear"></i></div>
                <h4 class="title">Car Wash <span class="soon">coming soon</span></h4>
                <p class="description">Your car is one of your major work horses, taking you where you need to go when you need to go there. Let us make it look sleek doing just that</p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- #features -->



    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Pricing & Booking</h3>
          <span class="section-divider"></span>
          <p class="section-description">Our prices are extremely favourable to encourage you do your best while we do the rest.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box wow fadeInLeft">
              <h3>Home Cleaning</h3>
              <h4><sup>&#8358;</sup><?php echo $homev ?></h4>
              <ul>
                <li><i class="fa-solid fa-check"></i> Price per room</li>
                <li><i class="fa-solid fa-check"></i> Sweeping and Mopping</li>
                <li><i class="fa-solid fa-check"></i> Bathrooms and Toilets</li>
                <li><i class="fa-solid fa-check"></i> Dusting and Polishing</li>
                <li><i class="fa-solid fa-check"></i> Disinfecting and Disinfestation</li>
              </ul>
              <a href="#" class="get-started-btn" data-toggle="modal" data-target="#myModal" onclick="addName('homeBtn')">Book Now</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
              <h3>Dry Cleaning</h3>
              <h4><sup>&#8358;</sup><?php echo $dryv ?></h4>
              <ul>
                <li><i class="fa-solid fa-check"></i> Price per clothing</li>
                <li><i class="fa-solid fa-check"></i> Strong and Light Washing</li>
                <li><i class="fa-solid fa-check"></i> Ironing and Folding</li>
                <li><i class="fa-solid fa-check"></i> Neat nylon packing</li>
                <li><i class="fa-solid fa-check"></i> Bleaching Services</li>
              </ul>
              <a href="#" class="get-started-btn" data-toggle="modal" data-target="#myModal" onclick="addName('dryBtn')" disable>Book Now</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box wow fadeInRight">
              <h3>Car Wash</h3>
              <h4><sup>&#8358;</sup><?php echo $carv ?></h4>
              <ul>
                <li><i class="fa-solid fa-check"></i> Price per vechicle</li>
                <li><i class="fa-solid fa-check"></i> Outside only wash</li>
                <li><i class="fa-solid fa-check"></i> Outside and Inside Wash</li>
                <li><i class="fa-solid fa-check"></i> Engine Cleaning</li>
                <li><i class="fa-solid fa-check"></i> Interior Polishing</li>
              </ul>
              <a class="get-started-btn" data-toggle="modal" data-target="#myModal" onclick="addName('carBtn')">Book Now</a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #pricing -->

     <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">New Booking</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="index.php" method="post">
          <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email address" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone"  placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">House Address</label>
                <input type="text" class="form-control" id="address" name="address"  placeholder="Enter your home address" required>
            </div>
            <div class="mb-3">
                <label for="msg" class="form-label">Message</label>
                <textarea name="msg" class="form-control" id="msg" cols="30" rows="2"  placeholder="Please drop any extra message"></textarea>
            </div>
            <input type="submit" class="btn btn-admin btn-lg modalSub" name="" id="link" value="Submit">

          </form>
        </div>

      </div>
    </div>
  </div>
    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Frequently Asked Questions</h3>
          <span class="section-divider"></span>
          <p class="section-description">Please review for some of the most asked questions, message us for any other.</p>
        </div>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Do I have to visit your office for a service? <i class="fa-solid fa-minus"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                No you do not need to come to our office. You can preferably use our website by booking a service and filling the quick form. You can also call or message us on the numbers provided.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">How long does it take to finish the cleaning? <i class="fa-solid fa-minus"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                That all depends on the size and amount of work to be put into the service. But we normally always strive to finish as quickly as possible while giving you the best results.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">How long would I wait before you respond to my request? <i class="fa-solid fa-minus"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Our 24/7 customer service should respond via call or message at all times and we would always be on-site for cleaning or pickup within the next 24 hours.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">What happens if I do not like the cleaning? <i class="fa-solid fa-minus"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                We can assure you that our services are top of the line but if you do have particular challenges with our service, you could point them out and we would happily redo.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">What happens with misplaced or damaged items? <i class="fa-solid fa-minus"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                In the impossible event something is misplaced or damaged, your order is backed by our satisfaction guarantee
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- #faq -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Our Team</h3>
          <span class="section-divider"></span>
          <p class="section-description">A dedicated team ready to serve you.</p>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/owner1.jpg" alt=""></div>
              <h4>Engr Vitalis Chukwuebuka Obodoechi</h4>
              <!-- <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/owner2.jpg" alt=""></div>
              <h4>Barrister Odinaka Asogwa</h4>
              <!-- <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Completed Projects</h3>
          <span class="section-divider"></span>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 col-6">
            <div class="gallery-item wow fadeInUp">
              <a href="admin/image/<?php echo $image1v ?>" class="gallery-popup">
                <img src="admin/image/<?php echo $image1v ?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="gallery-item wow fadeInUp">
              <a href="admin/image/<?php echo $image2v ?>" class="gallery-popup">
                <img src="admin/image/<?php echo $image2v ?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="gallery-item wow fadeInUp">
              <a href="admin/image/<?php echo $image3v ?>" class="gallery-popup">
                <img src="admin/image/<?php echo $image3v ?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="gallery-item wow fadeInUp">
              <a href="admin/image/<?php echo $image4v ?>" class="gallery-popup">
                <img src="admin/image/<?php echo $image4v ?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="gallery-item wow fadeInUp">
              <a href="admin/image/<?php echo $image5v ?>" class="gallery-popup">
                <img src="admin/image/<?php echo $image5v ?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="gallery-item wow fadeInUp">
              <a href="admin/image/<?php echo $image6v ?>" class="gallery-popup">
                <img src="admin/image/<?php echo $image6v ?>" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Shanes Applause</h3>
              <p>We stand as one of the most distinguished and trusted cleaning service in Enugu State, Nigeria. Our contact service is available 24/7. Schedule a service with us today simply using your phone and allow us work our magic.</p>
              <div class="social-links">
                <a href="https://www.google.com/maps/search/swissgarde+plaza+ogui+road+enugu" class="location" target="_blank"><i class="fa fa-location"></i></a>
                <a href="tel:+2348081935254" class="phone" target="_blank"><i class="fa fa-phone"></i></a>
                <a href="tel:+2348037478236" class="phone" target="_blank"><i class="fa fa-phone"></i></a>
                <a href="https://www.instagram.com/shanesapplause_cleaningsvcs/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="mailto:shanesapplause@gmail.com" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                <!-- <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="fa-solid fa-location-dot"></i>
                <p>Office No 026, Swiss Garden Plaza, <br>Ogui Road,Enugu, Nigeria</p>
              </div>

              <div>
                <i class="fa-solid fa-at"></i>
                <p>shanesapplause@gmail.com</p>
              </div>

              <div>
                <i class="fa-solid fa-phone"></i>
                <p>08081935254<br>08037478236</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message" name="contact_msg">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>
  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <a href="admin/index.php" style="color: inherit;" target=”_blank”><strong>JD Laundry</strong></a>. All Rights Reserved
          </div>
          
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#pricing" class="scrollto">Place Order</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
