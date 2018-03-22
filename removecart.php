<?php
include('dbconnection.php');
include('cart.php');
$Carttable = str_replace(' ', '', $ecustomer_session);//strip to one name
if (isset($_POST['removecart'])) {
    $idcart = $_POST['hiddenid'];
    $sql = "delete from  $Carttable WHERE ID =  $idcart";
    mysqli_query($db, $sql);
//    $sql2 = "delete from customercart WHERE customer = '$Carttable'";
//    mysqli_query($db, $sql2);
    mysqli_close($db);

    header("Location: customercart.php"); // Redirecting To Other Page
//    echo "<script> alert($idcart);</script>";
}