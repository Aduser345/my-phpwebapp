<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Music Player</title>
  <!-- Load FontAwesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <!-- Load the custom CSS style file -->
  <link rel="stylesheet" type="text/css" href="Ps.css">
</head>
<?php
require_once('../includes/db.php');
if (isset($_GET['s_id'])) {
  $s_id = $_GET['s_id'];
  $query = "Select * from audios where id='$s_id'";
  $data = mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($data)) {
    $array[] = $row;
  }
  foreach ($array as $array) {
    $path = $array['filename'];
    $artist = $array['artist'];
    $name = $array['song'];
    $image = $array['image'];
  }
?>

  <body <?php echo 'style="background-image: url(' . $image . ');"' ?>>
    <div class="player">
      <div class="details">
        <div class="now-playing">PLAYING x OF y</div>
        <div class="track-art"></div>
        <div class="track-name">Track Name</div>
        <div class="track-artist">Track Artist</div>
      </div>
      <div class="buttons">
        <div class="prev-track" onclick="prevTrack()"><i class="fa fa-step-backward fa-2x"></i></div>
        <div class="playpause-track" onclick="playpauseTrack()"><i class="fa fa-play-circle fa-5x"></i></div>
        <div class="next-track" onclick="nextTrack()"><i class="fa fa-step-forward fa-2x"></i></div>
      </div>
      <div class="slider_container">
        <div class="current-time">00:00</div>
        <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
        <div class="total-duration">00:00</div>
      </div>
      <div class="slider_container">
        <i class="fa fa-volume-down"></i>
        <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
        <i class="fa fa-volume-up"></i>
      </div>
    </div>
  <?php
}
  ?>
  <!-- Load the main script for the player -->
  <script>
    // Define the tracks that have to be played
    let track_list = [{
        name: "<?php echo $name; ?>",
        artist: "<?php echo $artist; ?>",
        image: "<?php echo $image; ?>",
        path: "<?php echo $path; ?>"
      }

    ];
  </script>
  <script src="main.js"></script>
  </body>

</html>