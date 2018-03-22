<?php
include('dbconnection.php');
$output = '';
$sql = "SELECT * From customercart WHERE Product LIKE '%" . $_POST["search"] . "%' || Cost LIKE '%" . $_POST["search"] . "%'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    $output .= '<h4 align="center">Sold Products</h4>';
    $output .= '<div class="table-responsive mydesign">
                <table class="table table bordered"
                <tr>
                    <th class="text-muted text-uppercase">Product Name</th>
                    <th class="text-muted text-uppercase">Cost <b>[<i class="text-muted">KSH</i>]</b></th>
                    <th class="text-muted text-uppercase">Quantity Sold</th>
                    <th class="text-muted text-uppercase">Total Cost  <b>[<i class="text-muted">KSH</i>]</b></th>
                </tr>';
    $btn_name = '';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
            <tr>
                <td>' . $row["Product"] . '</td>
                <td>' . $row["Cost"] . ' </td>
                <td>' . $row["Quantity"] . '</td>
                <td>' . $row["Total"] . '</td>
                ';
    }
    echo $output;

} else {
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
    echo "<h1 class='text-center text-danger'>No Sold Items</h1>";
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
}

mysqli_close($db); // Closing Connection
?>