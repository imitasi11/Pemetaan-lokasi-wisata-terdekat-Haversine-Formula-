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

  <script type="text/javascript" src="j/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="j/bootstrap.js"></script>
  <script type="text/javascript" src="j/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="j/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="j/jquery.isotope.js"></script>
  <script type="text/javascript" src="j/wow.js"></script>
  <script type="text/javascript" src="j/classie.js"></script>
  <script type="text/javascript" src="j/magnific-popup.js"></script>


    <?php
    session_start();
    if(!empty($_SESSION['lat'])||isset($_SESSION['lat'])) {
    }else{
    header("location:index.php");
    }
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
    <section class="main-section alabaster" style="min-height: 520px;">
    <?php while($data = mysqli_fetch_array($query_mysql)){ ?>
    <div class="container wow fadeInUp delay-04s" align="center" >
       <style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      
      #map {
        height: 500px;
        float: left;
        width: 63%;
      }
      #right-panel {
        float: right;
        width: 34%;
        height: 500px;
        overflow: auto;
      }
      .panel {
        height: 500px;
        overflow: auto;
      }
    </style>
    

<div style="margin-top: 140px;" class="clearfix" style="background: white;">
    <div id="map"></div>
    <div id="right-panel">
      <p>Total Jarak: <span id="total"></span><br />
      Node Terdekat: <span id="terdekat"></span></p>
    </div>
</div>
<p class="help-block">Geser marker atau garis untuk mengubah rute.</p>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k"></script>
<script>
        var default_lat = -7.572110;
        var default_lng = 110.821390;
        var default_zoom = 14;
 

$(function(){
    initMap();
})

var markerArray = [];

  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: {lat: default_lat, lng: default_lng}  // Australia.
    });

    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer({
      draggable: true,
      map: map,
      panel: document.getElementById('right-panel')
    });
    
    var stepDisplay = new google.maps.InfoWindow;
    
    
    directionsDisplay.addListener('directions_changed', function() {
        //calculateAndDisplayRoute()
      computeTotalDistance(directionsDisplay.getDirections());
          for (var i = 0; i < markerArray.length; i++) {
            markerArray[i].setMap(null);
        }
        
        showSteps(directionsDisplay.getDirections(), markerArray, stepDisplay, map);
      //calculateAndDisplayRoute(pos, {lat: <?php echo $data['latitude']?>, lng: <?php echo $data['longitude']?>}, directionsService, directionsDisplay, stepDisplay, map);
    });
    
    // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
      
         var coords = new google.maps.LatLng(<?php echo $_SESSION['lat'];?>,<?php echo $_SESSION['long'];?>);

            //infoWindow.setPosition(pos);
            //infoWindow.setContent('Location found.');
            //infoWindow.open(map);
            //map.setCenter(pos);
            calculateAndDisplayRoute(coords, {lat: <?php echo $data['latitude']?>, lng: <?php echo $data['longitude']?>}, directionsService, directionsDisplay, stepDisplay, map);
          }, function() {
                calculateAndDisplayRoute(getCurLocation(), {lat: <?php echo $data['latitude']?>, lng: <?php echo $data['longitude']?>}, directionsService, directionsDisplay, stepDisplay, map);
          });
        } else {
          // Browser doesn't support Geolocation
          calculateAndDisplayRoute(getCurLocation(), {lat: <?php echo $data['latitude']?>, lng: <?php echo $data['longitude']?>}, directionsService, directionsDisplay, stepDisplay, map);
        }            
  }

  function calculateAndDisplayRoute(origin, destination, directionsService, directionsDisplay, stepDisplay, map) {
    
    for (var i = 0; i < markerArray.length; i++) {
        markerArray[i].setMap(null);
    }
        
    directionsService.route({
      origin: origin,
      destination: destination,
      //waypoints: [{location: 'Adelaide, SA'}, {location: 'Broken Hill, NSW'}],
      travelMode: 'DRIVING',
      avoidTolls: true
    }, function(response, status) {
      if (status === 'OK') {
        //console.log(response);
        directionsDisplay.setDirections(response);
        showSteps(response, markerArray, stepDisplay, map);
      } else {
        alert('Could not display directions due to: ' + status);
      }
    });
  }
  
  function showSteps(directionResult, markerArray, stepDisplay, map) {
    // For each step, place a marker, and add the text to the marker's infowindow.
    // Also attach the marker to an array so we can keep track of it and remove it
    // when calculating new routes.
    var myRoute = directionResult.routes[0].legs[0];
    
    //console.log(directionResult.routes[0].legs[0]);
    
    for (var i = 0; i < myRoute.steps.length; i++) {
      var marker = markerArray[i] = markerArray[i] || new google.maps.Marker();
      //marker.setMap(map);
      //marker.setPosition(myRoute.steps[i].start_location);
      //marker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
      attachInstructionText(
          stepDisplay, marker, myRoute.steps[i].instructions, map);
    }
  }
  
  function attachInstructionText(stepDisplay, marker, text, map) {
        google.maps.event.addListener(marker, 'click', function() {
          // Open an info window when the marker is clicked on, containing the text
          // of the step.
          stepDisplay.setContent(text);
          stepDisplay.open(map, marker);
        });
      }

  function computeTotalDistance(result) {
    var total = 0;
    var myroute = result.routes[0];
    var terdekat = 0;
    
    terdekat = myroute.legs[0].steps[0].distance.value;
    
    //console.log(result);
    for (var i = 0; i < myroute.legs.length; i++) {
      total += myroute.legs[i].distance.value;      
    }
    total = total / 1000;
    document.getElementById('total').innerHTML = total + ' km';
    document.getElementById('terdekat').innerHTML = (terdekat / 1000) + ' km';// + terdekat + ' m';
  }
</script>
 
      
    </div>
    </div>
    </section>
  <?php } ?>
    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This web is made by  Fazjar Sekti Aji supported with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  
  </body>
</html>