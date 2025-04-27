<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ob_start();  // Start output buffering
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// if (isset($_SESSION['db_user_name'])) {
//     session_destroy();
// }
require_once ('db.php');
$ref      = @$_GET['q'];
$_SESSION["key"]      = '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39';
if(isset($_POST['btn-login']))
{
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $Username = mysqli_real_escape_string($con,$Username);
    $Password = mysqli_real_escape_string($con,$Password);

    $query = "select * from users where user_name='$Username'";
    $data = mysqli_query($con,$query);

    // $user_role = null;

    // $db_Firstname = '';
    // $db_Password = '';
    // $db_Username = '';

    while($row = mysqli_fetch_assoc($data))
    {
        echo "query row: " . $row;
        $db_user_ID = $row['user_id'];
        $db_Username = $row['user_name'];
        $db_Password = $row['user_password'];
        $db_Firstname = $row['first_name'];
                        
        $user_email = $row['user_email'];
        $user_role = $row['user_role'];        
    }
    if (empty($db_Username)) {
        echo "User not found"; // Just to see if the user exists in the DB
        exit; // Stop script execution if no user is found
    }
    if($user_role === 'Admin' && $Password === $db_Password)
    {
        $_SESSION['db_user_name'] = $db_Firstname;
        $_SESSION['db_user_role'] = $user_role;
        $_SESSION['db_name'] = $db_Firstname;
        
        header("location: ../admin");
        exit;
    }
    elseif($user_role === 'Sub-Admin' && $Password === $db_Password)
    {
        $_SESSION['db_user_name'] = $db_Firstname;
        $_SESSION['db_user_role'] = $user_role;
        $_SESSION['db_name'] = $db_Firstname;
        header("location: ../admin");
        exit;
    }
    elseif($user_role === 'User' && $Password === $db_Password)
    {
        $_SESSION['db_user_name'] = $db_Firstname;
        echo "Session User: " . $_SESSION['db_user_name'];
        $_SESSION['db_user_role'] = $user_role;
        $_SESSION['db_name'] = $db_Firstname;
        header("Location: ../Home.php");
        exit;
    }
    else
    {
        echo "Invalid credentials or user role";  // Debugging output for incorrect login
        header("Location: ../Home.php");  // Redirect on failure
        exit;  // Prevent further code execution
    }
}

?>