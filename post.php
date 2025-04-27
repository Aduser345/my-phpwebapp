<!-- Header Section -->
<?php require_once "includes/header.php"?>
<!-- Navigation -->
<?php require_once "includes/nav.php"?>

<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(images/bg-img/23.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Article</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <!-- ##### Post Details Area Start ##### -->
    
    <section class="post-news-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="mt-100">
                        <div class="post-details-content mb-100">
                            <?php

                            if(isset($_GET['p_id']))
                            {
                                $Post_ID = $_GET['p_id'];
                            }
                                $query = "Select * from posts where post_id='$Post_ID'";
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
                
                            <div class="blog-thumbnail mb-50">
                                <img src="images/<?php echo $post_img ?>" alt="">
                            </div>
                                <div class="blog-content">
                    
                                    <!-- First Blog Post -->
                                    <h4 class="post-title">
                                        <?php echo $post_title ?>
                                    </h4>
                                    <div class="post-meta mb-30">
                                        <a href="#" class="post-date"><?php echo $post_date ?></a>
                                        <a href="#" class="post-author">By <?php echo $post_author ?></a>
                                        <a href="#" class="post-comments">2 Comments</a>
                                    </div>         
                                    
                                    <p><?php echo $post_content?></p>               
                                    
                                </div>
                            <?php
                                }
                            ?>

                            <div class="post-a-comment-area mb-30 clearfix" id="reply">
                            
                                <h4 class="mb-50">Leave a reply</h4>

                                <!-- Reply Form -->
                                <div class="contact-form-area">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <input type="text" name="author" class="form-control" id="name" placeholder="Name*">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email*">
                                            </div>
                                            <div class="col-12">
                                                <textarea name="message" name="comment"class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn egames-btn w-100" type="submit" name="btn_submit">Submit Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php

                                if(isset($_POST['btn_submit']))
                                {
                                    $Post_ID = $_GET['p_id'];
                                    $Author = $_POST['author'];
                                    $Email = $_POST['email'];
                                    $Comment = $_POST['comment'];
                                    
                                    $sql = "insert into comments(comments_post_id,comments_author,comments_email,
                                    comments_content,comments_status,comments_date) values('$Post_ID','$Author',
                                    '$Email','$Comment','approved',now())";

                                    $data = mysqli_query($con,$sql);
                                    if($data)
                                    {
                                        echo'<div class="alert alert-success">Your comment has been submitted </div>';
                                    }
                                    else
                                    {
                                        echo'<div class="alert alert-danger">Something went wrong </div>';

                                    }
                                }


                                ?>
                            </div>
                                                    
                        </div>
                         <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-70">
                            <h4 class="mb-50">Comments</h4>

                            <ol>
                            <?php

                                $comment_query = "select * from comments where comments_post_id='$Post_ID' AND
                                comments_status='approved' order by comments_id DESC";
                                $comment_result = mysqli_query($con,$comment_query);

                                while($data = mysqli_fetch_assoc($comment_result))
                                {
                                    $comment_author = $data['comments_author'];
                                    $comment_content = $data['comments_content'];
                                    $comment_date = $data['comments_date'];
                            ?>
                            <!-- Posted Comments -->

                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/32.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author"><?php echo $comment_author; ?></a>
                                            <a href="#" class="post-date"><?php echo $comment_date; ?></a>
                                            <p><?php echo $comment_content; ?></p>
                                            <a href="#reply" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <?php 
                                    }
                                
                                    $update_comment_count = "update posts set post_comment_count = post_comment_count+1 where
                                    post_id ='$Post_ID'";
                                    mysqli_query($con,$update_comment_count);
                                
                                ?>                         
                            </ol>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

           <!-- Blog Comments -->
                   

                <hr>               
               
            </div>
            

            <!-- Sidebar 
            <-?php require_once "includes/side_bar.php"?>-->

        </div>
        <!-- Footer -->
        <?php require_once "includes/footer.php"?>

 