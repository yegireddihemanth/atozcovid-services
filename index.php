<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> vizag covid services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> AtoZ covid services portal
      </div>
       
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      
      <a href="" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
      <!--   <li><a href="#departments">Departments</a></li>-->
          
        <!--  <li><a href="#doctors">Doctors</a></li>-->
        <!--class="drop-down"-->
        <?php
           session_start();
          
            if(isset($_SESSION['email']))
            {
              ?>
          <li  class="drop-down" ><a href="#">My profile</a>
          <ul>
            <li><a href="bedbookings.php">My bed bookings</a></li>
            <li><a href="myvaccinationregs.php">My vaccination bookings</a></li>
            <li><a href="appointmentbookings.php">My online appontments</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </li>
        <?php 
            }
            ?>
            <?php
          
          
            if (!isset($_SESSION['email']))
            {
              ?>

               <li><a href="login.php">Login</a></li>
                <?php
            }?>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="apo.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an Online  Appointment</span></a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Welcome to <span>Covid services portal</span></h2>
            <p> This Portal consists of all services Related to Covid-19. You can easily access the resources through this portal. </p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Book an Appointment Now</h2>
            <p>You can book an appointment with the best doctors in the city </p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Book a slot for vaccination</h2>
            <p>Get your dose of vaccine before its late</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4 class="title"><a href="hospitaldb\hospitaldb.php">Show Hospital details</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-drug"></i></div>
              <h4 class="title"><a href="bedbookingform.php">Book a bed who are in critical condition.</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-thermometer-alt"></i></div>
              <h4 class="title"><a href="apo.php">Online Appointment</a></h4>
              <p class="description"></p>
            </div>
          </div>

         <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-dna-alt-1"></i></div>
              <h4 class="title"><a href="testcenters.php"> Covid Testing centers </a></h4>
              <p class="description"></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <p> Book an appointment with the best doctors in the city</p>
          <a class="cta-btn scrollto" href="apo.php">Make an Make an Online Appointment</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>We are trying to get the medical help to each and every person possible</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Our main motto is to combine the all the medical services and make them available at one place</h3>
            <p class="font-italic">
            Many people are not getting proper medical attention at proper time  
            </p>
            <ul>
            <li><i class="icofont-check-circled"></i> We provide you with prior doctor appointments.</li>
              <li><i class="icofont-check-circled"></i> You can book a bed in some of the top hospitals in the city.</li>
              <li><i class="icofont-check-circled"></i> All the information regarding the availabity of vaccines,Test centers,ventilator beds can be known.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">85</span>
              <p><strong>Doctors</strong> are constantly working to save lives.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">18</span>
              <p><strong>Hospitals </strong>are currently providing services to the covid patients.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up">80</span>
              <p><strong>Test </strong> centers are in working.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">150</span>
              <p><strong>Oxygen</strong> is provided by vendors at very less price.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
        <p>we are AtoZcovidserices. We are always strive to provide Exact Information to those who are in need.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-heart-beat"></i></div>
            <h4 class="title"><a href="hospitaldb\hospitaldb.php">Hospital Details</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="icofont-drug"></i></div>
            <h4 class="title"><a href="apo.php">Online appointment</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="icofont-dna-alt-2"></i></div>
            <h4 class="title"><a href="testcenters.php">Covid-Testing center Information</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-heartbeat"></i></div>
            <h4 class="title"><a href="vaccinationregistration.php">Get registered for vaccination</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="icofont-disabled"></i></div>
            <h4 class="title"><a href="bedbookingform.php">Book a bed</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="icofont-autism"></i></div>
            <h4 class="title"><a href="">Get Hailed on your own</a></h4>
            <p class="description"></p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>you can contact us or write to us from the address given below or call to given phone numbers </p>
        
        </div>

      </div>

      <div class="container">

         
            <div class="col">
              <div class="row-md-1">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>simhachalam ,vizag, 530022</p>
                </div>
              </div>
              <div class="row-md-10">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>praneethchintalapudi91@gmail.com<br>chandansusanth7@gmail.com</p>
                </div>
              </div>
          <!--    <div class="row-md-10">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 8187083169<br>+91 6305365148</p>
                </div>
              </div>
            </div>
           -->
          </div>

        
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
