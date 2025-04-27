<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

        <?php

            if(isset($_GET['edit_user']))
            {
                $User_id = $_GET['edit_user'];
                $sql_user_query = "select * from users where user_id='$User_id'";
                $sql_update_query = mysqli_query($con,$sql_user_query);

                while($row = mysqli_fetch_assoc($sql_update_query))
                {
                    $user_db_id = $row['user_id'];
                    $user_name = $row['user_name'];
                    $user_password = $row['user_password'];                
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];                                       
                    $user_email = $row['user_email'];
                    $user_role = $row['user_role'];                   
                    //$user_Image = $_FILES['image']['name'];
                    //$user_Temp = $_FILES['image']['tmp_name'];               
                }                        
                
                /*$sql = "insert into users (user_name,user_password,first_name,last_name,user_email,user_image,user_role) 
                values('$user_name', '$user_password', '$first_name', '$last_name', '$user_email', '$user_Image', '$user_role')";

                $result = mysqli_query($con,$sql);
                
                if($result)
                {
                    echo "Record Saved in Database ";
                    move_uploaded_file($user_Temp, "../images/users/$user_Image");
                }
                else
                {
                    echo"Query Failed";
                }
                  */                             
            }
        
        ?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col">                        
                        <form action="" method="POST" enctype="multipart/form-data">                                                  
                            <div class="form-group">
                                <label> User Name</label>
                                <input type="text" name="user_name" placeholder="User Name" class="form-control mb-2" value="<?php echo $user_name ?>">
                            </div>
                            <div class="form-group">
                                <label> First Name</label>
                                <input type="text" name="first_name" placeholder="First Name" class="form-control mb-2" value="<?php echo $first_name ?>">
                            </div>
                            <div class="form-group">
                                <label> Last Name</label>
                                <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-2" value="<?php echo $last_name ?>">
                            </div>
                            <div class="form-group" >
                                <select name="user_role" id="" class="form-control">
                                    <option value="User">User</option>
                                    <option value='Sub-Admin'>Sub-Admin</option>                                                                          
                                </select>
                            </div>
                            <div class="form-group">
                                <label> User Email</label>
                                <input type="email" name="user_email" placeholder="User Email" class="form-control mb-2" value="<?php echo $user_email?>">
                            </div>
                            <div class="form-group">
                                <label> Password</label>
                                <input type="password" name="user_password" placeholder="Password" class="form-control mb-2" value="<?php echo $user_password?>">
                            </div>
                            <div class="form-group">
                                <label>User Image</label>
                                <input type="file" name="image" class="form-control mb-2" value="<?php echo $user_image?>">
                            </div>                          
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="btn_edit_user"> Update </button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.row -->
                </div>
            <!-- /.container-fluid -->

            <?php
            
                if(isset($_POST['btn_edit_user']))
                {                    
                    $user_name = $_POST['user_name'];
                    $user_password = $_POST['user_password'];                
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];                                       
                    $user_email = $_POST['user_email'];
                    $user_role = $_POST['user_role'];   
                    
                    $update_query = "update users set first_name='$first_name', last_name='$last_name',
                    user_role='$user_role', user_name='$user_name', user_email='$user_email',
                    user_password='$user_password' where user_id='$User_id'";

                    $update_user_query = mysqli_query($con,$update_query);

                    if($update_user_query)
                    {
                        header("location: users.php");                                      
                        echo '<p class="alert alert-info">User Details Modified Sucessfully.</p>';
                        move_uploaded_file($user_Temp, "../images/users/$user_Image");
                
                    }
                    else
                    {
                        echo "Something is Wrong";
                    }

                }

            ?>

        </div>
        <!-- /#page-wrapper -->

<?php require_once ('./admin_includes/footer.php')?>         