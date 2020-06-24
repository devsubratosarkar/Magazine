<?php

$servername = "localhost";
$database   = "data";
$username   = "root";
$password   = "";

$connect = mysqli_connect($servername, $username, $password, $database);

$id     = $_POST['id'];
$name_d = $_POST['name'];



    $query = "UPDATE name_table SET name = '$name_d' WHERE id= $id ";
    
    $sql = mysqli_query($connect, $query);
    
    
    if ($sql) {
        header('location:category.php');
    } else {
        echo 'not insert';
    }


