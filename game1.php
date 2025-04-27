 
 <!-- ##### Single Game Review Area Start ##### -->
 <?php
            require_once('includes/db.php');
            $sql = "Select * from games";
            $resq = mysqli_query($con,$sql);

            while($row= mysqli_fetch_assoc($resq)){
                $title = $row['game_title'];
                $tag = $row['game_tags'];
                $date = $row['game_date'];
                $content = $row['game_content'];
                $image = $row['game_img'];
            ?>
 <section class="single-game-review-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-game-img-slides">
                        <div id="gameSlides" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/<?php echo $image?>" alt="">
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>            
            
            <div class="row align-items-center">
                <!-- *** Review Area *** -->
                <div class="col-12 col-md-6">
                    <div class="single-game-review-area style-2 mt-70">
                        <div class="game-content">
                            <span class="game-tag"><?php echo $tag?></span>
                            <a href="single-game-review.php" class="game-title"><?php echo $title?></a>
                            <div class="game-meta">
                                <a href="#" class="game-date"><?php echo $date?></a>
                            </div>
                            <div><?php echo $content?></div>
                            <p></p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area">
                                <div class="download-area">
                                    <a href="#"><img src="img/core-img/app-store.png" alt=""></a>
                                    <a href="#"><img src="img/core-img/google-play.png" alt=""></a>
                                </div>
                                <div class="rating-area mt-30">
                                    <h3>8.2</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                ?>

                <!-- *** Barfiller Area *** -->
                <div class="col-12 col-md-6">
                    <div class="egames-barfiller">
                        <!-- Single Barfiller -->
                        <div class="single-barfiller-area">
                            <div id="bar1" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="90"></span>
                                <p>User Experience</p>
                            </div>
                        </div>
                        <!-- Single Barfiller -->
                        <div class="single-barfiller-area">
                            <div id="bar2" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="80"></span>
                                <p>Marketing</p>
                            </div>
                        </div>
                        <!-- Single Barfiller -->
                        <div class="single-barfiller-area">
                            <div id="bar3" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="95"></span>
                                <p>Solutions</p>
                            </div>
                        </div>
                        <!-- Single Barfiller -->
                        <div class="single-barfiller-area">
                            <div id="bar4" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="60"></span>
                                <p>Price</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>