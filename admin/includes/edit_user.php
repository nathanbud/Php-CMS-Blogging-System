<?php
if(isset($_GET['edit_user'])){
   $the_user_id = $_GET['edit_user'];
}
   $query = "SELECT * FROM users WHERE user_id = {$the_user_id}";
   $select_user_by_id = mysqli_query($connection, $query);
  
   while($row = mysqli_fetch_assoc($select_user_by_id)){
    $username = $row['username'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_role = $row['user_role'];  
   }


   if(isset($_POST['edit_user'])){
    $username = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];  
          
   

       $query = "UPDATE users SET ";
       $query .="username = '{$username}', ";
       $query .="user_firstname = '{$user_firstname}', ";
       $query .="user_lastname = '{$user_lastname}', ";
       $query .="user_email = '{$user_email}', ";
       $query .="user_role = '{$user_role}', ";
       $query .="user_password = '{$user_password}' ";
       $query .= "WHERE user_id = {$the_user_id} ";

       $update_user = mysqli_query($connection, $query);

       confirm($update_user);
   }
  
?>



<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
    <label for="title">First Name</label>
    <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
    <label for="">Last Name</label>
    <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
    </div>


    <div class="form-group">
   <select name="user_role" id="user_role">
        <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?> </option>
        <?php 
        
        if($user_role =="admin"){
            echo "<option value='subscriber'>Subscriber</option>";
        }else{
          echo  "<option value='admin'>Admin</option>";
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
    <input type="text" value="<?php echo $username; ?>" class="form-control" name="user_name" id="">
    </div>

    <div class="form-group">
    <label for="post-content">Email</label>
    <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email" id="">
    </div>

    <div class="form-group">
    <label for="post-content">Password</label>
    <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password" id="">
    </div>

    <button type="submit" name="edit_user">Edit User</button>
</form>