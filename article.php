<section>
    <div class="container">
        <div class="row">
            
            <!-- Post Blog -->
                <div class="col-md-8">
                    <?php

                    if(isset($_GET['category']))
                    {
                        $category_id = $_GET['category'];
                    }

                    $query = "Select * from posts where post_cat_id='$category_id'";
                    $data = mysqli_query($con,$query);

                    while($row = mysqli_fetch_assoc($data))
                    {
                        $post_id = $row['post_id'];
                        $post_title= $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_img = $row['post_img'];
                        $post_content = $row['post_content'];
                        $post_tags = $row['post_tags'];
                    ?>

                    
                    <!-- First Blog Post -->
                    <h1 class="page-header">
                        <a href="#"><?php echo $post_title ?></a>
                    </h1>
                    
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $post_img ?>" alt="">
                    <hr>
                    <p><?php echo $post_content?></p>
                    <a class="btn btn-primary" href="single-post.php?p_id=<?php echo $post_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
            
                    <?php

                        }


                    ?>
                </div>
        </div>

    </div>
</section>