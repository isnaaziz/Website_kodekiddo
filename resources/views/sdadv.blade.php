<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KodeKiddo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('tema/img/logo.png')}}" rel="icon">
  <link href="{{asset('tema/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('tema/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('tema/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('tema/css/sdbeginner.css')}}" rel="stylesheet">
  <link href="{{asset('tema/css/sdadv.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Scaffold
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a src="{{asset('tema/img/logo.png')}}" href="index.html">KodeKiddo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--<a href="index.html"><img src="{{asset('tema/img/logo.png')}}" alt="" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto active" href="">Home</a></li>
          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{route('level')}}">Level</a></li>
              <li><a class="nav-link scrollto" href="{{route('platform')}}">Platform</a></li>
              <li><a class="nav-link scrollto" href="{{route('program')}}">Program</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{route('about')}}">About Us</a></li>
          <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-person"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

    <!-- ======= SD Adv ======= -->
    <section id="sdadv" class="sdadv section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Project SD Advanced</h2>
          <p>Berikut merupakan pembagian level yang tersedia di KodeKiddo Kudus berdasarkan usia murid.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><img src="{{asset('tema/img/sdbeginner.ico')}}"></img></div>
              <h4 class="title"><a href="https://scratch.mit.edu/projects/858740488/">Ajojing Interactive Animation </a></h4>
              <p class="description">Philip <br> Scratch</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><img src="{{asset('tema/img/sdadv.ico')}}"></img></div>
              <h4 class="title"><a href="https://scratch.mit.edu/projects/857309918/">Boat Race</a></h4>
              <p class="description">Nico <br> Scratch</r></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
               <div class="icon"><img src="{{asset('tema/img/smp.ico')}}"></img></div>
              <h4 class="title"><a href="www.tynker.com/ide/v3?type=player&p=64647afed6d4051d047316b8">Math Quiz Game </a></h4>
              <p class="description">Christopher Arvin Prasetyo <br> Tynker </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><img src="{{asset('tema/img/sma.ico')}}"></img></div>
              <h4 class="title"><a href="www.tynker.com/ide/v3?type=player&p=647085302cb8c636e76466ee">Rare Thrill Runners </a></h4>
              <p class="description">Mikayla K Agusta<br> Tynker</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><img src="{{asset('tema/img/sdbeginner.ico')}}"></img></div>
              <h4 class="title"><a href="www.tynker.com/ide/v3?type=player&p=646b13238e16a03382001147">Space Rush</a></h4>
              <p class="description">Rayvan Marlon Himawan <br> Tynker</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><img src="{{asset('tema/img/sdadv.ico')}}"></img></div>
              <h4 class="title"><a href="">Turtle Snowflakes </a></h4>
              <p class="description">Jonathan <br> Trinket</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
               <div class="icon"><img src="{{asset('tema/img/smp.ico')}}"></img></div>
              <h4 class="title"><a href="">Storytime </a></h4>
              <p class="description">Gizela <br> Trinket</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><img src="{{asset('tema/img/sma.ico')}}"></img></div>
              <h4 class="title"><a href="">Magic 8 Ball </a></h4>
              <p class="description">Gizela <br> Trinket </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End SD Adv Section -->


  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('tema/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('tema/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('tema/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('tema/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('tema/js/main.js')}}"></script>

</body>

</html>