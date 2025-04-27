<?php require_once ('./admin_includes/header.php')?>;
<?php require_once ('./admin_includes/nav.php')?>;

<body>

    <div id="wrapper">

        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Games</small>
                        </h1>
                     <?php
                     
                        if(isset($_GET['opt']))
                        {
                            $opt = $_GET['opt'];
                        }
                        else
                        {
                            $opt = '';
                        }

                        switch($opt)
                        {                            
                            case 'add_game':
                                require_once('admin_includes/add_game_post.php');
                            break;
                            case 'edit_game':
                                require_once('admin_includes/edit_game.php');
                            break;
                            case 'games':
                                
                            break;  
                            default:
                                require_once('admin_includes/view_games.php');
                            break;                                                        
                        }

                     ?>                                          
                    </div>
                </div>
                <!-- /.row -->
                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php require_once ('./admin_includes/footer.php')?>;           