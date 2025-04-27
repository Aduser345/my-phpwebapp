<!DOCTYPE html>
<html>

<head>
    <title>Music - Divergent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="thriller.css">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style1.css">
    <!--link href="<?php echo $themeStyleSheet; ?>" rel="stylesheet" id="theme-link"-->

    <link id="theme-link" rel="stylesheet" type="text/css" href="../theme/light-theme.css" />
    <link rel="stylesheet" href="../menu.css" />
    
    
</head>

<body>
    <?php require_once('../includes/login.php');?>
    <!-- Preloader -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area" >
        
        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                
                <div class="container">
                    <!-- Menu -->
                   
                        <?php require_once('../includes/music_navbar.php')?>
                    </nav>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- English Section songs -->
    <h1 class="title">English</h1>

    <div class="pad">
        <?php        
        $query = "Select * from audios where Genre='English'";
        $data = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($data)) {
            $sname = $row['song'];
            $artist = $row['artist'];
            $img = $row['image'];

        ?>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo $img ?>" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <h2 class="music-title">
                        <?php echo $sname ?>
                    </h2>
                    <p>
                        <?php echo $artist ?>
                    </p>
                    <a href="player.php?s_id=<?= $row['id'] ?>"><i class="fa fa-play fa-3x"
                            style="text-decoration:none;color:white;"></i></a>
                </div>

            </div>

        </div>
        <?php
    }
    if(mysqli_num_rows($data)== 0)
    {
        echo ' No music has been added yet.';
    }
    ?>
    </div>
    <!-- End Section English -->

    <!-- Hindi Section songs -->
    <h1 class="title">Hindi</h1>

    <div class="pad">
        <?php
         
         $query = "Select * from audios where Genre='Hindi'";
         $data = mysqli_query($con, $query);
         while ($row = mysqli_fetch_assoc($data)) {
             $sname = $row['song'];
             $artist = $row['artist'];
             $img = $row['image'];
 
         ?>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo $img ?>" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <h2 class="music-title">
                        <?php echo $sname ?>
                    </h2>
                    <p>
                        <?php echo $artist ?>
                    </p>                    
                    <a href="player.php?s_id=<?= $row['id'] ?>"><i class="fa fa-play fa-3x"
                            style="text-decoration:none;color:white;"></i></a>
                </div>

            </div>

        </div>
        <?php
     }
     if(mysqli_num_rows($data)== 0)
     {
         echo ' No music has been added yet.';
     }
     ?>
    </div>
    <!-- End Section hindi -->

    <!-- old Section songs -->
    <h1 class="title">oldies</h1>

    <div class="pad">
        <?php
             $query = "Select * from audios where Genre='Hindi'";
             $data = mysqli_query($con, $query);
             while ($row = mysqli_fetch_assoc($data)) {
                 $sname = $row['song'];
                 $artist = $row['artist'];
                 $img = $row['image'];
     
             ?>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo $img ?>" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <h2 class="music-title">
                        <?php echo $sname ?>
                    </h2>
                    <p>
                        <?php echo $artist ?>
                    </p>
                    <a href="player.php?s_id=<?= $row['id'] ?>"><i class="fa fa-play fa-3x"
                            style="text-decoration:none;color:white;"></i></a>
                </div>

            </div>

        </div>
        <?php
         }
         if(mysqli_num_rows($data)== 0)
         {
             echo ' No music has been added yet.';
         }
         ?>
    </div>
    <!-- End Section oldies -->

    <?php require_once('../includes/footer.php')?>