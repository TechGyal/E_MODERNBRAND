<?php
include('dbconnection.php');
include ('cart.php');
$Carttable = str_replace(' ', '', $ecustomer_session);//strip to one name
if (isset($_POST['pay'])) {

    $sql = "SELECT * From  $Carttable";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $namecart = $row['Product'];
            $costcart = $row['Cost'];
            $quantitycart = $row['Quantity'];
            $totalcart = $row['Total'];

            $customercartssql = "INSERT INTO customercart (customer,Product,Cost,Quantity,Total) VALUES ('$Carttable','$namecart','$costcart','$quantitycart','$totalcart')";
            mysqli_query($db, $customercartssql);
        }
        $sql5 = "DROP TABLE $Carttable";
        mysqli_query($db, $sql5);
        header("Location: thanku.php"); // Redirecting To Home Page
    }
    mysqli_close($db);
}