<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

        <?php
        
            if(isset($_POST['btn_add_user']))
            {
                $user_name = $_POST['user_name'];
                $user_password = $_POST['user_password'];                
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                
                
                $user_email = $_POST['user_email'];
                $user_role = $_POST['user_role'];

                //echo $user_Name." ". $first_Name." ".$last_Name." ". $user_Password." ". 
                //$user_Email." ". $user_role;
                    
                $user_Image = $_FILES['image']['name'];
                $user_Temp = $_FILES['image']['tmp_name'];               
                                         
                
                $sql = "insert into users (user_name,user_password,first_name,last_name,user_email,user_image,user_role) 
                values('$user_name', '$user_password', '$first_name', '$last_name', '$user_email', '$user_Image', '$user_role')";

                $result = mysqli_query($con,$sql);
                
                if($result)
                {
                    echo '<p class="alert alert-success">User Added Sucessfully.</p>';
                    move_uploaded_file($user_Temp, "../images/users/$user_Image");
                }
                else
                {
                    echo"Query Failed ". $con -> error;
                }
                                               
            }
        
        ?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col">                        
                        <form action="" method="POST" enctype="multipart/form-data">                                                  
                            <div class="form-group">
                                <label> User Name</label>
                                <input type="text" name="user_name" placeholder="User Name" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> First Name</label>
                                <input type="text" name="first_name" placeholder="First Name" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Last Name</label>
                                <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-2">
                            </div>
                            <div class="form-group" >
                                <select name="user_role" id="" class="form-control">
                                    <option value="User">Select User</option>
                                    <option value="admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> User Email</label>
                                <input type="email" name="user_email" placeholder="User Email" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Password</label>
                                <input type="password" name="user_password" placeholder="Password" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label>User Image</label>
                                <input type="file" name="image" class="form-control mb-2">
                            </div>                          
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="btn_add_user"> Add </button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.row -->
                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php require_once ('./admin_includes/footer.php')?>         