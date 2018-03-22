<?php
include('cart.php');
$Carttable = str_replace(' ', '', $ecustomer_session);//strip to one name
session_start();
if (session_destroy()) // Destroying All Sessions
{
    $sql = "DROP TABLE $Carttable";
    mysqli_query($db, $sql);
//    $sql2 = "delete from customercart WHERE customer = '$Carttable'";
//    mysqli_query($db, $sql2);
    header("Location: index.php"); // Redirecting To Home Page
    mysqli_close($db);
}