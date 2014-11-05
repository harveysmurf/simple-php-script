<?php 
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "hello";

$dbConnect = mysqli_connect("$db_host","$db_username","$db_pass","$db_name") or die(mysqli_error('Грешка палячо'));


 ?>