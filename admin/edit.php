<?php include ('layout/header.php') ?>
<?php include ('layout/sidebar.php') ?>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Menu</h1>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit</h3>
                    </div>

<?php

$servername = "localhost";
$database = "data";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];

$sql = "SELECT * FROM test WHERE id = $id" ;


$result_de = mysqli_query($connect,$sql);

$res = mysqli_fetch_array($result_de);



?>

<form method="POST" action="update.php">

<input type="hidden" name="id" value="<?php echo($res['id']); ?>">


<div class="card-body">
      <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name" value="<?php echo($res['name']); ?>" required>
    </div>
    <div class="form-group">
        <label for="exampleInputTitle1">Title</label>
        <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Title" name="title" value="<?php echo($res['title']); ?>" required>
    </div>
    <div class="form-group">
        <label for="exampleInputDetails1">Details</label>
        <textarea class="form-control" rows="10" name="details" required><?php echo($res['details']); ?></textarea>
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Update</button>
</div>


</form> <br><br>

</div>
</div>
            <!-- general form elements -->
            <!-- /.card -->
</div>
</div>
</section>
</div>


<?php include ('layout/footer.php') ?>