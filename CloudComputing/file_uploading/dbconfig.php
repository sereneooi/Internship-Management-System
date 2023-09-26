<?php
$dbhost = "db.cx03wpfilkwh.us-east-1.rds.amazonaws.com";
$dbuser = "main";
$dbpass = "qwer1234";
$dbname = "db";
$conn= mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysqli_select_db($conn,$dbname) or die('database selection problem');
?>
