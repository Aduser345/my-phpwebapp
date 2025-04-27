<?php require_once ('./admin_includes/header.php')?>

<body>

<?php require_once ('./admin_includes/nav.php')?>

        <?php
        if (isset($_POST['upload']) && $_POST['upload'] == "Submit") {

            $vid = $_POST['url'];
            $til = $_POST['Title'];
            $cat = $_POST['Category'];


            Savevideo($vid, $til, $cat);
        }
               
        
        function Savevideo($vid, $til, $cat)
        {
            $conn = mysqli_connect('localhost', 'user', '123', 'cms');
            if (!$conn) {
                die('Sever not connected');
            }
        
            $query = "insert into videos(url,Title,Category)values('{$vid}','{$til}','{$cat}')";
        
            mysqli_query($conn, $query);
        
            if (mysqli_affected_rows($conn) > 0) {
                echo "Your url Has been Saved";
            }
        
            mysqli_close($conn);
        }
                         
        ?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col">                        
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> Video Title</label>
                                <input type="text" name="Title" placeholder="Enter Song Name" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                            <label> Category</label>
                            <select id="Cats" name="Category">
                                <option value="Trending">Trending</option>
                                <option value="Dance">Dance</option>
                                <option value="Food">Food</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label> Video Source</label>
                                <input type="text" name="url" placeholder="Enter Source Path" class="form-control mb-2">
                            </div>                            
                            <div class="form-group">
                                <button class="btn btn-success" value="Submit" name="upload"> Add Video</button>
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