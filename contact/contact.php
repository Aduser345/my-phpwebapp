<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../menu.css" />
     <!-- Stylesheet -->
     <link rel="stylesheet" href="../style1.css">
     <!--link href="<?php echo $themeStyleSheet; ?>" rel="stylesheet" id="theme-link"-->
 
     <link id="theme-link" rel="stylesheet" type="text/css" href="../theme/light-theme.css" />
     
     
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: url("23.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        * {
            box-sizing: border-box;
            width: 55vw;
        }

        input[type=text],
        select,
        textarea {
            width: 96%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #000000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100px;
        }

        input[type=submit]:hover {
            background-color: #131313;
        }

        .contain {
            margin-left: 38%;
            border-radius: 5px;
            background-color: #030303b2;
            padding: 20px;
        }

        ::placeholder {
            font-family: sans-serif;
        }
    </style>
</head>

<body><br>
    <div class="menu-wrap">
        <input type="checkbox" class="toggler" />
        <div class="hamburger"><div></div></div>
        <div class="menu">
          <div>
            <ul>
              <li><a href="../Home.php">Home</a></li>
              <li><a href="../game.php">Gaming</a></li>
              <li><a href="../music.php">Music</a></li>
              <li><a href="../video/display.php">Videos</a></li>
              <li><a href="../about/index.php">About Us</a></li>
              <li><a href="../contact/contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    <h3 style="padding-left:25vw;color:white;font-size: 30px; text-align: center;">Please feel free to share...</h3>
    

    <div class="contain">
        <form action="contact1.php" method="POST" enctype="multipart/form-data">
            <label for="fname" style="color: white;">Name</label>
            <input type="text" id="fname" name="Name" placeholder="Your name..">

            <label for="lname" style="color: white;">Email</label>
            <input type="text" id="lname" name="Email" placeholder="E-mail">

            <label for="country" style="color: white;">Country</label>
            <select id="country" name="Country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="usa">India</option>
                <option value="usa">Africa</option>
                <option value="usa">Japan</option>
                <option value="usa">UAE</option>
                <option value="usa">Russia</option>
            </select>

            <label for="subject" style="color: white;">Review</label>
            <textarea id="subject" name="Review" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit" name="upload">
        </form><br><br><br>
    </div>


</body>

</html>