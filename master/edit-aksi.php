<?php 
include 'koneksi.php';
include 'SimpleImage.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$alamat = $_POST['alamat'];
$desc = $_POST['desc'];
$gambar = $_POST['gambar'];
$kategori = $_POST['kategori'];
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
			$querys=mysqli_query($connect,"UPDATE tb_wisata SET nama='$nama', gambar='$ex', latitude='$latitude', longitude='$longitude',alamat='$alamat',deskripsi='$desc',kategori='$kategori' WHERE id_wisata='$id'");
			
			if($querys){

		$img = new SimpleImage($file_tmp);
           $img->resize(300, 350);

				 $img->save('upload/' .$nama.$titik.$ekstensi);            
            
			header("Location: admin-page.php");
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
				echo $nama;echo $ex;echo $lat;echo $long;echo $alamat;echo $desc;echo $id;
			
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
		
		if ($nama_file=='') {
			$query=mysqli_query($connect,"UPDATE tb_wisata SET nama='$nama', gambar='$gambar', latitude='$latitude', longitude='$longitude',alamat='$alamat',deskripsi='$desc',kategori='$kategori' WHERE id_wisata='$id'");
			header("Location: admin-page.php");
	    }
	       }
?>