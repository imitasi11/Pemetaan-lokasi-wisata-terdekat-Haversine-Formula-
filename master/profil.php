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

    <script src="j/jquery.1.8.3.min.js"></script>
    <?php
    session_start();
    if(!empty($_SESSION['lat'])||isset($_SESSION['lat'])) {
    }else{
    header("location:index.php");
    }

        function getDistance($latitude1, $longitude1, $latitude2, $longitude2) {  
        $earth_radius = 6371;  
      
        $dLat = deg2rad($latitude2 - $latitude1);  
        $dLon = deg2rad($longitude2 - $longitude1);  
          
    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);  
    $c = 2 * asin(sqrt($a));  
    $d = $earth_radius * $c;  
      
         return $d;  
        }  

    $lokasi1Lat = $_SESSION['lat']; //garis bujur lokasi 1
    $lokasi1Lon = $_SESSION['long']; //garis lintang lokasi 1

    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql =  mysqli_query($connect,"SELECT * FROM tb_wisata where id_wisata = '$id'")or die(mysql_error());

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
    
		<section class="ftco-section" id="iribilangbos" style="text-align: center;" >
    	<div class="container"  align="center" style="margin: 0 auto;">
        <?php
    while($data = mysqli_fetch_array($query_mysql)){
    $lokasi2Lat = $data['latitude']; //garis bujur lokasi 2
    $lokasi2Lon = $data['longitude']; //garis lintang lokasi 2
    $hasil = getDistance($lokasi1Lat,$lokasi1Lon, $lokasi2Lat, $lokasi2Lon);
    
        ?>
        <div class="row d-flex" style="margin-top: 13px;" align="center" style="margin: 0 auto;">
        <div class="col-md-4 d-flex ftco-animate" style="margin-left: auto;">
            <div class="blog-entry justify-content-end" >
              <h4><?php echo $data['nama'];?></h4>
              <a href="#" class="block-20" style="width:400px;background-image: url('upload/<?php echo $data['nama']; ?><?php echo $data['gambar']; ?>');">
              </a>
              <div class="text mt-3 float-right d-block" style="">
                <div style="width: 120px;" class="d-flex align-items-center mb-4 topp">
                  <div class="one">
                    <h5 style="color: white;margin-top: 7px;"><?php echo number_format($hasil, 2);?></h5>
                  </div>
                  <div class="two">
                    <span class="mos" style="margin-left: -3px;"> Km</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate" style="margin-right: auto;">
            <div style="margin-top: 20px;"class="blog-entry justify-content-end">
              <div class="text mt-3 float-right d-block" align="justify">
                <p style="margin-top: 40px;"></p>
                <p><?php echo $data['deskripsi'];?>.</p>
                <p>Wisata ini beralamat di <?php echo $data['alamat'];?></p>
                <a class="btn btn-primary" style="width: 150px;margin-left: 20%;" href="rute.php?id=<?php echo $data['id_wisata']?>"> Rute</a>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>
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
   
  <script>
    $(document).ready(function() {
    $("div.desc").hide();
    $("#sejarah").show();
    $("input[name$='sejarah']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
    $("input[name$='alam']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
    $("input[name$='budaya']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
    $("input[name$='kuliner']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
    $("input[name$='religi']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
    $("input[name$='belanja']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
  });
  </script>
  
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