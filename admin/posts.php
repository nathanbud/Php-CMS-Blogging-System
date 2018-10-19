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

                     <?php
                     if(isset($_GET['source'])){
                         $source = $_GET['source'];
                     }else{
                        $source = '';  
                     }
                     
                     switch($source){

                        case 'add_post';
                        include "includes/add_post.php";
                        break;
                        
                        case '35';
                        echo "nice";
                        break;
                        
                        case '36';
                        echo "nice";
                        break;

                        default:

                        include "includes/view_all_posts.php";



                     }
                     ?>
                       

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