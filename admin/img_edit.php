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

$sql = "SELECT * FROM image_table WHERE id=$id";

$result_de = mysqli_query($connect, $sql);

$res = mysqli_fetch_array($result_de);

?>




	<form method="POST" action="img_update.php" enctype="multipart/form-data">

<div class="card-body">
	
	<input type="hidden" name="id" value="<?php echo ($res['id'])?>" >

                        <div class="form-group">
                           <label for="exampleInputtitle1">Title</label>
                           <input type="text" name="title" class="form-control" id="exampleInputtitle1" placeholder="Enter title" value="<?php echo ($res['title'])?>" >
                        </div>
                        <div class="form-group">
                           <label for="exampleInputDetails1">Details</label>
                           <input type="text" name="details" class="form-control" id="exampleInputDetails1" placeholder="Details"value="<?php echo ($res['details'])?>">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputFile">File input</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="images" class="custom-file-input" id="exampleInputFile">
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                     </div>
                  </form>
                  <img src="images/slider/<?php echo $res ["images"]; ?>">
               </div>
            </div>
         </div>


</div>
</div>
            <!-- general form elements -->
            <!-- /.card -->
</div>
</div>
</section>
</div>


<?php include ('layout/footer.php') ?>