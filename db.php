<?php
<<<<<<< HEAD
// Подключение к базе данных
/* $servername = "localhost"; //
$username = "root";//your-username
$password = "";//your-password
$dbname = "queue-of-people"; //your-database */

include ('config.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
=======
include ('config.php');
$conn = mysqli_connect($servername, $username, $password, $dbname);
>>>>>>> 69a08a74e9e3773e88061a17d7c3e441bb27d3dd
if(!$conn){
	  die("Connection failed: " . mysqli_connect_error());
}else{
	 "Success";
}





