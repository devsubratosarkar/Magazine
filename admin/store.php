<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);

$pr_name = $_POST['name'];
$pr_title = $_POST['title'];
$pr_details = $_POST['details'];




$query = "INSERT INTO test (name, title, details) VALUES ('$pr_name', '$pr_title', '$pr_details')";


$sql = mysqli_query($connect, $query);

if ($sql) {
	header('location:menu.php');
}else{
	echo('not Insert');
}

?>