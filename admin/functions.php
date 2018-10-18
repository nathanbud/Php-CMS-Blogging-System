<?php
//insert category
function insert_categories(){

    global $connection;

    if(isset($_POST["submit"])){
        $cat_title =  $_POST['cat_title'];

        if($cat_title == "" || empty($cat_title)){
            echo "This field should not be empty";
        }else{
            $query = "INSERT INTO categories(cat_title)";
            $query.= "VALUE('{$cat_title}')";

            $create_category_query = mysqli_query($connection, $query);
           
            if( !$create_category_query){
              die("QUERY FAILED". mysqli_error($connection));
            }else{
                Echo "new category added";
            }    
        }
    }
}

function selectAllcategory(){
    
    global $connection;

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
} 

function deleteCategory(){

    global $connection;
    
    if(isset($_GET['delete'])){
                    
        $get_cat_id =  $_GET['delete'];
        
        $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id} ";
        $delete_category = mysqli_query($connection, $query);
        header("location: categories.php");

     }
}

function updateCategory(){

    global $connection;
    
    if(isset($_GET['edit'])){
        $get_cat_id = $_GET['edit'];

        $query = "SELECT * FROM categories WHERE cat_id = $get_cat_id";
        $select_categories_id = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_categories_id)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
        ?>
              
            <input type="text" value="<?php if(isset($cat_title)){echo $cat_title;} ?>" name="cat_title" id="" class="form-control">

  <?php  }} ?>

   
    <?php      //UPDATE QUERY
    if(isset($_POST['update_category'])){
        
       $the_cat_title =  $_POST['cat_title'];
       
       $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id} ";
       $update_query = mysqli_query($connection, $query);
      if(!$update_query){
          die("QUERY FAILED" . mysqli_error($connection));
      }

    }
}


?>