<?php
	include "koneksi.php";
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	
	$query = "select * from tb_user where username = '".$_POST['username']."' and password ='".$_POST['password']."'";
	$hasil = mysqli_query($connect,$query);
	$row  = mysqli_fetch_array($hasil);
	$cekrow = mysqli_num_rows($hasil);
	
	if ($cekrow ==1){
	session_start();
	
	$_SESSION['username'] = $user;
	header("location:admin-page.php");
	}
	else{
	echo "<script>alert('gagal');window.location='home.php'</script>";
}
?>