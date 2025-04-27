<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

            <?php
            
                if(isset($_GET['p_id']))
                {
                    $Post_ID = $_GET['p_id'];
                    $sql = "Select * from games where game_id = '$Post_ID'";
                    $result = mysqli_query($con,$sql);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        $game_id =$row['game_id'];
                        $game_title =$row['game_title'] ;                          
                        $game_cat_id =$row['game_cat_id'];
                        $game_status =$row['game_status'];
                        $img = $row['game_img'];
                        $game_tags = $row['game_tags'];
                        $game_content = $row['game_content'];
                    }
                }

                //Update Record
                if(isset($_POST['btn_edit_game']))
                {
                    $game_Title = $_POST['game_title'];
                    $game_Cat_id = $_POST['cat_name'];
                    $game_Status = $_POST['game_status'];

                    $game_Image = $_FILES['image']['name'];
                    $Post_Temp = $_FILES['image']['tmp_name'];
                    
                    $game_Tags = $_POST['game_tags'];
                    $game_Content = $_POST['game_content'];

                    if(empty($game_Image))
                    {
                        $query = "select * from games where game_id ='$Post_ID'";
                        $result = mysqli_query($con,$query);

                        while($row= mysqli_fetch_assoc($result))
                        {
                            $game_Image = $row['game_img'];
                        }
                    }
                    
                    $sql = "update games set game_cat_id='$game_Cat_id', game_title='$game_Title',
                    game_date= now(), game_img='$game_Image', game_content='$game_Content', 
                    game_tags='$game_Tags', game_status='$game_Status' where game_id='$Post_ID'";

                    $result = mysqli_query($con,$sql);

                    if($result)
                    {
                       // header("location: ./posts.php");
                        move_uploaded_file($Post_Temp, "../images/$game_Image");
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
                                <label> Game Title</label>
                                <input type="text" name="game_title" placeholder="Game Title" class="form-control mb-2"
                                value="<?php echo $game_title?>">
                            </div>
                            <div class="form-group">
                                <select name="cat_name" id="" class="form-control">
                                <?php
                                
                                    $query="select * from categories where cat_sub='Game'";
                                    $data = mysqli_query($con,$query);

                                    while($row=mysqli_fetch_assoc($data))
                                    {
                                        $cat_id =$row['game_cat_id'];
                                ?>

                                    <option value="<?php echo $cat_id?>"><?php echo $row['cat_title'];?></option>

                                <?php  
                                    }

                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> Publish Status</label>
                                <select name="game_status" class="form-control">
                                    <option value="<?php echo $game_status ?>"><?php echo $game_status ?></option>
                                
                                    <?php

                                        if($game_status=="Published")
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
                                <label> Game Image</label>
                                <img width="150" height="100" class="img-responsive" src="../images/<?php echo $img?>">
                                <input type="file" name="image" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Game Tags</label>
                                <input type="text" name="game_tags" placeholder="Post Tags" class="form-control mb-2"
                                value="<?php echo $game_tags?>">
                            </div>
                            <div class="form-group">
                                <label> Game Content</label>
                                <textarea name="game_content" class="form-control" id="editor" cols="30" rows="10"><?php echo $game_content?></textarea>    
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="btn_edit_game"> Edit Game</button>
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