<?php
require_once('db.php');
if(isset($_POST['signup']))
            {
                $user_name = $_POST['name'];
                $user_password = $_POST['pass'];
                $conf_password = $_POST['conf'];
                                
                $name = $_POST['name'];              
                
                $user_role = 'User';

                //echo $user_Name." ". $first_Name." ".$last_Name." ". $user_Password." ". 
                //$user_Email." ". $user_role;
                if($conf_password==$user_password)
                {
                    $sql = "insert into users(user_name,user_password,first_name,user_role) 
                    values('$user_name', '$user_password', '$name', '$user_role')";

                    $result = mysqli_query($con,$sql);
                    
                    if($result)
                    {
                        echo '<p class="alert alert-success">User Added Sucessfully.</p>';
                        header( "Refresh:5; url=../Home.html", true, 303);
                    }
                    else
                    {
                        echo"Query Failed ". $con -> error;
                    }
                }
                else
                {
                    echo "Password does not match";
                }                             
            }
?>