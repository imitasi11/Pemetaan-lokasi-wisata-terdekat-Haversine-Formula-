<?php 
if(empty($_POST['longitude'])){
    header("location:koordinat.php");
}else{
$lat = $_POST['latitude'];
$long = $_POST['longitude'];
session_start();
$_SESSION['lat']=$lat;
$_SESSION['long']=$long;
	header("location:home.php");
}
?>