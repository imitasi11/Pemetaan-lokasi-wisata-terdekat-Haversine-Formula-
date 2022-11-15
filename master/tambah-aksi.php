
<?php 
include 'koneksi.php';
include "include/SimpleImage.php";

$nama = $_POST['nama'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$alamat = $_POST['alamat'];
$desc = $_POST['desc'];
$kategori = $_POST['kategori'];
   if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('png','jpg');
	$nama_file = $_FILES['file']['name'];
	$x = explode('.', $nama_file);
	$titik = '.';
	$ekstensi = strtolower(end($x));
	$ex = $titik.$ekstensi;
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 2044070){
			$query=mysqli_query($connect,"INSERT INTO tb_wisata VALUES(NULL,'$nama','$alamat','$latitude','$longitude', '$ex','$desc','$kategori')");
			
			if($query){

		$img = new SimpleImage($file_tmp);
           $img->resize(300, 350);

				 $img->save('upload/' .$nama.$titik.$ekstensi);            
            
			header("Location: admin-page.php");
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
		if ($nama_file=='') {
			$query=mysqli_query($connect,"INSERT INTO tb_wisata VALUES(NULL,'$nama','$alamat','$latitude','$longitude', 'Tidak ada','$desc','$kategori')");
			header("Location: admin-page.php");
	    }
	       }

    }
?>