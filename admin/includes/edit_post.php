<?php
 if(isset($_GET['p_id'])){

    $the_post_id = $_GET['p_id'];
 }
    $query = "SELECT * FROM posts WHERE post_id = {$the_post_id}";
    $select_posts_by_id = mysqli_query($connection, $query);
   
    while($row = mysqli_fetch_assoc($select_posts_by_id)){
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_content = $row['post_content'];
        $post_comment_count = $row['post_comment_count']; 
        $post_date = $row['post_date'];     
    }

    if(isset($_POST['update_post'])){
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_category_id = $_POST['post_category'];
        $post_status = $_POST['post_status'];
     
        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
     
        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        
        move_uploaded_file($post_image_temp, "../images/$post_image");
    
        if(empty($post_image)){
            $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
            $select_image =  mysqli_query($connection, $query);
           
            while($row = mysqli_fetch_array($select_image)){
                $post_image = $row['post_image'];
            }
        }

        $query = "UPDATE posts SET ";
        $query .="post_title = '{$post_title}', ";
        $query .="post_category_id = '{$post_category_id}', ";
        $query .="post_date = now(), ";
        $query .="post_author = '{$post_author}', ";
        $query .="post_status = '{$post_status}', ";
        $query .="post_tags = '{$post_tags}', ";
        $query .="post_content = '{$post_content}', ";
        $query .="post_image = '{$post_image}' ";
        $query .= "WHERE post_id = {$the_post_id} ";

        $update_post = mysqli_query($connection, $query);

        confirm($update_post);

        echo "<p class='bg-success'>Post Updated. <a href='../post.php?p_id={$the_post_id}'>View Post</a> or <a href='posts.php'>Edit More Post</a></p>";
    }
   
 ?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="title">Post title</label>
    <input type="text" value="<?php  echo $post_title;?>" class="form-control" name="title">
    </div>

    <div class="form-group">
   <select name="post_category" id="post_category">
   <?php
   $query = "SELECT * FROM categories";
   $select_categories = mysqli_query($connection, $query);
   
    confirm($select_categories);

   while($row = mysqli_fetch_assoc($select_categories)){
       $cat_id = $row['cat_id'];
       $cat_title = $row['cat_title'];

       echo "<option value='{$cat_id}'>{$cat_title}</option>";
   }
   ?>
   </select>
    </div>

    <div class="form-group">
    <label for="title">Post Author</label>
    <input type="text" value="<?php  echo $post_author;?>" class="form-control" name="author">
    </div>

     <div class="form-group">
     <label for="">Post Status</label><br>
   <select name="post_status" id="post_status">
    <option value=<?php echo $post_status; ?>><?php  echo $post_status;?></option>
    
    <?php 
     if($post_status === 'published'){
         echo "<option value='draft'> draft </option>";
     }else{
        echo "<option value='published'> Publish </option>";
     }
    
    ?>
        
   </select>
    </div>

    <div class="form-group">
    <img width="150" src="../images/<?php echo $post_image;?>">
    <input type="file" name="image" id="">
    </div>

    <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" value="<?php  echo $post_tags;?>" class="form-control" name="post_tags" id="">
    </div>

    <div class="form-group">
    <label for="post-content">Post Content</label>
    <textarea class="form-control"  name="post_content" id="" cols="30" rows="10"><?php echo $post_content;?>
    </textarea>
    </div>

    <button type="submit" name="update_post">Update Post</button>
</form>