<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM tb_wisata WHERE id_wisata='$id'")or die(mysql_error());

header("location:admin-page.php");
?>