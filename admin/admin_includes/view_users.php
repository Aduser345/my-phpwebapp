<table class="table table-stripped">
                        <tr>
                            <td>User ID</td>
                            <td>UserName</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>User Password</td>
                            <td>User Email</td>
                            <td>Image</td>
                            <td>Role</td>
                            <td>Delete</td>
                            <td>Edit</td>
                            <td>Admin</td>
                            <td>User</td>
                            
                        </tr>
                        <tr>
                        <?php

                            $query = "select * from users";
                            $users = mysqli_query($con,$query);

                            while($row=mysqli_fetch_assoc($users))
                            {                                                                 
                        ?>
                            <td><?php echo $row['user_id']?></td>
                            <td><?php echo $row['user_name']?></td>
                            <td><?php echo $row['first_name']?></td>
                            <td><?php echo $row['last_name']?></td>
                            <td><?php echo $row['user_password']?></td> 
                            <td><?php echo $row['user_email']?></td>
                            <td><?php echo $row['user_image']?></td>
                            <td><?php echo $row['user_role']?></td> 

                            <!--<php 

                                $query = "select * from posts where post_id = '$comment_post_id'";
                                $result = mysqli_query($con,$query);

                                while($value = mysqli_fetch_assoc($result))
                                {
                                    $post_id = $value['post_id'];
                                    $post_title= $value['post_title'];
                                    
                            ?>

                                <td><a href="../post.php?p_id=<php echo $post_id ?>"><php echo $post_title ?></a></td>
                            
                            <php
                              }
                            
                            >-->
                            
                            <td><a href="./users.php?del=<?php echo $row['user_id'] ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                            <td><a href="./users.php?opt=edit_user&edit_user=<?php echo $row['user_id'] ?>" class="btn btn-success"><span class="fa fa-pencil"></span></a></td>
                            <td><a href="./users.php?admin=<?php echo $row['user_id'] ?>" class="btn btn-info"><span class="fa fa-user"></span></a></td>
                            <td><a href="./users.php?User=<?php echo $row['user_id'] ?>" class="btn btn-primary"><span class="fa fa-group"></span></a></td>
                            
                            </tr>
                        <?php       
                            }
                            //Deleting Comments

                            if(isset($_GET['del']))
                            {
                                $user_del_id= $_GET['del'];
                                $sql_users_del = "delete from users where user_id = '$user_del_id'";
                                $user_del_query = mysqli_query($con,$sql_users_del);

                                if($user_del_query)
                                {
                                    header('location: users.php');
                                    echo '<p class="alert alert-success">User Deleted Sucessfully.</p>';
                                }
                                else{
                                    "Something went wrong." . $con -> error;
                                }

                            }

                            //Approve
                            if(isset($_GET['admin']))
                            {
                                $admin_id = $_GET['admin'];
                                $sql_admin = "update users set user_role = 'Admin'
                                where user_id='$admin_id'";
                                $sql_result_admin = mysqli_query($con,$sql_admin);

                                if($sql_result_admin)
                                {
                                    header('location: users.php');
                                }
                                else{
                                    "Something went wrong." . $con -> error;
                                }
                                                                
                            }

                        //UnApprove
                        if(isset($_GET['User']))
                            {
                                $u_id = $_GET['User'];
                                $sql_usr = "update users set user_role = 'User'
                                where user_id='$u_id'";
                                $sql_result_usr = mysqli_query($con,$sql_usr);

                                if($sql_result_usr)
                                {
                                    header('location: users.php');
                                }
                                else{
                                    "Something went wrong." . $con -> error;
                                }
                                                                
                            }



                        ?>                            
                        
</table>