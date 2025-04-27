<!DOCTYPE html>
<html>

<head>
    <title>Videos - Divergent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style1.css">
    <!--link href="<?php echo $themeStyleSheet; ?>" rel="stylesheet" id="theme-link"-->

    <link id="theme-link" rel="stylesheet" type="text/css" href="../theme/light-theme.css" />
    <link rel="stylesheet" href="../menu.css" />
    <!-- <style>
        
    </style> -->
</head>
q
<body>
    <?php require_once('../includes/login.php');?>
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
                   
                        <?php require_once('../includes/music_navbar.php')?>
                    </nav>
                    
                </div>
            </div>
        </div>
    </header>  
    
    <div class="pd">
    <div class="ten">
        <h2 class="htwo">Trending</h2>
    </div>
        <div class="section">
            <?php
            require_once('../includes/db.php');
            $query = "Select * from videos where Category='Trending'";
            $data = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($data)) {
                $vid = $row['url'];
                $tilt = $row['Title'];
                $gory = $row['Category'];
            ?>
                <div class="crd">
                    <div class="vi">                   
                    <!--iframe align="center" style="padding:10px;" width="200px" height="150px" src="<?php echo $vid; ?>" frameborder="yes" scrolling="yes" name="myIframe" id="myIframe"> </iframe-->
                    <iframe allowfullscreen="" style="width: 100%;height: 80%;" data-thumbnail-src="<?php echo $vid; ?>" frameborder="0" src="<?php echo $vid; ?>">
                    </iframe>
                    </div>
                    <div>
                    <h3 class="hone"><?php echo $tilt ?></h3>                    
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="pd">
    <div class="ten">
        <h2 class="htwo">Dance</h2>
    </div>
        <div class="section">
            <?php
            require_once('../includes/db.php');
            $query = "Select * from videos where Category='Dance'";
            $data = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($data)) {
                $vid = $row['url'];
                $tilt = $row['Title'];
                $gory = $row['Category'];
            ?>
                <div class="crd">
                    <div class="vi">                   
                    <!--iframe align="center" style="padding:10px;" width="200px" height="150px" src="<?php echo $vid; ?>" frameborder="yes" scrolling="yes" name="myIframe" id="myIframe"> </iframe-->
                    <iframe allowfullscreen="" style="width: 100%;height: 80%;" data-thumbnail-src="<?php echo $vid; ?>" frameborder="0" src="<?php echo $vid; ?>">
                    </iframe>
                    </div>
                    <div>
                    <h3 class="hone"><?php echo $tilt ?></h3>                    
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="pd">
    <div class="ten">
        <h2 class="htwo">Food</h2>
    </div>
        <div class="section">
            <?php
            require_once('../includes/db.php');
            $query = "Select * from videos where Category='Food'";
            $data = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($data)) {
                $vid = $row['url'];
                $tilt = $row['Title'];
                $gory = $row['Category'];
            ?>
                <div class="crd">
                    <div class="vi">                   
                    <!--iframe align="center" style="padding:10px;" width="200px" height="150px" src="<?php echo $vid; ?>" frameborder="yes" scrolling="yes" name="myIframe" id="myIframe"> </iframe-->
                    <iframe allowfullscreen="" style="width: 100%;height: 80%;" data-thumbnail-src="<?php echo $vid; ?>" frameborder="0" src="<?php echo $vid; ?>">
                    </iframe>
                    </div>
                    <div>
                    <h3 class="hone"><?php echo $tilt ?></h3>                    
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    
<?php require_once('../includes/footer.php')?>