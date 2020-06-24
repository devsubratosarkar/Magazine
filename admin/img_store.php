<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);


$im_title = $_POST['title'];
$im_details = $_POST['details'];

$image_name = $_FILES['images']['name'];

  $temp = explode(".", $image_name);

  $newfilename = time() . '.' . end($temp);


  $imagepath = "images/slider/".$newfilename;
  
  $success = move_uploaded_file($_FILES["images"]["tmp_name"],$imagepath);




  $query = "INSERT INTO image_table (title, details, images) VALUES ('$im_title', '$im_details', '$newfilename')";

$sql = mysqli_query($connect, $query);



 if ($sql) {
	header('location:image.php');
}else{
	echo('not Insert');
}
?>