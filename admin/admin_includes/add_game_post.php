<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

        <?php
        
            if(isset($_POST['btn_add_game']))
            {
                $game_Title = $_POST['game_title'];
                $game_Cat_id = $_POST['cat_name'];
                $game_Status = $_POST['game_status'];

                $game_Image = $_FILES['image']['name'];
                $Post_Temp = $_FILES['image']['tmp_name'];
                
                $game_Tags = $_POST['game_tags'];
                $game_Content = $_POST['game_content'];                      
                
                $sql = "insert into games(game_cat_id,game_title,game_date,game_img,
                game_content,game_tags,game_status) values('$game_Cat_id', '$game_Title', 
                now(),'$game_Image', '$game_Content', '$game_Tags', '$game_Status')";

                $result = mysqli_query($con,$sql);
                
                if($result)
                {
                    echo "Record Saved in Database ";
                    move_uploaded_file($Post_Temp, "../images/$game_Image");
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
                                <label> Game Title</label>
                                <input type="text" name="game_title" placeholder="Game Title" class="form-control mb-2">
                            </div>

                            <select name="cat_name" id="" class="form-control">                          
                          <?php
                          
                                $sql = "select * from categories where cat_sub='Game'";
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
                                <label> Publish Status</label>
                                <select name="game_status" class="form-control">
                                    <option value="Draft">Draft</option>
                                
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
                                <label> Game Image</label>
                                <input type="file" name="image" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Game Tags</label>
                                <select name="game_tags" class="form-control">
                                    <option value="" disabled selected>Select A Genre</option>
                                    <option value='Adventure'>Adventure</option>
                                    <option value='RPG'>RPG</option>
                                    <option value='Action'>Action</option>
                                    <option value='Strategy'>Strategy</option>
                                    <option value='Racing'>Racing</option>
                                    <option value='MMO'>MMO</option>
                                    <option value='Simulation'>Simulation</option>
                                </select>
                            </div>                           
                            <div class="form-group">
                                <label> Game Content</label>
                                <textarea name="game_content" class="form-control" id="editor" cols="30" rows="10"></textarea>    
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="btn_add_game"> Add </button>
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