<?php include "includes/admin_header.php" ?>


    <div id="wrapper">
<?php if($connection){echo "Conn"; }?>
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>
        <!--End Navigation -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">
                         <?php insert_categories(); ?> 
                        <form action="" method="POST">
                            <div class="form-group">
                            <label for="" class="cat-title">Add Category</label>
                            <input type="text" name="cat_title" id="" class="form-control">
                            
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                            </div>
                        
                        </form>
                        <?php 
                         if(isset($_GET['edit'])){
                            $cat_id = $_GET['edit'];
 
                            include "includes/update_categories.php";
                        }
                        ?>
                      
                        </div><!-- Add Category Form -->
                        
                        <div class="col-xs-6">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                </tr>

                            </thead>
                            <tbody>

                            <?php
            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection, $query);
                            
            while($row = mysqli_fetch_assoc($select_categories) ){
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
               
                echo "<tr>";
                echo "<td>{$cat_id}</td> ";
                echo "<td>{$cat_title}</td> ";
                echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td> ";
                echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td> ";
                echo "</tr>";
            }
            ?>

       
            <?php      //DELETE QUERY
                if(isset($_GET['delete'])){
                    
                   $get_cat_id =  $_GET['delete'];
                   
                   $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id} ";
                   $delete_category = mysqli_query($connection, $query);
                   header("location: categories.php");

                }
            
            ?>
                            </tbody>
                        </table>
                        </div>
                        <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  <?php include "includes/admin_footer.php" ?>