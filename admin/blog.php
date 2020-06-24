

<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
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
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="POST" action="blog_store.php" enctype="multipart/form-data">
                     <div class="card-body">
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
                              <option value="<?php echo $subrato ["id"]; ?>"><?php echo $subrato ["name"]; ?></option>
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
                        <input type="text" name="title" class="form-control" id="exampleInputtitle1" placeholder="Enter title">
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
      </div>
      <br><br>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h2 class="card-title">Image Table</h2>
                  <?php
                     $servername = "localhost";
                     $database = "data";
                     $username = "root";
                     $password = "";
                     
                     $connect = mysqli_connect($servername, $username, $password, $database);
                     
                     $sql = "SELECT * FROM blog_table";
                     
                     $result_de = $connect->query($sql);
                     
                     
                     ?>
               </div>
               <!-- /.card-header -->
               <div class="card-body table-responsive p-0">
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <td>ID</td>
                           <td>Category</td>
                           <td>Images</td>
                           <td>Title</td>
                           <td>Details</td>
                           <td>Edit/Delete</td>
                        </tr>
                     </thead>
                     <?php

                        while ($subrato = $result_de->fetch_assoc()) {
                        
                        $cat = $subrato["category"];

                        $categorySql = "SELECT * FROM name_table WHERE id=$cat";

                        $resu = mysqli_query($connect, $categorySql);

                        $category = mysqli_fetch_array($resu);
               
                        ?>
                     <tbody>  
                        <tr>
                           <th><?php echo $subrato ["id"]; ?></th>
                           <th><?php echo $category ["name"]; ?></th>
                           <th><img width="50px" src="images/blog/<?php echo $subrato ["images"]; ?>"></th>
                           <th><?php echo $subrato ["title"]; ?></th>
                           <th><?php echo $subrato ["details"]; ?></th>
                           <th>
                              <a class="btn btn-primary" href="blog_edit.php?id=<?php echo $subrato ['id']; ?>" >Edit</a>
                              <a class="btn btn-danger" href="blog_delete.php?id=<?php echo $subrato['id']; ?>" onclick="return confirm('Are You Sure To Delete !'); " >Delete</a>
                           </th>
                        </tr>
                     </tbody>
                     <?php } ?>
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card -->
         </div>
      </div>
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
<?php include('layout/footer.php') ?>

