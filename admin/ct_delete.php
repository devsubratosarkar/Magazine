<?php


$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);


$id = $_GET['id'];



$query = "DELETE FROM contact_table WHERE id = $id" ;

$sql = mysqli_query($connect, $query);

if ($sql) {
	header('location:contact.php');
}else{
	echo('not deleted');
}


?>