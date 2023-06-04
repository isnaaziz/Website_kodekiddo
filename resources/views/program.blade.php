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

         <!-- ======= Program Section ======= -->
   <section id="program" class="program section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Explore Our Program</h2>
            <p>Berikut program yang dapat diikuti oleh murid, baik yang mengikuti kelas reguler maupun non-reguler <br> di KodeKiddo Malang</p>
          </div>
          <div class="row row-cols-1 row-cols-md-2 g-4 ">
            <div class="col">
              <div class="card card-pink">
                <img src="{{asset('tema/img/logo.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Zip Class</h5>
                  <p class="card-text">Zip Class adalah kelas singkat dengan topik spesifik yang paling baru. KodeKiddo dengan headquarter di Silicon Valley selalu mengikuti perkembangan terbaru di dunia pendidikan teknologi untuk anak dan membawa materi ini ke komunitas KodeKiddo di Indonesia.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card ">
                <img src="{{asset('tema/img/logo.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Holiday Program</h5>
                  <p class="card-text">Holiday Program merupakan program yang diadakan oleh Kodekiddo saat anak-anak mengikuti kelas atau liburan akhir tahun dengan tema pembelajaran tertentu seperti pembuatan game, modding Minecraft, Roblox, dan lain sebagainya.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{asset('tema/img/logo.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">STEM</h5>
                  <p class="card-text">STEM (Science, Technology, Engineering, Math) merupakan program yang dirancang untuk anak dimulai dari usia dini hingga kelas 7 SMP, yang terbagi menjadi 3 level yaitu Discoverer, Explorer, dan Investigator.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{asset('tema/img/logo.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Competition</h5>
                  <p class="card-text">Competition merupakan kegiatan lomba yang dapat diikuti oleh murid yang diadakan setiap 4 bulan sekali dengan menggunakan berbagai macam platform.</p>
                </div>
              </div>
            </div>
          </div>

      </div>
    </section><!-- End Program Section -->


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