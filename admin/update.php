<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);


$id = $_POST['id'];
$pd_name = $_POST['name'];
$pd_title = $_POST['title'];
$pd_details = $_POST['details'];



$query = "UPDATE test SET name = '$pd_name', title = '$pd_title', details = '$pd_details' WHERE id=$id";


 $sql = mysqli_query($connect, $query);


if ($sql) {
	header('location:menu.php');
}else{
	echo('not updated');
}


?>