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

    <!-- ======= SD Begginer Section ======= -->
 <section id="sdbeginner" class="sdbeginner section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Project SD Beginner</h2>
          <p>Berikut merupakan pembagian level yang tersedia di KodeKiddo Kudus berdasarkan usia murid.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><img src="{{asset('tema/img/sdbeginner.ico')}}"></img></div>
              <h4 class="title"><a href="">Music Project on Scratch <br> Nicholas London</a></h4>
              <p class="description">https://scratch.mit.edu/projects/758085696</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><img src="{{asset('tema/img/sdadv.ico')}}"></img></div>
              <h4 class="title"><a href="">Scratch: Code Your Hero for <br> Jayden Milan</a></h4>
              <p class="description">https://scratch.mit.edu/projects/663737048</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
               <div class="icon"><img src="{{asset('tema/img/smp.ico')}}"></img></div>
              <h4 class="title"><a href="">Tynker: Peep Dance <br> Kenneth</a></h4>
              <p class="description">www.tynker.com/ide/v3?type=player&p=623979ee0a324d1687211e27</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><img src="{{asset('tema/img/sma.ico')}}"></img></div>
              <h4 class="title"><a href="">Tynker: Nature Walk <br> Fahma</a></h4>
              <p class="description">www.tynker.com/ide/v3?type=player&p=62397d7a468a166b9267daab </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><img src="{{asset('tema/img/sdbeginner.ico')}}"></img></div>
              <h4 class="title"><a href="">Code.org: Project Story or Game <br> Jaden </a></h4>
              <p class="description">https://studio.code.org/projects/playlab/I7VLyQskphbl-LyDODOGNTUrLV8Yp1QW_CNLy9X8LeY </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><img src="{{asset('tema/img/sdadv.ico')}}"></img></div>
              <h4 class="title"><a href="">Code.org: Minecraft Adventurer<br> Valerie</a></h4>
              <p class="description">https://studio.code.org/c/1515113366</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
               <div class="icon"><img src="{{asset('tema/img/smp.ico')}}"></img></div>
              <h4 class="title"><a href="">Code.org: Athletes <br> Faye</a></h4>
              <p class="description">https://studio.code.org/c/1681669355</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><img src="{{asset('tema/img/sma.ico')}}"></img></div>
              <h4 class="title"><a href="">Code.org: Artist <br> Lucille</a></h4>
              <p class="description">https://studio.code.org/c/1669159628</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End SD Begginer Section -->


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