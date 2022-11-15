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
  </head>
  <?php
  session_start();

if(!empty($_SESSION['lat'])) {
}else{
header("location:index.php");
}
include "koneksi.php";
?>
  <body>
	   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">Solo<span>The Spirit of Java</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item "><a href="profil-solo.php" class="nav-link">Profil</a></li>
            <li class="nav-item active"><a href="map.php" class="nav-link">Map</a></li>
            <li class="nav-item cta"><a href="login.php" class="nav-link">Login Admin</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/1aa.png');" data-stellar-background-ratio="0.5" align="center">
      <div class="overlay"></div>

    <!--main-section-start-->
    <div class="container" style="padding-top: 135px;color: white;" align="center">
      <h2 style="color: white;">Peta Wisata kota Solo</h2>
      

    </div>
    <div style="margin-top: -25px;padding: 25px;" class=" wow fadeInUp delay-04s">
    <?php
  include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
  <head>
    <style>
      #map-canvas {
       height: 400px;  /* The height is 400 pixels */
        width: 80%;
        margin-left: 10%;  /* The width is the width of the web page */
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k"></script>

    <script>
    var marker;
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }     
        var zom=15;
        var uluru = {lat:<?php echo $_SESSION['lat'];?>, lng: <?php echo $_SESSION['long'];?>};
        var map = new google.maps.Map(
      document.getElementById('map-canvas'), {zoom: zom, center: uluru});
        var infoWindow = new google.maps.InfoWindow;      
        var bounds = new google.maps.LatLngBounds();
 
 
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
          function addMarker(lat, lng, info, id) {
            var pt = new google.maps.LatLng(lat, lng);
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt
            });       
            var contentString = '<h3 align="center">'  + info + '</h3>' +
            '<p align="center"><a href="profil.php?id=' + id + '" class="link_detail btn btn-primary">Lihat Detail</a>';
            bindInfoWindow(marker, map, infoWindow, contentString);
          }
 
          <?php

          
          $query = mysqli_query($connect,"SELECT * from tb_wisata");
            
          while ($data = mysqli_fetch_array($query)) {
            $lat = $data['latitude'];
            $lon = $data['longitude'];
            $nama = $data['nama'];
            $id= $data['id_wisata'];
            echo ("addMarker($lat, $lon, '<b>$nama</b>','$id');\n");                        
          }
          ?>
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  
    <div id="map-canvas"></div>

      </div>
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
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>