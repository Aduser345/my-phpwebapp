<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Gaming - Divergent</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <!--link href="<?php echo $themeStyleSheet; ?>" rel="stylesheet" id="theme-link"-->

    <link id="theme-link" rel="stylesheet" type="text/css" href="theme/light-theme.css" />
    <link rel="stylesheet" href="menu.css" />
    
</head>

<body>
    <?php require_once('includes/login.php');?>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area" >
        
        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                
                <div class="container">
                    <!-- Menu -->
                        <?php require_once('includes/navbar.php')?>
                    </nav>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img bg-overlay" style="background-image: url(images/bg-img/home1.jpg);background-size: cover;">
                <!-- Blog Content -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="200ms">The Power of Gaming</h2>
                                <p data-animation="fadeInUp" data-delay="1000ms">Games, both digital and non-digital, are an incredible draw for so many people.
                                    Playing digital games is an immensely popular form of entertainment. Simple real-world observations will attest to gaming’s connection to our youth. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img bg-overlay" style="background-image: url(images/bg-img/2.jpg);">
                <!-- Blog Content -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="400ms">God of War (2018)</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">God of War is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment. Released worldwide on April 20, 2018, for the PlayStation 4, it is the eighth installment in the God of War series, the eighth chronologically, and the sequel to 2010's God of War III.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img bg-overlay" style="background-image: url(images/bg-img/home3.jpg);background-size: cover;">
                <!-- Blog Content -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="200ms">Watch Dogs 2</h2>
                                <p data-animation="fadeInUp" data-delay="1000ms">Games, both digital and non-digital, are an incredible draw for so many people.
                                    Playing digital games is an immensely popular form of entertainment. Simple real-world observations will attest to gaming’s connection to our youth. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Monthly Picks Area Start ##### -->
    <section class="monthly-picks-area section-padding-100 bg-pattern">
        

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">This Month’s Pick</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="latest-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="false">Latest</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content wow fadeInUp" data-wow-delay="500ms" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                <!-- Popular Games Slideshow -->
                <div class="popular-games-slideshow owl-carousel">

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/50.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Grand Theft Auto V</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>


                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/54.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Persona 5</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/50.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Grand Theft Auto V</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/54.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Persona 5</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                      <!-- Single Games -->
                      <div class="single-games-slide">
                        <img src="images/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                <!-- Latest Games Slideshow -->
                <div class="latest-games-slideshow owl-carousel">

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/50.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Grand Theft Auto V</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>


                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/54.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Persona 5</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/50.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Grand Theft Auto V</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <img src="images/bg-img/54.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">Persona 5</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>
                    
                      <!-- Single Games -->
                      <div class="single-games-slide">
                        <img src="images/bg-img/52.jpg" alt="">
                        <div class="slide-text">
                            <a href="#" class="game-title">God of War</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">Action</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ##### Monthly Picks Area End ##### -->

    <!-- ##### Video Area Start ##### -->
    <div class="egames-video-area section-padding-100 bg-pattern2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="egames-nav-btn">
                        <div class="nav flex-column" id="video-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="video1" data-toggle="pill" href="#video-1" role="tab" aria-controls="video-1" aria-selected="true">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="100ms">
                                    <div class="video-thumbnail">
                                        <img src="images/bg-img/14.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Assemble Your Squad and Join the Battle</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                    <div class="video-rating">8.3/10</div>
                                </div>
                            </a>

                            <a class="nav-link" id="video2" data-toggle="pill" href="#video-2" role="tab" aria-controls="video-2" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="200ms">
                                    <div class="video-thumbnail">
                                        <img src="images/bg-img/15.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Tips to improve your game</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                    <div class="video-rating">8.3/10</div>
                                </div>
                            </a>

                            <a class="nav-link" id="video3" data-toggle="pill" href="#video-3" role="tab" aria-controls="video-3" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="300ms">
                                    <div class="video-thumbnail">
                                        <img src="images/bg-img/16.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Game reviews: the best of 2018</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                    <div class="video-rating">8.3/10</div>
                                </div>
                            </a>

                            <a class="nav-link" id="video4" data-toggle="pill" href="#video-4" role="tab" aria-controls="video-4" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="400ms">
                                    <div class="video-thumbnail">
                                        <img src="images/bg-img/17.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Assemble Your Squad and Join the Battle</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                    <div class="video-rating">8.3/10</div>
                                </div>
                            </a>

                            <a class="nav-link" id="video5" data-toggle="pill" href="#video-5" role="tab" aria-controls="video-5" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="500ms">
                                    <div class="video-thumbnail">
                                        <img src="images/bg-img/18.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Tips to improve your game</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                    <div class="video-rating">8.3/10</div>
                                </div>
                            </a>

                            <a class="nav-link" id="video6" data-toggle="pill" href="#video-6" role="tab" aria-controls="video-6" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="600ms">
                                    <div class="video-thumbnail">
                                        <img src="images/bg-img/14.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Game reviews: the best of 2018</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                    <div class="video-rating">8.3/10</div>
                                </div>
                            </a>

                            <a class="nav-link" id="video7" data-toggle="pill" href="#video-7" role="tab" aria-controls="video-7" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="700ms">
                                    <div class="video-thumbnail">
                                        <img src="images/bg-img/15.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Tips to improve your game</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                    <div class="video-rating">8.3/10</div>
                                </div>
                            </a>

                            <a class="nav-link" id="video8" data-toggle="pill" href="#video-8" role="tab" aria-controls="video-8" aria-selected="false">
                                <!-- Single Video Widget -->
                                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="800ms">
                                    <div class="video-thumbnail">
                                        <img src="images/bg-img/16.jpg" alt="">
                                    </div>
                                    <div class="video-text">
                                        <p class="video-title mb-0">Game reviews: the best of 2018</p>
                                        <span>Nintendo Wii, PS4, XBox 360</span>
                                    </div>
                                    <div class="video-rating">8.3/10</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="tab-content" id="video-tabContent">
                        <div class="tab-pane fade show active" id="video-1" role="tabpanel" aria-labelledby="video1">
                            <div class="video-playground bg-img" style="background-image: url(images/bg-img/45.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="images/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-2" role="tabpanel" aria-labelledby="video2">
                            <div class="video-playground bg-img" style="background-image: url(images/bg-img/46.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="images/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-3" role="tabpanel" aria-labelledby="video3">
                            <div class="video-playground bg-img" style="background-image: url(images/bg-img/47.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="images/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-4" role="tabpanel" aria-labelledby="video4">
                            <div class="video-playground bg-img" style="background-image: url(images/bg-img/48.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="images/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-5" role="tabpanel" aria-labelledby="video5">
                            <div class="video-playground bg-img" style="background-image: url(images/bg-img/49.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="images/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-6" role="tabpanel" aria-labelledby="video6">
                            <div class="video-playground bg-img" style="background-image: url(images/bg-img/45.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="images/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-7" role="tabpanel" aria-labelledby="video7">
                            <div class="video-playground bg-img" style="background-image: url(images/bg-img/46.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="images/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-8" role="tabpanel" aria-labelledby="video8">
                            <div class="video-playground bg-img" style="background-image: url(images/bg-img/47.jpg);">
                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-button"><img src="images/core-img/play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Video Area End ##### -->

    <!-- ##### Articles Area Start ##### -->
    <section class="latest-articles-area section-padding-100-0 bg-img bg-pattern bg-fixed" style="background-image: url(images/bg-img/5.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="mb-100">
                        <!-- Title -->
                        <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">Latest Articles</h2>

                        <?php
                $query = "Select * from posts where post_status = 'Published'";
                $data = mysqli_query($con,$query);
                $post_status = "";

                while($row = mysqli_fetch_assoc($data))
                {
                    $post_id = $row['post_id'];
                    $post_title= $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_img = $row['post_img'];
                    $post_content = $row['post_content'];
                    $post_tags = $row['post_tags'];
                    $post_desc = $row['post_desc'];
                    $post_status = $row['post_status'];;
                ?>
                 <!-- *** Single Articles Area *** -->
                <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="article-thumbnail">
                        <img src="images/<?php echo $post_img ?>" alt="">
                    </div>
                    <div class="article-content">
                    <h2>
                        <a href="single-post.html?p_id=<?php echo $post_id;?>" class="post-title"><?php echo $post_title ?></a>
                    </h2>
                        <div class="post-meta">
                            <a href="#" class="post-date"><?php echo $post_date ?></a>                            
                            <a href="#" class="post-comments">2 Comments</a>
                        </div>
                        <p><?php echo $post_desc?></p>
                        <a class="btn btn-primary" href="single-post.html?p_id=<?php echo $post_id;?> ">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    </div>
                </div>

                <!-- First Blog Post -->                                              
                         
            <?php

                }

                if($post_status !== 'Published')
                {
                    echo'<div class="alert alert-info">No Posts Found</div>';
                }


            ?>
                                                                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Articles Area End ##### -->

 <?php require_once('includes/footer.php')?>