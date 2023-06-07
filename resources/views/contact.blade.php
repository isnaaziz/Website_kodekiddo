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

        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
          <p>Any question or remaks? Just write us a message!</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">

            <div class="address">
                <h6>Contact Information:</h6>
                <p>Fill up the form and our Team will get back to you within 24 hours.</p>
              </div>

              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Pemuda No. 57</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>infokudus@kodekiddo.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whatsapp:</h4>
                <p>+6281393619889</p>
              </div>
              <div class="phone">
                <i class="bi bi-instagram"></i>
                <h4>Instagram:</h4>
                <p>@kodekiddo.kds</p>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Phone Number</label>
                <input type="int" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


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