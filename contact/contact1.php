<?php
if (isset($_POST['upload']) && $_POST['upload'] == "Submit") {

    $nam = $_POST['Name'];
    $ema = $_POST['Email'];
    $cou = $_POST['Country'];
    $rev = $_POST['Review'];

    SaveAudio($nam, $ema, $cou, $rev);
}

function SaveAudio($nam, $ema, $cou, $rev)
{
    $conn = mysqli_connect('localhost', 'user', '123', 'cms');
    if (!$conn) {
        die('Sever not connected');
    }

    $query = "insert into contact(Name,Email,Country,Review)values('{$nam}','{$ema}','{$cou}','{$rev}')";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "Your Review Has been Saved";
    }

    mysqli_close($conn);
}
