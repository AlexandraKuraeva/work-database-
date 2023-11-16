<?php

include_once("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['surname'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
}

if(empty($name) || empty($surname) || trim($name) == "" || trim($surname) == "")
	echo "Заплните все поля";
else{
	$sql = "INSERT INTO `queue` (name, surname) VALUES ('$name', '$surname')";
	if($conn -> query($sql) === TRUE){
		echo "Пользователь добавлен в очередь ". "<br>";
		header('Location: index.php');
		exit;
	}
	else{
		echo "Ошибка: " .$conn->error;
	}
}



$conn->close();



