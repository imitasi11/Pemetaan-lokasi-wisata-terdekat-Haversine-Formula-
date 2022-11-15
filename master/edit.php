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
  include "koneksi.php";
  $id = $_GET['id'];
  $query_mysql = mysqli_query($connect,"SELECT * FROM tb_wisata WHERE id_wisata='$id'")or die(mysql_error());
  $nomor = 1;
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
	         <li class="nav-item cta"><a href="index.php" class="nav-link">Log Out</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Edit Wisata</h2>
          </div>
        </div>
        <?php while($data = mysqli_fetch_array($query_mysql)){ ?>
        <form role="form" action="edit-aksi.php" method="post" enctype="multipart/form-data">
                  <div class="form-inline">
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $data['id_wisata'] ?>">
                    <input type="hidden" name="gambar" value="<?php echo $data['gambar'] ?>">
                    
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" id="exampleInputEmail2" placeholder="Nama Wisata">
                  </div>
                  </div><br>
                  <div class="form-inline">
                    <div class="form-group">
                    <input type="text" name="latitude" value="<?php echo $data['latitude'] ?>" class="form-control" id="exampleInputEmail2" placeholder="Latitude">
                  </div>
                  <div class="form-group" style="margin-left: 7px;margin-right: 10px;">
                    <input type="text" name="longitude" class="form-control" value="<?php echo $data['longitude'] ?>" id="exampleInputPassword2" placeholder="Longitude">
                  </div>
                  <div class="input-group-icon mt-10" >
                                <div class="form-select" id="default-select" style="background-color: white">
                                <select style="height: 50px;overflow: scroll;" name="kategori">
                                    <option value="<?php echo $data['kategori'] ?>"><?php echo $data['kategori'] ?></option>
                                    <option value="sejarah">sejarah</option>
                                    <option value="alam">alam</option>
                                    <option value="budaya">budaya</option>
                                    <option value="kuliner">kuliner</option>
                                    <option value="religi">religi</option>
                                    <option value="belanja">belanja</option>
                                    </select>
                                </div>
                            </div>
                  </div><br>
                  <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $data['alamat'] ?>" name="alamat" id="exampleInputEmail1" placeholder="Alamat Wisata">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $data['deskripsi'] ?>" name="desc" id="exampleInputEmail1" placeholder="Deskripsi Wisata">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Wisata</label>
                    <input type="file" name="file" id="file">
                  </div>
                  
                  <input type="submit" name="upload" value="Upload" class="btn btn-primary">
                  </form>
                <?php }?>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>