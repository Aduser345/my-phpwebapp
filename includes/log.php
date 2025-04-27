<?php require_once('db.php');?>
  <head>
    <title>Login</title>
    <link rel="Stylesheet" href="main.css"  />
    
  </head>
  <section class="showcase">
  <video src="../1.mp4" muted loop autoplay></video>
  

  <div class="container">
    <!-- Sign Up -->
    
    <div class="container__form container--signup">
      <form action="#" class="form" id="form1" method="POST">
        <h2 class="form__title">Sign Up</h2>
        <input type="text" placeholder="User" class="input" />
        <input type="email" placeholder="Email" class="input" />
        <input type="password" placeholder="Password" class="input" />
        <button class="btn" name="btn-login">Sign Up</button>
      </form>
    </div>

    <!-- Sign In -->
          <div class="container__form container--signin">
            
            <form action="./login.php" class="form" method="POST">
                
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
  </section>
<script src="../js/Login.js"></script>


