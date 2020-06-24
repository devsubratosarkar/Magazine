<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);


$us_name = $_POST['name'];


  $query = "INSERT INTO name_table (name) VALUES ('$us_name')";

$sql = mysqli_query($connect, $query);



 if ($sql) {
	header('location:category.php');
}else{
	echo('not Insert');
}
?>