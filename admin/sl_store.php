<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);

$pr_icon = $_POST['icon'];
$pr_link = $_POST['link'];




$query = "INSERT INTO social_table (icon, link) VALUES ('$pr_icon', '$pr_link')";


$sql = mysqli_query($connect, $query);

if ($sql) {
	header('location:social.php');
}else{
	echo('not Insert');
}

?>