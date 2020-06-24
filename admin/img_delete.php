<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";


$connect = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];

$select_image = "SELECT * FROM image_table WHERE id=$id";

$getData = mysqli_query($connect, $select_image);

$response = mysqli_fetch_array($getData);

@unlink('images/slider/'.$response['images']);

$sql = "DELETE FROM image_table WHERE id = '$id' ";

$result = mysqli_query($connect, $sql);


if ($result) {
	header ('location:image.php');
}else {
	echo 'not insert';
}

?>