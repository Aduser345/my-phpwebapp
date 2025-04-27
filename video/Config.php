<?php
if (isset($_POST['upload']) && $_POST['upload'] == "Submit") {

    $vid = $_POST['url'];
    $til = $_POST['Title'];
    $cat = $_POST['Category'];


    Savevideo($vid, $til, $cat);
}

function Savevideo($vid, $til, $cat)
{
    $conn = mysqli_connect('localhost', 'user', '123', 'cms');
    if (!$conn) {
        die('Sever not connected');
    }

    $query = "insert into videos(url,Title,Category)values('{$vid}','{$til}','{$cat}')";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "Your url Has been Saved";
    }

    mysqli_close($conn);
}
