<?php
include('dbconnection.php');
session_start(); // Starting Session
// Storing Session
$user_check = $_SESSION['ecustomer'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($db, "select * from register where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$ecustomer_session = $row['username'];
$cname = $row['Fname'];
$customerimage = $row['image'];
if (!isset($ecustomer_session)) {
    mysqli_close($db); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
}