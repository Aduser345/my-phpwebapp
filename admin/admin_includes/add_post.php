<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

        <?php
        
            if(isset($_POST['btn_add_post']))
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
                $Post_comment = '4';               
                
                $sql = "insert into posts(post_cat_id,post_title,post_author,post_date,post_img,
                post_content,post_tags,post_desc,post_status) values('$Post_Cat_id', '$Post_Title', 
                '$Post_Author', now(),'$Post_Image', '$Post_Content', '$Post_Tags', '$Post_Desc', '$Post_Status')";

                $result = mysqli_query($con,$sql);
                
                if($result)
                {
                    echo "Record Saved in Database ";
                    move_uploaded_file($Post_Temp, "../images/$Post_Image");
                }
                else
                {
                    echo"Query Failed ". $con -> error;
                }
                
                #echo $Post_Title." ". $Post_Cat_id." ". $Post_Author." ".$Post_Status." ". $Post_Tags." ". 
                #$Post_Content." ". $Post_Date." ". $Post_comment;
            }
        
        ?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col">                        
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> Post Title</label>
                                <input type="text" name="post_title" placeholder="Post Title" class="form-control mb-2">
                            </div>

                            <select name="cat_name" id="" class="form-control">                          
                          <?php
                          
                                $sql = "select * from categories where cat_sub!='Game'";
                                $value = mysqli_query($con,$sql);

                                while($row = mysqli_fetch_assoc($value))
                                {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];
                          ?>
                          <option value="<?php echo $cat_id?>"><?php echo $cat_title?></option>
                          <?php

                                }

                          ?>
                          </select>
                            <div class="form-group">
                                <label> Post Author</label>
                                <input type="text" name="post_author" placeholder="Post Author" class="form-control mb-2">
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
                            </div>
                            <div class="form-group">
                                <label> Post Image</label>
                                <input type="file" name="image" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Post Tags</label>
                                <input type="text" name="post_tags" placeholder="Post Tags" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Post Description</label>
                                <input type="text" name="post_desc" placeholder="Description" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Post Content</label>
                                <textarea name="post_content" class="form-control" id="editor" cols="30" rows="10"></textarea>    
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="btn_add_post"> Add </button>
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