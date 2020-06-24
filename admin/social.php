
<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Social</h1>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Social</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="sl_store.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputIcon1">Icon</label>
                                <input type="text" class="form-control" id="exampleInputIcon1" name="icon" placeholder="Enter Icon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLink1">Link</label>
                                <input type="text" class="form-control" id="exampleInputLink1" placeholder="Link" name="link">
                            </div>
                        </div>  
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- general form elements -->
            <!-- /.card -->
        </div>
        <!-- /.row -->
      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive Hover Table</h3>
                        <?php
                            $servername = "localhost";
                            $database = "data";
                            $username = "root";
                            $password = "";
                            
                            $connect = mysqli_connect($servername, $username, $password, $database);
                            
                            $sql = "SELECT * FROM social_table";
                            
                            $result_de = $connect->query($sql);
                            
                            
                            ?>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Icon</td>
                                        <td>Link</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($subrato = $result_de->fetch_assoc()) {
                                        
                                        
                                        ?>
                                    <tr>
                                        <th><?php echo $subrato ["id"]; ?></th>
                                        <th><?php echo $subrato ["icon"]; ?></th>
                                        <th><?php echo $subrato ["link"]; ?></th>
                                        <th>
                                            <a class="btn btn-primary" href="sl_edit.php?id=<?php echo $subrato ['id']; ?>" >Edit</a>
                                            <a class="btn btn-danger" href="sl_delete.php?id=<?php echo $subrato ['id']; ?>" >Delete</a>
                                        </th>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
</section>
</div>

<?php include ('layout/footer.php') ?>

