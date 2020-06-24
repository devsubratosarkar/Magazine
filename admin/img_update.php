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

$select_image = "SELECT * FROM image_table WHERE id=$id";

$getData = mysqli_query($connect, $select_image);

$response = mysqli_fetch_array($getData);

@unlink('images/slider/' . $response['images']);

// image remove code


$image_name = $_FILES['images']['name'];

$temp = explode(".", $image_name);

$newfilename = time() . '.' . end($temp);

$imagepath = "images/slider/" . $newfilename;

$success = move_uploaded_file($_FILES["images"]["tmp_name"], $imagepath);


if ($success) {
    $query = "UPDATE image_table SET title = '$name_d', details = '$de_details', images = '$newfilename'  WHERE id= $id ";
    
    $sql = mysqli_query($connect, $query);
    
    
    if ($sql) {
        header('location:image.php');
    } else {
        echo 'not insert';
    }
    
} else {
    echo 'image not insert';
}


