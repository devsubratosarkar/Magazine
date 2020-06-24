<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);

$pu_name = $_POST['name'];
$pu_details = $_POST['details'];




$query = "INSERT INTO contact_table (name, details) VALUES ('$pu_name', '$pu_details')";


$sql = mysqli_query($connect, $query);

if ($sql) {
	header('location:contact.php');
}else{
	echo('not Insert');
}

?>