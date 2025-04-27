<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

            <?php
            
                if(isset($_GET['p_id']))
                {
                    $Post_ID = $_GET['p_id'];
                    $sql = "Select * from posts where post_id = '$Post_ID'";
                    $result = mysqli_query($con,$sql);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        $post_id =$row['post_id'];
                        $post_author =$row['post_author'];
                        $post_title =$row['post_title']  ;                          
                        $post_cat_id =$row['post_cat_id'];
                        $post_status =$row['post_status'];
                        $img = $row['post_img'];
                        $post_tags = $row['post_tags'];
                        $post_desc = $row['post_desc'];
                        $post_content = $row['post_content'];
                    }
                }

                //Update Record
                if(isset($_POST['btn_edit_post']))
                {
                    $Post_Title = $_POST['post_title'];
                    $Post_Cat_id = $_POST['cat_name'];
                    $Post_Author = $_POST['post_author'];
                    $Post_Status = $_POST['post_status'];

                    $Post_Image = $_FILES['image']['name'];
                    $Post_Temp = $_FILES['image']['tmp_name'];
                    
                    $Post_Tags = $_POST['post_tags'];
                    $Post_Desc = $_POST['post_desc'];
                    $Post_Content = $_POST['post_content'];

                    if(empty($Post_Image))
                    {
                        $query = "select * from posts where post_id ='$Post_ID'";
                        $result = mysqli_query($con,$query);

                        while($row= mysqli_fetch_assoc($result))
                        {
                            $Post_Image = $row['post_img'];
                        }
                    }
                    
                    $sql = "update posts set post_cat_id='$Post_Cat_id', post_title='$Post_Title',
                    post_author='$Post_Author', post_date= now(), post_img='$Post_Image', 
                    post_content='$Post_Content', post_tags='$Post_Tags', post_desc='$Post_Desc',post_status='$Post_Status' 
                    where post_id='$Post_ID'";

                    $result = mysqli_query($con,$sql);

                    if($result)
                    {
                       // header("location: ./posts.php");
                        move_uploaded_file($Post_Temp, "../images/$Post_Image");
                        echo'<p class="alert alert-info"> Post has been updated Successfully</p>';
                    }
                }
            
            ?>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col">                        
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> Post Title</label>
                                <input type="text" name="post_title" placeholder="Post Title" class="form-control mb-2"
                                value="<?php echo $post_title?>">
                            </div>
                            <div class="form-group">
                                <select name="cat_name" id="" class="form-control">
                                <?php
                                
                                    $query="select * from categories where cat_sub!='Game'";
                                    $data = mysqli_query($con,$query);

                                    while($row=mysqli_fetch_assoc($data))
                                    {
                                        $cat_id =$row['post_cat_id'];
                                ?>

                                    <option value="<?php echo $cat_id?>"><?php echo $row['cat_title'];?></option>

                                <?php  
                                    }

                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> Post Author</label>
                                <input type="text" name="post_author" placeholder="Post Author" class="form-control mb-2"
                                value="<?php echo $post_author?>">
                            </div>
                            <div class="form-group">
                                <label> Post Status</label>
                                <select name="post_status" class="form-control">
                                    <option value="<?php echo $post_status ?>"><?php echo $post_status ?></option>
                                
                                    <?php

                                        if($post_status=="Published")
                                        {
                                            echo"<option value='Draft'>Draft</option>";
                                        }
                                        else
                                        {
                                            echo"<option value='Published'>Published</option>";
                                        }
                                    
                                    
                                    ?>
                                
                                </select>
                                <!-- <input type="text" name="post_status" placeholder="Post Status" class="form-control mb-2" -->
                                <!-- value="<-?php echo $post_status?>">-->
                            </div>
                            <div class="form-group">
                                <label> Post Image</label>
                                <img width="150" height="100" class="img-responsive" src="../images/<?php echo $img?>">
                                <input type="file" name="image" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Post Tags</label>
                                <input type="text" name="post_tags" placeholder="Post Tags" class="form-control mb-2"
                                value="<?php echo $post_tags?>">
                            </div>
                            <div class="form-group">
                                <label> Post Description</label>
                                <input type="text" name="post_desc" placeholder="Description" class="form-control mb-2"
                                value="<?php echo $post_desc?>">
                            </div>
                            <div class="form-group">
                                <label> Post Content</label>
                                <textarea name="post_content" class="form-control" id="editor" cols="30" rows="10"><?php echo $post_content?></textarea>    
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="btn_edit_post"> Edit Post</button>
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