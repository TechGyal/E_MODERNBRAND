<?php
include('dbconnection.php');
session_start(); // Starting Session
$error = '';
$error2 = '';
$notify2 = '';
if (isset($_POST['adminlogin'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {

    } else {
// Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        $password = md5($password); //hash password before fetching it
        $query = mysqli_query($db, "select username,password from admin where password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['eadmin'] = $username; // Initializing Session
            header("Location: welcome.php"); // Redirecting To Other Page
        } else {
            $error = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Login Validation','Wrong Entries Please Check And Try Again','error');";
            echo '}, 100);</script>';
        }
        mysqli_close($db); // Closing Connection
    }
} else if (isset($_POST['userlogin'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {

    } else {
// Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        $password = md5($password); //hash password before fetching it
        $query = mysqli_query($db, "select username,password from register where password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['ecustomer'] = $username; // Initializing Session
            header("Location: index2.php"); // Redirecting To Other Page
        } else {
            $error2 = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Login Validation','Wrong Entries Please Check And Try Again','error');";
            echo '}, 100);</script>';
        }
        mysqli_close($db); // Closing Connection
    }
}