<?php

// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "queue-of-people";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	  die("Connection failed: " . mysqli_connect_error());
}else{
	 "Success";
}





