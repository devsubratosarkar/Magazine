<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";


$connect = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];

$sql = "DELETE FROM name_table WHERE id = '$id' ";

$result = mysqli_query($connect, $sql);


if ($result) {
	header ('location:category.php');
}else {
	echo 'not insert';
}

?>