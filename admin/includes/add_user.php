<?php 
if(isset($_POST['create_user'])){
  $user_firstname =$_POST['user_firstname'];
   $user_lastname =$_POST['user_lastname'];
   $user_role =$_POST['user_role'];

//    $post_image =$_FILES['image']['name'];
//    $post_image_temp =$_FILES['image']['tmp_name'];

   $username =$_POST['user_name'];
   $user_email =$_POST['user_email'];
   $user_password =$_POST['user_password'];
//    $post_date = date('d-m-y');

// move_uploaded_file($post_image_temp, "../images/$post_image");

$query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
$query.= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_role}','{$username}','{$user_email}','{$user_password}' ) ";

$create_user_query = mysqli_query($connection, $query);

confirm($create_user_query);

 echo "User Created: " . " ". $user_firstname ." " . $user_lastname . " " . "<a href='users.php'>View Users</a> ";

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
        <option value="subscriber">Select Options</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>
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