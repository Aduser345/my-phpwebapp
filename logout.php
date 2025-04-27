<?php
session_start();
if (isset($_SESSION['db_user_name'])) {
    session_destroy();
}
$ref = @$_GET['q'];
header("location: Home.php");
?>