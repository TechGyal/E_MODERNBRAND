<?php
include('dbconnection.php');
include('pay.php');
$Carttable = str_replace(' ', '', $ecustomer_session);//strip to one name
$output = '';
$qfound = $quantitycart;
$sql = "SELECT * From  $Carttable";
$result = mysqli_query($db, $sql);
if ($result == true) {
    if (mysqli_num_rows($result) > 0) {
        $output .= '<h4 align="center">Ordered Products</h4>';
        $output .= '<div class="row table-responsive" xmlns="http://www.w3.org/1999/html">
      <table class="table table-responsive">
                </table>
                </div>';
        while ($row = mysqli_fetch_array($result)) {
            $showcomplition2 = "<button type='submit' class='btn btn-dark btn-md btnremove' name='removecart'><span class='glyphicon glyphicon-remove'></span></button>";
            $showcomplition3 = "<a href='store.php' class='btn btn-dark btn-md btnmine'>shop more <span class='glyphicon glyphicon-shopping-cart'></span></a>";
            $output .= '
    <form role="form" class="horizontal-form lwrite table-responsive"  method="post" action="customercart.php?action=add&id=' . $row["ID"] . '" > 
     <table class="table table-responsive">
   <tr class="form-group">
                <td>' . $row["Product"] . '</td>
                <td><b class="text-muted">KES</b> ' . $row["Cost"] . '</td>
                <td>' . $row["Quantity"] . '</td>
                <td><b class="text-muted">KES</b> ' . $row["Total"] . '</td>
                <td>' . $showcomplition3 . ' &nbsp; ' . $showcomplition2 . ' </td>
         <input type="hidden" class="form-control lwrite2" name="hiddenid" value="' . $row["ID"] . '"/>  
   </tr>
    </table>
   </form>';
        }
        $output .= '';
        $output .= '
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 lwrite2">
    <h3 class="text-muted text-uppercase text-center defaultborder">Your Cart</h3>
    <h4 class="text-center">Quantity &nbsp;&nbsp;&nbsp;&nbsp;' . $quantitycart . '</h4>
    <br/>
    <h4 class="text-center">Total Cash &nbsp;&nbsp;&nbsp;&nbsp; <b class="text-muted">KES</b> ' . $totalcart . '</h4>
    <p class="defaultborder"></p>
    <h1 class="text-center"><button class="btn btn-dark btn-md btnmine"  data-toggle="modal"
                           data-target="#modalcart"><span class="glyphicon glyphicon-bitcoin"></span>PAY</button></h1>
    </div>
    <div class="col-md-4">&nbsp;</div>
    
      <!-- Modal tech events -->
    <div class="modal fade" id="modalcart" role="dialog">
        <div class="modal-dialog modal-md storeimage">
            <div class="modal-content lwrite2">
                <div class="modal-header">
                    <button type="button" class="btn btn-dark btn-md btnremove pull-right" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span></button>
                    <h4 class="modal-title text-center gridcolor"><span class="glyphicon glyphicon-bitcoin"></span>PAYMENTS</h4>
                </div>
                <div class="modal-body">
                   <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 aligncenter">
                           <div class="form-group input-group">
                                <span class="glyphicon glyphicon-option-horizontal input-group-addon lwrite aligncenter"></span>
                                <button class="btn lwrite2 btn-dark btn-md" data-toggle="collapse" data-target="#pay1">VISA</button>
                                <button class="btn lwrite2 btn-dark btn-md" data-toggle="collapse" data-target="#pay2">PAY PAL</button>
                                <button class="btn lwrite2 btn-dark btn-md" data-toggle="collapse" data-target="#pay3">M-PESA</button>
                            </div>
                            
                         <form role="form" class="horizontal-form adminlogin" method="post" action="pay.php">
                              <div id="pay1" class="collapse collapsed">
                               <div class="form-group input-group">
                            <span class="glyphicon glyphicon-tower input-group-addon mydesign"></span>
                                <select name="location" class="form-control lwrite" required>
                                        <option value="Nairobi">Nairobi</option>
                                        <option value="Mombasa">Mombasa</option>
                                        <option value="Kisumu">Kisumu</option>
                                        <option value="Kisii">Kisii</option>
                                        <option value="Chuka">Chuka</option>
                                        <option value="Nakuru">Nakuru</option>
                                        <option value="Kericho">Kericho</option>
                                        <option value="Bomet">Bomet</option>
                                        <option value="Narok">Narok</option>
                                        <option value="Thika">Thika</option>
                                    </select>
                                </div>
                              <div class="form-group input-group">
                            <span class="glyphicon glyphicon-transfer input-group-addon mydesign"></span>
                            <input type="number" class="form-control lwrite" placeholder="Visa Card Number" autocomplete="off"
                               required="required" name="visa">
                               </div>
                                <div class="form-group input-group pull-right">
                               <button type="submit" class="form-control btn btn-md btn-dark btnmine" name="pay">
                            <span class="glyphicon glyphicon-transfer"></span> PROCEED
                            </button>
                            </div>
                            </div>
                            </form>
                            
                            <br/><br/><br/><br/>
                         <form role="form" class="horizontal-form adminlogin" method="post" action="pay.php">
                             <div id="pay2" class="collapse">
                                 <div class="form-group input-group">
                            <span class="glyphicon glyphicon-tower input-group-addon mydesign"></span>
                                    <select name="location" class="form-control lwrite" required>
                                        <option value="Nairobi">Nairobi</option>
                                        <option value="Mombasa">Mombasa</option>
                                        <option value="Kisumu">Kisumu</option>
                                        <option value="Kisii">Kisii</option>
                                        <option value="Chuka">Chuka</option>
                                        <option value="Nakuru">Nakuru</option>
                                        <option value="Kericho">Kericho</option>
                                        <option value="Bomet">Bomet</option>
                                        <option value="Narok">Narok</option>
                                        <option value="Thika">Thika</option>
                                    </select>
                                </div>
                              <div class="form-group input-group">
                            <span class="glyphicon glyphicon-transfer input-group-addon mydesign"></span>
                            <input type="number" class="form-control lwrite" placeholder="Pay Pal Number" autocomplete="off"
                               required="required" name="paypail">
                               </div>
                                <div class="form-group input-group pull-right">
                               <button type="submit" class="form-control btn btn-md btn-dark btnmine" name="pay">
                            <span class="glyphicon glyphicon-transfer"></span> PROCEED
                            </button>
                            </div>
                            </div>
                            </form>
                            
                            <br/><br/><br/><br/>
                         <form role="form" class="horizontal-form adminlogin" method="post" action="pay.php">
                             <div id="pay3" class="collapse">
                                 <div class="form-group input-group">
                            <span class="glyphicon glyphicon-tower input-group-addon mydesign"></span>
                                 <select name="location" class="form-control lwrite" required>
                                        <option value="Nairobi">Nairobi</option>
                                        <option value="Mombasa">Mombasa</option>
                                        <option value="Kisumu">Kisumu</option>
                                        <option value="Kisii">Kisii</option>
                                        <option value="Chuka">Chuka</option>
                                        <option value="Nakuru">Nakuru</option>
                                        <option value="Kericho">Kericho</option>
                                        <option value="Bomet">Bomet</option>
                                        <option value="Narok">Narok</option>
                                        <option value="Thika">Thika</option>
                                    </select>
                                </div>
                              <div class="form-group input-group">
                            <span class="glyphicon glyphicon-transfer input-group-addon mydesign"></span>
                            <input type="number" class="form-control lwrite" placeholder="Pay Bill Number" autocomplete="off"
                               required="required" name="mpesa">
                               </div>
                                <div class="form-group input-group pull-right">
                               <button type="submit" class="form-control btn btn-md btn-dark btnmine" name="pay">
                            <span class="glyphicon glyphicon-transfer"></span> PROCEED
                            </button>
                            </div>
                            </div>
                            </form>
                            </div>
                <div class="col-md-2"></div>
                </div>
                   
            </div>
            </div>
        </div>
    </div>
    
    
    </div>
    ';
        echo $output;
    } else {
        $showcomplition3 = "<a href='store.php'><button class='btn btn-dark btn-md btnmine' id='mylocation'>shop <span class='glyphicon glyphicon-shopping-cart'></span></button></a>";
        echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
        echo "<h1 class='text-center text-danger text-uppercase'>$showcomplition3</h1>";
        echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
    }
} else {

    $showcomplition3 = "<a href='store.php'><button class='btn btn-dark btn-md btnmine' id='mylocation'>shop <span class='glyphicon glyphicon-shopping-cart'></span></button></a>";
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
    echo "<h1 class='text-center text-danger text-uppercase'>$showcomplition3</h1>";
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
}
mysqli_close($db); // Closing Connection
?>