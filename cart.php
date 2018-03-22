<?php
include('dbconnection.php');
include('customersession.php');
$quantity = '';
$total = '';
$namefound = '';
$costfound = '';
$totalcart = 0;
$quantitycart = 0;
$Carttable = str_replace(' ', '', $ecustomer_session);//strip to one name
if (isset($_POST['addtocart'])) {
    $id = $_POST['hiddenserial'];
    $quantity = $_POST['quantity'];
    $sql = "select * from store where serial='$id'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $namefound = $row['Product'];
            $costfound = $row['Cost'];
        }
        $total = $quantity * $costfound;
        // echo "<script> alert('Total' + ''+ $total);</script>";
        $sqlcart = ("CREATE TABLE $Carttable(
    ID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(ID),
    Product VARCHAR(100),
    Cost DOUBLE ,
    Quantity DOUBLE ,
    Total DOUBLE)");
        //create table
        mysqli_query($db, $sqlcart);
        //insert into table
        $insertssql = "INSERT INTO $Carttable (Product,Cost,Quantity,Total) VALUES ('$namefound','$costfound','$quantity','$total')";
        mysqli_query($db, $insertssql);
        //get total quantity

        $sqlquantity = "SELECT SUM(Quantity) PQuantity FROM  $Carttable";
        $resultquantity = mysqli_query($db, $sqlquantity);
        if (mysqli_num_rows($resultquantity) > 0) {
            while ($rowcart = mysqli_fetch_array($resultquantity)) {
                $quantitycart = $rowcart['PQuantity'];
            }
            // echo "<script> alert($quantitycart);</script>";
        }
        $sqltotal = "SELECT SUM(Total) PTotal FROM  $Carttable";
        $resulttotal = mysqli_query($db, $sqltotal);
        if (mysqli_num_rows($resulttotal) > 0) {
            while ($rowtotal = mysqli_fetch_array($resulttotal)) {
                $totalcart = $rowtotal['PTotal'];
            }
            // echo "<script> alert($quantitycart);</script>";
        }
    } else {
        $showcomplition3 = "<a href='store.php'><button class='btn btn-dark btn-md btnmine'>shop <span class='glyphicon glyphicon-shopping-cart'></span></button></a>";
        echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
        echo "<h1 class='text-center text-danger text-uppercase'>$showcomplition3</h1>";
        echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
    }
}
echo "<link rel=\"shortcut icon\" type=\"image/jpg\" href=\"img/logo.png\">";
//get total and quantity

$sqltotal = "SELECT SUM(Total) PTotal FROM  $Carttable";
$resulttotal = mysqli_query($db, $sqltotal);
if ($resulttotal == true) {
    if (mysqli_num_rows($resulttotal) > 0) {
        while ($rowtotal = mysqli_fetch_array($resulttotal)) {
            $totalcart = $rowtotal['PTotal'];
        }
        // echo "<script> alert($quantitycart);</script>";
    } else {

    }
} else {

}
$sqlquantity = "SELECT SUM(Quantity) PQuantity FROM  $Carttable";
$resultquantity = mysqli_query($db, $sqlquantity);
if ($resultquantity == true) {
    if (mysqli_num_rows($resultquantity) > 0) {
        while ($rowcart = mysqli_fetch_array($resultquantity)) {
            $quantitycart = $rowcart['PQuantity'];
        }
        // echo "<script> alert($quantitycart);</script>";
    } else {

    }
} else {

}