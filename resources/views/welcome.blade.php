<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PESTUN</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/kominfo-removebg-preview.png" rel="icon">
  <link href="assets/img/kominfo-removebg-preview.png" rel="kominfo">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">kominfo@acehtamiangkab.go.id. </a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>0811-675-618</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://twitter.com/kominfo_tamiang" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="https://m.facebook.com/profile.php?id=100064666326701" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/dinaskominfoacehtamiang" class="instagram"><i class="bi bi-instagram"></i></a>
          {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">PESTUN</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            {{-- <li><a href="#about">Cek Apakah Anak Mengalami Stunting</a></li> --}}
            <a class="cta-btn d-none d-sm-block" href="{{ url('/pengukuran') }}">Cek Apakah Anak Mengalami Stunting</a>
            {{-- <a class="cta-btn d-none d-sm-block" href="{{ route('kunjungan.create') }}">Isi Data Kunjungan</a> --}}

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        {{-- <a class="cta-btn d-none d-sm-block" href="{{ route('anak.create') }}">Masukkan Data Anak yang Mengalami Stunting</a> --}}
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>WELCOME TO PESTUN</h2>
          <p>Cegah Stunting Itu Penting!</p>
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Apa si itu stunting?</h3>
              <p>
                Stunting adalah gagal tumbuh akibat kurangnya asupan gizi, di mana dalam jangka pendek dapat menyebabkan terganggunya perkembangan otak, metabolisme, dan pertumbuhan fisik pada anak.              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Selengkapnya</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/apa-itu-stunting-1024x576.jpeg" class="img-fluid" alt="">
            <a href="https://youtu.be/0hqR6jDUDj4?si=px2WjEHYHBNBYOoY" class="glightbox pulsating-play-btn"></a>
        </div>
       

    
            {{-- <div class="row gy-4 gx-5"> --}}
    
              <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/Gejala-Stunting-pada-Anak-dan-Pencegahannya.jpg.webp" class="img-fluid" alt="">
                <a href="https://youtu.be/xMObJG0mx6A?si=nJXA-gK1nCZv87CI" class="glightbox pulsating-play-btn"></a>
              </div>

          
<center>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Pencegahan</h3>
            <p>
                kunci utama cara mengatasi stunting pada anak adalah dengan mengetahui pengetahuan tentang cegah stunting.             </p>

            </center>
            <ul>
              <li>
                {{-- <i class="fa-solid fa-vial-circle-check"></i> --}}
                <div>
                  <h5> Perbaiki stunting sebelum usia 2 tahun 
                </h5>
                  <p>Tips mengatasi stunting pada anak yang paling efektif adalah sebelum usia anak 2 tahun atau masih dalam masa 1.000 Hari Pertama Kehidupan  (HPK). Untuk itu, ibu hamil sudah harus menjaga asupan gizinya sejak awal pembuahan dan memerhatikan beberapa mikronutrien yang penting dalam kehamilan, seperti asam folat, kalsium, dan zat besi.  </p>
                </div>
              </li>
              <li>
                {{-- <i class="fa-solid fa-pump-medical"></i> --}}
                <div>
                  <h5> Beri olahan protein hewani pada MPASI</h5>
                  <p>Kekeliruan cara pemberian MPASI bisa menganggu pertumbuhan bayi hingga pada akhirnya meningkatkan risiko stunting. Contoh, bayi hanya diberi MPASI berupa pure buah-buahan dan sayur, tanpa diberi protein hewani. Padahal makanan yang kaya protein hewani, seperti daging ayam, daging sapi, telur, serta susu sangat dibutuhkan bayi untuk pertumbuhan yang optimal. </p>
                </div>
              </li>
              <li>
                {{-- <i class="fa-solid fa-heart-circle-xmark"></i> --}}
                <div>
                  <h5>Perilaku hidup bersih dan sehat</h5>
                  <p>
                    Cara mengatasi stunting pada anak yang tidak boleh dilewatkan adalah menerapkan perilaku hidup bersih dan sehat (PHBS), seperti cuci tangan dengan sabun dan air mengalir, terutama sebelum dan makan serta habis melakukan aktivitas di kamar mandi. Tidak menjaga kebersihan diri bisa menyebabkan masalah kesehatan, seperti diare. Diare yang terus berulang dapat menyebabkan anak mengalami kurang gizi, dan akhirnya meningkatkan risiko stunting. </p>
                </div>
                <div class="text-center">
                  <a href="https://yankes.kemkes.go.id/view_artikel/1388/mengenal-apa-itu-stunting" class="more-btn"><span>Selengkapnya</span> <i class="bi bi-chevron-right"></i></a>
  
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->
  
    <!-- Appointment Section -->

    
   

    
 
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <center>
        <p> Designed by <a href="https://www.instagram.com/celcimonica/">Monicaa</a></p>
        </center>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>