<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <!-- <a href="../../index3.html" class="navbar-brand"> -->
        <img src="../../dist/img/logo stunting.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Pencegahan Stunting</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            {{-- <a href="{{ route('anak.index')}}" class="nav-link {{ ($title==='anak')?'active':''}}">Home</a> --}}
            {{-- <a href="{{ route('anak.index') }}" class="nav-link {{ ($title==='anak') ? 'active' : '' }}">Home</a> --}}

          <li class="nav-item">
            <a href="contac.php" class="nav-link">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pengecekan</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="cek.php" class="nav-link">Cek</a></a>
              <li><a href="grafik.php" class="dropdown-item">Grafik</a></li>
              <li><a href="{{ route('anak.index') }}" class="nav-link {{ ($title==='anak') ? 'active' : '' }}" class="dropdown-item">Tabel Data Anak</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <!-- <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle"></a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow"> -->
                  <li>
                    <!-- <a tabindex="-1" href="#" class="dropdown-item">level 2</a> -->
                  </li>

                  <!-- Level three dropdown-->
                  <!-- <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow"> -->
                      <!-- <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li> -->
                    </ul>
                  </li>
                  <!-- End Level three -->

                  <!-- <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li> -->
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        {{-- <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div> --}}

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <!-- <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span> -->
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <!-- <h3 class="dropdown-item-title">
                    Brad Diesel -->
                    <!-- <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div> -->
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <!-- <div class="media">
                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div> -->
              <!-- Message End -->
            <!-- </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item"> -->
              <!-- Message Start -->
              <!-- <div class="media">
                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div> -->
              <!-- Message End -->
            <!-- </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li> -->
        <!-- Notifications Dropdown Menu -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i> -->
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Aksi Cegah Stunting<small></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
              <!-- <li class="breadcrumb-item active">Top Navigation</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Ciri-Ciri Stunting<p></h5>

                <p class="card-text">
                Stunting adalah kondisi di mana pertumbuhan anak terhambat akibat malnutrisi kronis atau infeksi yang berulang. Anak yang mengalami stunting cenderung lebih pendek dari anak-anak seusianya. Stunting memiliki dampak jangka panjang terhadap kesehatan, perkembangan mental, dan kemampuan belajar anak. Berikut adalah beberapa ciri-ciri anak yang mengalami stunting:<p>

1. Tinggi Pendek:
Ciri utama stunting adalah tinggi badan anak yang jauh di bawah standar tinggi badan anak seusianya, sesuai dengan usia dan jenis kelamin.<p>
2. Perkembangan Fisik yang Terhambat:
Anak stunting mungkin memiliki tubuh yang kurus atau memiliki berat badan yang tidak proporsional dengan tinggi badan. Pertumbuhan otot dan tulang bisa juga terhambat.<p>
3. Perkembangan Kognitif dan Mental yang Terhambat:
Anak yang mengalami stunting cenderung memiliki kemampuan kognitif yang lebih rendah, yang dapat mempengaruhi kemampuan belajar dan perkembangan mental mereka.
Anak<p>
4. Perkembangan Motorik yang Lambat:
Anak stunting cenderung mengalami keterlambatan dalam perkembangan motorik, seperti berjalan, berlari, atau berbicara, dibandingkan dengan anak-anak seusianya.<p>
5. Sistem Imun yang Lemah:
Anak stunting cenderung lebih sering sakit atau mengalami infeksi karena sistem kekebalan tubuh mereka yang lemah akibat malnutrisi.
Mereka juga mungkin lebih rentan terhadap penyakit seperti diare dan infeksi saluran pernapasan.<p>
<h3>Dampak Jangka Panjang Stunting:</h3>
1. Penurunan kecerdasan<p></p>
2. Penurunan produktivitas<p></p>
3. Risiko penyakit kronis

                </p>

                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title"></h5>

                <p class="card-text">
                 
                </p>
                <!-- Blade Template -->
                <img src="../../dist/img/logo.png" width="500">

                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Vidio Mengenai Stunting</h5>
              </div>
              <div class="card-body">
                <!-- <h6 class="card-title">Special title treatment</h6> -->

                <p class="card-text">Apakah kalian familiar dengan kata “stunting?” 
                Kata ini beberapa kali muncul di media. Stunting artinya anak yang bertubuh pendek bukan? Bukannya memang normal jika ada anak yang tinggi dan pendek? Lalu mengapa hal ini sangat penting sampai sering muncul di media? Pertanyaan-pertanyaan ini akan segera kami jawab melalui video ini</p>
                <!-- Blade Template -->
            <video width="500" controls>
            <source src="../../dist/img/Apa itu Stunting_.mp4" width="500" type="video/mp4">
             <!-- <source src=<"{{ asset('../../dist/img/Apa itu Stunting_.mp4') }}" type="video/mp4"> -->
            </video>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">4 Cara Mengatasi Masalah Stunting pada Balita</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">“Pertumbuhan sang buah hati tidak hanya dipantau dari berat badan. Ibu juga perlu mengukur tinggi badan anak secara berkala untuk mencegah terjadinya stunting pada balita.”</h6>
                <img src="../../dist/img/stunting_01.png" width="500">
                <p class="card-text">Cara Mencegah Stunting pada Anak
Perlu diketahui bahwa stunting pada balita bisa berlanjut hingga usia dewasa. Jadi, sebelum berdampak pada pertumbuhan dan perkembangan anak secara menyeluruh, kondisi stunting harus dicegah. Adapun upaya pencegahan yang bisa dilakukan yaitu 
<class="bg-blue-500 p-2 rounded hover:bg-blue-700">Selengkapnya</class>


                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
