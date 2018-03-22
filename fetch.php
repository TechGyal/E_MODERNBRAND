<?php
include('dbconnection.php');
$output = '';
$sql = "SELECT * From store WHERE Product LIKE '%" . $_POST["search"] . "%' || Model LIKE '%" . $_POST["search"] . "%' || Product LIKE '%" . $_POST["search"] . "%'|| Cost LIKE '%" . $_POST["search"] . "%'|| category LIKE '%" . $_POST["search"] . "%'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    $output .= '<h4 align="center">THE E_MODERNBRAND PRODUCTS</h4>';
    $output .= '<div class="row">

                </div>';
    $btn_name = '';
    while ($row = mysqli_fetch_array($result)) {
        $btn_name = $row['serial'];
        $showcomplition1 = "<button type='submit' class='btn btn-dark btn-md btncart' name='addtocart'>Add <span class='glyphicon glyphicon-shopping-cart'></span></button>";
        $output .= '
 <div class="col-md-3">
    <form role="form" class="horizontal-form lwrite2" method="post" action="store.php?action=add&id=' . $row["serial"] . '"> 
    <h5 class="text-center text-muted text-uppercase">E_MODERNBRAND ' . $row["category"] . '</h5>
    <h4 class="text-center"> <img src="' . $row["image"] . '" class="img-responsive img-thumbnail loadedimage aligncenter mydesign"></h4>
         <p class="text-center">' . $row["Product"] . '</p>
         <p class="text-center">' . $row["Model"] . '</p>
         <p class="text-center"><b class="text-muted">KES</b> ' . $row["Cost"] . ' </p>
         <input type="number" class="form-control lwrite" name="quantity" placeholder="Enter Quantity" value="1" autocomplete="off"/>
         <input type="hidden" class="form-control lwrite2" name="hiddenserial" value="' . $row["serial"] . '"/>
         <input type="hidden" class="form-control lwrite2" name="hiddenprice" value="' . $row["Cost"] . '"/>
         <input type="hidden" class="form-control lwrite2" name="hidden_product" value="' . $row["Product"] . '"/>
         <h4 class="text-center">' . $showcomplition1 . '</h4>
    </form>
  </div>';
    }
    echo $output;
} else {
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
    echo "<h1 class='text-center text-danger'>The Product Is Missing</h1>";
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
}
mysqli_close($db); // Closing Connection
?>