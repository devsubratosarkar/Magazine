<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);


$id = $_POST['id'];
$pd_icon = $_POST['icon'];
$pd_link = $_POST['link'];

$query = "UPDATE social_table SET icon = '$pd_icon', link = '$pd_link' WHERE id=$id";


$sql = mysqli_query($connect, $query);

if ($sql) {
	header('location:social.php');
}else{
	echo('not updated');
}


?>