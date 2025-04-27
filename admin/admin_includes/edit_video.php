<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

            <?php
            
                if(isset($_GET['v_id']))
                {
                    $Video_ID = $_GET['v_id'];
                    $sql = "Select * from videos where id = '$Video_ID'";
                    $result = mysqli_query($con,$sql);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        $video_id =$row['id'];
                        $video_title =$row['Title'] ;                          
                        $video_cat =$row['Category'];
                        $video_src =$row['url'];
                    }
                }

            ?>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col">                        
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> Video Title</label>
                                <input type="text" name="Title" placeholder="Enter Video Title" class="form-control mb-2"
                                value="<?php echo $video_title?>">
                            </div>
                            <div class="form-group">
                            <label> Category</label>
                            <select name="Category">
                                <?php
                                $sql = "Select * from videos where id='$video_id'";
                                $result = mysqli_query($con,$sql);
            
                                while($row = mysqli_fetch_assoc($result))
                                {                                                             
                                    $video_cat =$row['Category'];

                                    ?>
                                <option value="<?php echo $video_cat?>" disabled selected><?php echo $row['Category'];?></option>
                                <?php
                                }
                                ?>
                                <option value="Trending">Trending</option>
                                <option value="Dance">Dance</option>
                                <option value="Food">Food</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label> Video Source</label>
                                <input type="text" name="url" placeholder="Enter Source Path" class="form-control mb-2"
                                value="<?php echo $video_src?>">
                            </div>                            
                            <div class="form-group">
                                <button class="btn btn-success" value="Submit" name="btn_edit_video"> Save Video</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.row -->
                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        
        <?php
                if(isset($_POST['btn_edit_video']))
                {
                        $video_title = $_POST['Title'];                          
                        $video_cat = $_POST['Category'];
                        $video_src =$_POST['url'];                    
                    
                    $sql = "update videos set url='$video_src', Title='$video_title',
                    Category='$video_cat' where id='$video_id'";

                    $result = mysqli_query($con,$sql);

                    if($result)
                    {
                        //header("location: ./video.php");                        
                        echo'<p class="alert alert-info"> Post has been updated Successfully</p>';
                    }
                }
            
            ?>

<?php require_once ('./admin_includes/footer.php')?>         