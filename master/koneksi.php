<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db';
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die ("could not connect to mysql");
if ($db->connect_error) {
    die('Connect Error ('.$db->connect_errno.')'.$db->connect_error);
}

?>