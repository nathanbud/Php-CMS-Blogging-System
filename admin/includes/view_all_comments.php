<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Comment</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>In Response to</th>
                                    <th>Date</th>
                                    <th>Approve</th>
                                    <th>Unapprove</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                            $query = "SELECT * FROM comments";
                            $select_comments = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($select_comments)){
                                $comment_id = $row['comment_id'];
                                $comment_post_id = $row['comment_post_id'];
                                $comment_author = $row['comment_author'];
                                $comment_content = $row['comment_content'];
                                $comment_email = $row['comment_email'];
                                $comment_status = $row['comment_status'];
                                $comment_date = $row['comment_date'];
                        
                                
                                echo "<tr>";
                                echo "<td> $comment_id </td>";
                                echo "<td> $comment_author </td>";
                                echo "<td> $comment_content </td>";
                                echo "<td> $comment_email </td>";
                                
                                // $query = "SELECT * FROM comments WHERE comment_id = {$post_category_id}";

                                // $get_post_type = mysqli_query($connection, $query);
                                
                                // while($row = mysqli_fetch_assoc( $get_post_type)){
                                //     $cat_title = $row['cat_title'];
                                // }
                                echo "<td> $comment_status </td>";
                                echo "<td> Some Title </td>";
                                echo "<td> $comment_date </td>";
                                echo "<td><a href='posts.php?source=edit_post&p_id='>Approve</a> </td>";
                                echo "<td><a href='posts.php?delete='>Unapprove</a> </td>";
                                echo "<td><a href='posts.php?source=edit_post&p_id='>Edit</a> </td>";
                                echo "<td><a href='posts.php?delete='>Delete</a> </td>";
                                echo "</tr>";
                            
                            }  
                            ?>
                          
                        </tbody>
                        </table>

                         <?php
                             if(isset($_GET['delete'])){
                               
                                $the_post_id = $_GET['delete'];

                                $query = "DELETE FROM posts WHERE post_id ={$the_post_id}";

                                $delete_query = mysqli_query($connection, $query);
                                header("location: posts.php");
                             }
                            
                            ?>