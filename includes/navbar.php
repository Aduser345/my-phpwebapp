<nav class="classy-navbar justify-content-between" id="egamesNav">


<div class="classy-navbar-toggler">
    <span class="navbarToggler"><span></span><span></span><span></span></span>
</div>
<!-- Menu -->
<div class="classy-menu">

      <!-- Close Button -->
      <div class="classycloseIcon">
         <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
      </div>

    <!-- Nav Start -->
    <div class="classynav">
        <ul>
            <li><a class="logo">DIVERGENT</a></li>
            <li><a href="../game.php">Home</a></li>
            <li><a>Games</a>
                <ul class="dropdown">
                <?php
                require_once('db.php');
                            $query = "SELECT * from categories where cat_sub='Game'";
                            $result =mysqli_query($con,$query);

                            while($row = mysqli_fetch_assoc($result))
                            {
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo" <li>
                                        <a href='category.php?value=game&category={$cat_id}&catname={$cat_title}'>{$cat_title}</a>
                                        </li>";
                            } 
                            ?>                    
                </ul>
            </li>                                    
            <li><a>Articles</a>
                <ul class="dropdown">
                <?php
                require_once('db.php');
                            $query = "SELECT * from categories where cat_sub!='Game'";
                            $result =mysqli_query($con,$query);

                            while($row = mysqli_fetch_assoc($result))
                            {
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo" <li>
                                        <a href='category.php?value=article&category={$cat_id};'>{$cat_title}</a>
                                        </li>";
                            } 
                            ?>      
                </ul>
            </li>                             
            <li><?php
                require_once('login.php');
                if(isset($_SESSION['db_user_name']))
                {
                    $name_login = $_SESSION['db_user_name'];
                    $name_role = $_SESSION['db_user_role'];
                    if($name_role == 'Admin'|| $name_role == 'Sub-Admin'){
                                             
                    echo'<a> Hi, '.$name_login.'</a><ul class="dropdown" >
                    <li><a href="./includes/logout.php">&nbsp;&nbsp;<i class="fa fa-fw fa-power-off"></i>Log Out</a></li><li><a href="../admin" style="text-indent: 4px;"><i class="fa fa-fw fa-cog"></i> Admin</a></li></ul>';  
                }
                else{
                    echo'<a> Hi, '.$name_login.'</a><ul class="dropdown">
                    <li><a href="./includes/logout.php">&nbsp;&nbsp;<i class="fa fa-fw fa-power-off"></i> Log Out</a></li></ul>';
                }
                                        
                }
                else
                {
                echo'<a href="./includes/log.php">Login</a>';
                }
                ?>                                    
            </li>                                                                          
            <li></li>                
            <li><label class="switch">
            <!--For changing theme , id needs to be specified-->
            <input type="checkbox" class="btn-toggle" id="theme-toggle" aria-label="Dark Mode">
            <span class="slider round"></span>
            </label>
            </li>
    </ul>
    </div>
    
</div>
    <!-- Nav End -->

                          <div class="menu-wrap">
                            <input type="checkbox" class="toggler" />
                            <div class="hamburger"><div></div></div>
                            <div class="menu">
                              <div>
                                <ul>
                                  <li><a href="./Home.php">Home</a></li>
                                  <li><a href="./game.php">Gaming</a></li>
                                  <li><a href="../play/music.php">Music</a></li>
                                  <li><a href="../video/display.php">Videos</a></li>
                                  <li><a href="about/index.php">About Us</a></li>
                                  <li><a href="contact/contact.php">Contact Us</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>