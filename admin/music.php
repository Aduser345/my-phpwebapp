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
                            <small>Music</small>
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
                            case 'add_music':
                                require_once('admin_includes/add_music.php');
                            break;
                            case 'edit_music':
                                require_once('admin_includes/edit_music.php');
                            break;
                            default:
                                require_once('admin_includes/view_music.php');
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