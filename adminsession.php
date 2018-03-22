<?php

include ('dbconnection.php');
session_start(); // Starting Session
// Storing Session
$user_check = $_SESSION['eadmin'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($db, "select username from admin where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$eadmin_session = $row['username'];
if (!isset($eadmin_session)) {
    mysqli_close($db); // Closing Connection
    header('Location: adminlogin.php'); // Redirecting To Home Page
}
