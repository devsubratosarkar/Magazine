<?php


$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);


$id = $_GET['id'];



$query = "DELETE FROM test WHERE id = $id" ;

$sql = mysqli_query($connect, $query);

if ($sql) {
	header('location:menu.php');
}else{
	echo('not deleted');
}


?>