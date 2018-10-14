<?php include "includes/header.php" ?>

    <div id="wrapper">
<?php if($connection){echo "Conn"; }?>
        <!-- Navigation -->
        <?php include "includes/navigation.php" ?>
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
                        <form action="">
                            <div class="form-group">
                            <label for="" class="cat-title">Add Category</label>
                            <input type="text" name="cat_title" id="" class="form-control">
                            
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                            </div>
                        
                        </form>
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
                            <tr>
                            <td>Baseball Category</td>
                            <td>BasketBall Category</td>
                            </tr>
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

  <?php include "includes/footer.php" ?>