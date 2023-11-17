<?php
// Подключение к базе данных
/* $servername = "localhost"; //
$username = "root";//your-username
$password = "";//your-password
$dbname = "queue-of-people"; //your-database */

include ('config.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$conn){
	  die("Connection failed: " . mysqli_connect_error());
}else{
	 "Success";
}





