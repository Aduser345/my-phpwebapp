<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Divergent</title>

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
    <!-- Page Content -->
    <?php
    if(isset($_GET['value']))
    {
        $page = $_GET['value'];
        $cat_name = $_GET['catname'];
        if($page=='game')
        {
       
        echo'<!-- ##### Breadcrumb Area Start ##### -->
            <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(images/bg-img/27.jpg);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Breadcrumb Text -->
                                <div class="col-12">
                                    <div class="breadcrumb-text">
                                        <h2>'.$cat_name.'</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- ##### Breadcrumb Area End ##### -->';
            require_once('game.php');
        }
        else
        {
        echo'<!-- ##### Breadcrumb Area Start ##### -->
            <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(images/bg-img/27.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Breadcrumb Text -->
                        <div class="col-12">
                            <div class="breadcrumb-text">
                                <h2>Articles</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Breadcrumb Area End ##### -->';
            require_once('article.php');
        }
    }
    ?>
    
        <!-- Footer -->
<?php require_once "includes/footer.php"?>

 