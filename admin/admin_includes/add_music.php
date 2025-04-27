<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

        <?php
        if (isset($_POST['save_audio']) && $_POST['save_audio'] == "Upload Audio") {
            $dir = '../Uploads/';
            $audio_path = $dir . basename($_FILES['audioFile']['name']);
            $art = $_POST['artist'];
            $sng = $_POST['song'];
            $genre = $_POST['genre'];
            $pic = $dir . basename($_FILES['photo']['name']);
        
            if (move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $pic)) {                   
                    SaveAudio($audio_path, $sng, $art, $pic, $genre);                    
                }
            }
        }
               
        
        function SaveAudio($fileName, $sng, $art, $pic, $genre)
        {
            $con = mysqli_connect('localhost', 'user', '123', 'cms');
            if (!$con) {
                die('Server not connected');
            }
        
            $query = "insert into audios(filename,song,artist,image,Genre)values('{$fileName}','{$sng}','{$art}','{$pic}','{$genre}')";
        
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
                                <input type="text" name="song" placeholder="Enter Song Name" class="form-control mb-2">
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
                                <input type="text" name="artist" placeholder="Enter Artist Name" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label> Select Song</label>
                                <input type="file" name="audioFile" class="form-control mb-2">
                            </div> 
                            <div class="form-group">
                                <label> Select Image for Song Cover</label>
                                <input type="file" name="photo" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" value="Upload Audio" name="save_audio"> Add Song </button>
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