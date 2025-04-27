<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

            <?php
            
                if(isset($_GET['m_id']))
                {
                    $Music_ID = $_GET['m_id'];
                    $sql = "Select * from audios where id = '$Music_ID'";
                    $result = mysqli_query($con,$sql);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        $music_id =$row['id'];
                        $music_title =$row['song']; 
                        $music_artist =$row['artist'];
                        $img = $row['image'];
                        $genre = $row['Genre'];
                    }
                }

                //Update Record
                if(isset($_POST['edit_music']) && $_POST['edit_music'] == "Upload Audio")
                {   
                    $m_id= $Music_ID;
                    $dir = '../Uploads/';
                    $audio_path = $dir . basename($_FILES['audioFile']['name']);
                    $art = $_POST['artist'];
                    $sng = $_POST['song'];
                    $genre = $_POST['genre'];
                    $pic = $dir . basename($_FILES['photo']['name']);
                    
                    if (move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
                        if (move_uploaded_file($_FILES['photo']['tmp_name'], $pic)) {                   
                            SaveAudio($audio_path, $sng, $art, $pic, $genre,$m_id);                    
                        }
                    }

                    if(empty($music_Image))
                    {
                        $query = "select * from audios where id ='$Music_ID'";
                        $result = mysqli_query($con,$query);

                        while($row= mysqli_fetch_assoc($result))
                        {
                            $music_Image = $row['image'];
                        }
                    }
                }                       

                    function SaveAudio($fileName, $sng, $art, $pic, $genre, $m_id)
                    {
                        $con = mysqli_connect('localhost', 'user', '123', 'cms');
                        if (!$con) {
                            die('Server not connected');
                        }
                    
                        $query = "update audios set song='$sng', image='$pic', filename='$fileName', 
                        artist='$art', Genre='$genre' where id='$m_id'";
                    
                        mysqli_query($con, $query);
                    
                        if (mysqli_affected_rows($con) > 0) {
                            echo '<p class="alert alert-info"> Song saved in database successfully.</p>';
                        }
                        else
                        {
                            echo"Query Failed ". $con -> error;
                        }
                    
                        mysqli_close($con);
                    }
                          
                                     
            ?>
            <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col">                        
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> Song Name</label>
                            <input type="text" name="song" placeholder="Enter Song Name" class="form-control mb-2"
                            value="<?php echo $music_title ?>">
                        </div>
                        <div class="form-group">
                        <label> Genre</label>
                        <select name="genre" id="" class="form-control">
                        <option value="English">English</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Oldies">Oldies</option>
                        <option value="International">International</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label> Artist Name</label>
                            <input type="text" name="artist" placeholder="Enter Artist Name" class="form-control mb-2"
                            value="<?php echo $music_title ?>">
                        </div>
                        <div class="form-group">
                            <label> Select Song</label>
                            <input type="file" name="audioFile" class="form-control mb-2">
                        </div> 
                        <div class="form-group">
                            <label> Select Image for Song Cover</label>
                            <img width="150" height="100" class="img-responsive" src="../Uploads/<?php echo $img?>">                             
                            <input type="file" name="photo" class="form-control mb-2">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" value="Upload Audio" name="edit_music"> Add Song </button>
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