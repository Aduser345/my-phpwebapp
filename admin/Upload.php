<?php
if (isset($_POST['save_audio']) && $_POST['save_audio'] == "Upload Audio") {
    $dir = 'Uploads/';
    $audio_path = $dir . basename($_FILES['audioFile']['name']);
    $art = $_POST['artist'];
    $sng = $_POST['song'];
    $pic = $dir . basename($_FILES['photo']['name']);

    if (move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $pic)) {
            echo 'Uploaded Successful.';
            SaveAudio($audio_path, $sng, $art, $pic);
            displayAudios();
        }
    }
}

function displayAudios()
{
    $conn = mysqli_connect('localhost', 'Aakash', 'root', 'audiolibdb');
    if (!$conn) {
        die('Sever not connected');
    }

    $query = "select * from audios";

    $r = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($r)) {
        echo '<a href="play.php?name=' . $row['filename'] . '">' . $row['filename'] . '</a>';
        echo "<br/>";
    }
    mysqli_close($conn);
}

function SaveAudio($fileName, $sng, $art, $pic)
{
    $conn = mysqli_connect('localhost', 'Aakash', 'root', 'audiolibdb');
    if (!$conn) {
        die('Sever not connected');
    }

    $query = "insert into audios(filename,song,artist,image)values('{$fileName}','{$sng}','{$art}','{$pic}')";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "audio file path saved in database.";
    }
    else
    {
        echo"Query Failed ". $conn -> error;
    }

    mysqli_close($conn);
}
