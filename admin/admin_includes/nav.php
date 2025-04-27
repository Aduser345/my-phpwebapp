<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">DIVERGENT</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <li><a href="../Home.php">View Home Site</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 
                            if(isset($_SESSION['db_user_name']))
                                {
                                    echo $_SESSION['db_user_name'];
                                }?></a>                    
                </li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>    
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-copy"></i> Posts<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>                            
                                <a href="./posts.php"><i class="fa fa-fw fa-eye"></i>View All Posts</a>
                            </li>
                            <li>                             
                            <a href="./posts.php?opt=add_post"><i class="fa fa-fw fa-plus"></i>Add Article Post</a>
                            </li>                                                       
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#games"><i class="fa fa-fw fa-gamepad"></i> Games<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="games" class="collapse">
                            <li>                           
                                <a href="./games.php"><i class="fa fa-fw fa-eye"></i>View All Games</a>
                            </li>                            
                            <li>                                
                                <a href="./games.php?opt=add_game"><i class="fa fa-fw fa-plus"></i>Add Game Post</a>
                            </li>                                                       
                        </ul>
                    </li>
                    <li>
                        <a href="./comments.php"><i class="fa fa-wrench"></i> View Comments</a>
                         
                    <li>
                        <a href="./categories.php"><i class="fa fa-fw fa-desktop"></i> Categories</a>
                    </li>                  
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#video"><i class="fa fa-play"></i>&nbsp; Videos<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="video" class="collapse">
                            <li>
                                <a href="./video.php">View Added Videos</a>
                            </li>
                            <li>
                                <a href="./video.php?opt=add_video">Add New Video</a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#music"><i class="fa fa-music"></i>&nbsp; Music<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="music" class="collapse">
                            <li>
                                <a href="./music.php">View Added Music</a>
                            </li>
                            <li>
                                <a href="./music.php?opt=add_music">Add New Music</a>
                            </li>
                        </ul>
                    </li> 
                    <?php 
                            if(isset($_SESSION['db_user_role']))
                            {
                                if($_SESSION['db_user_role'] === 'Admin')
                                {

                             ?>                                 
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            
                            <li>
                                <a href="./users.php">View Users</a>
                            </li>
                            <li>
                                <a href="users.php?opt=add_user">Add New Users</a>
                            </li>                           
                        </ul>
                    </li>
                    <?php
                               }
                            }
                            ?>
                    <li class="active">
                        <a href="blank-page.php"><i class="fa fa-user"></i>&nbsp; Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
