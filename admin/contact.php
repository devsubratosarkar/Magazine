
<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Contact</h1>
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
                        <h3 class="card-title">Contact</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="ct_store.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDetails1">Details</label>
                                <textarea class="form-control" rows="10" name="details"></textarea>
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
                            
                            $sql = "SELECT * FROM contact_table";
                            
                            $result_de = $connect->query($sql);
                            
                            
                            ?>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Details</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($subrato = $result_de->fetch_assoc()) {
                                        
                                        
                                        ?>
                                    <tr>
                                        <th><?php echo $subrato ["id"]; ?></th>
                                        <th><?php echo $subrato ["name"]; ?></th>
                                        <th><?php echo $subrato ["details"]; ?></th>
                                        <th>
                                            <a class="btn btn-primary" href="ct_edit.php?id=<?php echo $subrato ['id']; ?>" >Edit</a>
                                            <a class="btn btn-danger" href="ct_delete.php?id=<?php echo $subrato ['id']; ?>" >Delete</a>
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

