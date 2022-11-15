<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vacation - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <?php
    session_start();
    if(!empty($_SESSION['lat'])||isset($_SESSION['lat'])) {
    }else{
    header("location:index.php");
    }
    ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">Solo<span>The Spirit of Java</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="profil-solo.php" class="nav-link">Profil</a></li>
            <li class="nav-item active"><a href="map.php" class="nav-link">Map</a></li>
            <li class="nav-item cta"><a href="login.php" class="nav-link">Login Admin</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="ftco-section" id="iribilangbos">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate" >
            <h2 class="mb-4">Profil Kota Solo</h2>
          </div>
        </div>
        <div align="center"><img style="width: 100%;" src="images/Sekilas-Solo.jpg"></div><br>
        <p><b>SEKILAS TENTANG KOTA SOLO</b></p>
Sebelum berkunjung ke Solo, beberapa informasi tentang Kota Solo<br><br>

<p><b>Di mana Solo berada?</b></p>

Kota Solo berlokasi di Indonesia tepatnya di Provinsi Jawa Tengah, dari Jakarta atau Bali dapat ditempuh selama satu jam, dari Kuala Lumpur selama dua jam, dari Singapura selama satu setengah jam melalui perjalanan udara atau bisa juga melalui perjalanan darat via kereta api selama 8 jam dari Jakarta. Akses ke Solo dapat dijangkau dari Yogyakarta selama 1 jam dengan kereta api.
<br><br>
<p><b>Konektivitas</b></p>

Solo memiliki gerbang internasional dan dapat diakses langsung dari Kuala Lumpur dan Singapura. Selain itu dapat pula diakses langsung dari Jakarta atau Bali melalui Yogyakarta.
<br><br>
<p><b>Penduduk</b></p>

Populasi penduduk Kota Solo  563.814 jiwa (data Dispendukcapil tahun 2018) di mana penduduk Solo dikenal kental dengan budaya Jawa dan menjadi salah satu pusat pengembangan tradisi Jawa. Kejayaan Solo berlangsung sejak abad ke-19 mendorong perkembangan sastra Jawa, kuliner, fashion, arsitektur dan berbagai budaya lainnya.
<br><br>
<p><b>Bahasa</b></p>

Bahasa yang digunakan di Kota Solo menggunakan dialek Jawa Mataraman (Jawa Tengah). Dialek ini juga digunakan di wilayah Yogyakarta, Magelang, Semarang, Pati, Madiun hingga sebagian wilayah Kediri. Namun dialek wilayah Solo terkenal dengan dialek yang lebih halus dalam penggunaan kata-kata di percakapan sehari-hari. Bahasa resmi yang digunakan di Kota Solo menggunakan bahasa Indonesia.
<br><br>
<p><b>Iklim</b></p>

Solo berada di wilayah iklim ekuatorial, hangat dan lembab sepanjang tahun. Temperatur udara rata-rata 28<sup>o</sup>C dengan curah hujan dengan intensitas cukup selama musim hujan pada bulan Desember hingga Maret.
<br><br>      </div>
    </section>
    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This web is made by Fazjar Sekti Aji supported with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>