<?php 
if(isset($_POST['create_post'])){
   $post_title =$_POST['title'];
   $post_author =$_POST['author'];
   $post_category_id =$_POST['post_category'];
   $post_status =$_POST['post_status'];

   $post_image =$_FILES['image']['name'];
   $post_image_temp =$_FILES['image']['tmp_name'];

   $post_tags =$_POST['post_tags'];
   $post_content =$_POST['post_content'];
   $post_date = date('d-m-y');

move_uploaded_file($post_image_temp, "../images/$post_image");

$query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status) ";
$query.= "VALUES({$post_category_id}, '{$post_title}', '{$post_author}',now(), '{$post_image}','{$post_content}','{$post_tags}','{$post_status}' ) ";

$create_post_query = mysqli_query($connection, $query);

confirm($create_post_query);
}

?>



<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
    <label for="title">First Name</label>
    <input type="text" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
    <label for="">Last Name</label>
    <input type="text" class="form-control" name="user_lastname">
    </div>


    <div class="form-group">
   <select name="user_role" id="user_role">
   <?php
   $query = "SELECT * FROM users";
   $select_users = mysqli_query($connection, $query);
   
    confirm($select_users);

   while($row = mysqli_fetch_assoc($select_users)){
       $user_id = $row['user_id'];
       $user_role = $row['user_role'];

       echo "<option value='{$user_id}'>{$user_role}</option>";
   }
   ?>
   </select>
    </div>

   

    <!-- <div class="form-group">
    <label for="">Post Image</label>
    <input type="file" name="image" id="">
    </div> -->

    <div class="form-group">
    <label for="post_tags">Username</label>
    <input type="text" class="form-control" name="user_name" id="">
    </div>

    <div class="form-group">
    <label for="post-content">Email</label>
    <input type="email" class="form-control" name="user_email" id="">
    </div>

    <div class="form-group">
    <label for="post-content">Password</label>
    <input type="password" class="form-control" name="user_password" id="">
    </div>

    <button type="submit" name="create_user">Add User</button>
</form>