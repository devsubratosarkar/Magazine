<?php

$servername = "localhost";
$database   = "data";
$username   = "root";
$password   = "";

$connect = mysqli_connect($servername, $username, $password, $database);

$id     = $_POST['id'];
$name_d = $_POST['title'];
$de_details = $_POST['details'];


// image remove code

$select_image = "SELECT * FROM blog_table WHERE id=$id";

$getData = mysqli_query($connect, $select_image);

$response = mysqli_fetch_array($getData);



// image remove code


$image_name = $_FILES['images']['name'];

if ($image_name) {

@unlink('images/blog/' . $response['images']);

$temp = explode(".", $image_name);

$newfilename = time() . '.' . end($temp);

$imagepath = "images/blog/" . $newfilename;

$success = move_uploaded_file($_FILES["images"]["tmp_name"], $imagepath);
} else{

$newfilename = $response['images'];

}


$query = "UPDATE blog_table SET title = '$name_d', details = '$de_details', images = '$newfilename'  WHERE id= $id ";

$sql = mysqli_query($connect, $query);


if ($sql) {
    header('location:blog.php');
} else {
    echo 'not insert';
}




