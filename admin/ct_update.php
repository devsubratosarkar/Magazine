<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);


$id = $_POST['id'];
$pl_name = $_POST['name'];
$pl_details = $_POST['details'];

$query = "UPDATE contact_table SET name = '$pl_name', details = '$pl_details' WHERE id=$id";


$sql = mysqli_query($connect, $query);

if ($sql) {
	header('location:contact.php');
}else{
	echo('not updated');
}


?>