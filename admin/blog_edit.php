<?php include ('layout/header.php') ?>
<?php include ('layout/sidebar.php') ?>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Blog</h1>
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

$sql = "SELECT * FROM blog_table WHERE id=$id";

$result_de = mysqli_query($connect, $sql);

$res = mysqli_fetch_array($result_de);

?>




	<form method="POST" action="blog_update.php" enctype="multipart/form-data">

<div class="card-body">
	
	<input type="hidden" name="id" value="<?php echo ($res['id'])?>" >


  <?php
                           $servername = "localhost";
                           $database = "data";
                           $username = "root";
                           $password = "";
                           
                           $connect = mysqli_connect($servername, $username, $password, $database);
                           
                           $sql = "SELECT * FROM name_table";
                           
                           $result_de = $connect->query($sql);
                           
                           
                           ?>
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Example select</label>
                           <select name="category" class="form-control" id="exampleFormControlSelect1">
                              <?php
                                 while ($subrato = $result_de->fetch_assoc()) {
                                    ?>
                              <option <?php if($res ["category"] == $subrato['id']) {?> selected <?php }?> value="<?php echo $subrato ["id"]; ?>"><?php echo $subrato ["name"]; ?></option>
                              <?php } ?>      
                           </select>
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

                        <div class="form-group">
                           <label for="exampleInputtitle1">Title</label>
                           <input type="text" name="title" class="form-control" id="exampleInputtitle1" placeholder="Enter title" value="<?php echo ($res['title'])?>" >
                        </div>
                        <div class="form-group">
                           <label for="exampleInputDetails1">Details</label>
                           <textarea class="form-control" rows="10" name="details" required><?php echo($res['details'])?></textarea>
                        </div>
                        
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                     </div>
                  </form>
                  <img src="images/blog/<?php echo $res ["images"]; ?>">
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