<?php
session_start();  // Start the session to manage session variables
?>
<html>

<head>
  <title>
    Divergent
  </title>
  <link rel="stylesheet" href="home.css" />
  <link rel="stylesheet" href="menu.css" />

  <link rel="stylesheet" href="main.css" />
</head>

<body>
  <!-- Video Source -->
  <!-- https://www.pexels.com/video/aerial-view-of-beautiful-resort-2169880/ -->
  <section class="showcase">
    <header>
      <h2 class="logo" q>DIVERGENT</h2>
      <?php
                require_once('./includes/login.php');
                if(isset($_SESSION['db_user_name']))
                {
                    $name_login = $_SESSION['db_user_name'];                         
                    echo'<a class="logname"> Hi, '.$name_login.'</a>';                    
                }
                else
                {
                  echo'<button class="btnlog" onclick="openForm()" id="btn-log">Login</button>';
                }
        ?>
      <div class="menu-wrap">
        <input type="checkbox" class="toggler" />
        <div class="hamburger">
          <div></div>
        </div>
        <div class="menu">
          <div>
            <ul>
              <li>
                <h2 class="logo">DIVERGENT</h2>
              </li>
              <?php
            if(isset($_SESSION['db_user_name']))
            {
                $name_role = $_SESSION['db_user_role'];
                if($name_role == 'Admin'|| $name_role == 'Sub-Admin')
                {                                  
                  echo'<li><a class="logname"> Hi, '.$name_login.'</a></li>
                  <li><a href="./includes/logout.php"><i class="fa fa-fw fa-power-off"></i>Log Out</a></li>
                  <li><a href="admin" style="text-indent: 4px;"><i class="fa fa-fw fa-cog"></i>Admin</a></li>';  
                }
                else
                {
                  echo'<a> Hi, '.$name_login.'</a>
                  <li><a href="./includes/logout.php">&nbsp;&nbsp;<i class="fa fa-fw fa-power-off"></i>Log Out</a></li>';
                }
            }
            ?>
              <li><a href="play/music.php">Music</a></li>
              <li><a href="video/display.php">Videos</a></li>
              <li><a href="game.php">Gaming</a></li>
              <li><a href="about/index.php">About Us</a></li>
              <li><a href="contact/contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <video src="1.mp4" muted loop autoplay></video>
    <div class="text" id="tx">
      <h2 class="h2">Never Stop To </h2>
      <h3>Exploring The World</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      <a href="#" class="exp">Explore</a>
    </div>
    <div class="container" id="login">

      <!-- Sign Up -->

      <div class="container__form container--signup">
        <form action="./includes/signup.php" class="form" method="POST">
          <h2 class="form__title">Sign Up</h2>
          <input type="text" name="user_password" placeholder="Name" class="input" />
          <input type="text" name="name" placeholder="User Name" class="input" />
          <input type="password" name="pass" placeholder="Password" class="input" />
          <input type="password" name="conf" placeholder="Confirm Password" class="input" />
          <button type="submit" class="btn" name="signup">Sign Up</button>
        </form>
      </div>

      <!-- Sign In -->
      <div class="container__form container--signin">

        <form action="./includes/login.php" class="form" method="POST">
          <h2 class="form__title">Sign In</h4>
            <input type="text" name="username" class="input" placeholder="User Name">
            <input type="password" name="password" class="input" placeholder="Password">
            <a href="#" class="link">Forgot your password?</a>
            <button type="submit" class="btn" name="btn-login">Login</button>

        </form>
      </div>

      <!-- Overlay -->
      <div class="container__overlay">

        <div class="overlay">
          <div class="overlay__panel overlay--left">
            <button class="btn" id="signIn">Sign In</button>
          </div>
          <div class="overlay__panel overlay--right">
            <button class="btn" id="signUp">Sign Up</button>
          </div>
        </div>

      </div>



    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <script src="js/Login.js"></script>
  <script>
    function openForm() {
      document.getElementById("login").style.display = "block";
      document.getElementById("btn-log").style.display = "none";
      document.getElementById("tx").style.display = "none";
    }

    function closeForm() {
      document.getElementById("login").style.display = "none";
      document.getElementById("tx").style.display = "block";
      document.getElementById("btn-log").style.display = "block";
    }
  </script>
</body>

</html>