<?php
include('dbconnection.php');
$notify = '';
$check = getimagesize($_FILES["image"]["tmp_name"]);
if (isset($_POST['add'])) {
    $pcategory = mysqli_real_escape_string($db, $_POST['category']);
    $pname = mysqli_real_escape_string($db, $_POST['product']);
    $pmodel = mysqli_real_escape_string($db, $_POST['model']);
    $pcost = mysqli_real_escape_string($db, $_POST['cost']);
    if ($pcategory == 'Motors') {
        if ($check !== false) {
            /** @var TYPE_NAME $upload_image */
            $upload_image = $_FILES['image']['name'];
            //$upload_image = mt_rand(1000000000, 9999999999) . $upload_image;
            $upload_tmp = $_FILES['image']['tmp_name'];
            $upload_type = $_FILES['image']['type'];
            $file_size = $_FILES['image']['size'];
            $upload_image = preg_replace("#[^a-z0-9.]#i", "", $upload_image);

            $image = $errors = '0';

            $path = "documents/$upload_image";
            move_uploaded_file($upload_tmp, $path);
//            $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//            $image = addslashes($_FILES["image"]["tmp_name"]);
//            $image_product = base64_decode($image);

            $motorssql = "INSERT INTO store (category,Product,Model,Cost,image) VALUES ('$pcategory','$pname','$pmodel','$pcost','$path')";
            $sqlm = "INSERT INTO motor (category,Product,Model,Cost,image) VALUES ('$pcategory','$pname','$pmodel','$pcost','$path')";
            mysqli_query($db, $motorssql);
            mysqli_query($db, $sqlm);
            $notify = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('New Product','Successfully added new product','success');";
            echo '}, 100);</script>';
        } else {
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Form Validation','Please Select Image','error');";
            echo '}, 100);</script>';
        }
    } else if ($pcategory == 'Sport Wear') {
        if ($check !== false) {
            /** @var TYPE_NAME $upload_image */
            $upload_image = $_FILES['image']['name'];
            //$upload_image = mt_rand(1000000000, 9999999999) . $upload_image;
            $upload_tmp = $_FILES['image']['tmp_name'];
            $upload_type = $_FILES['image']['type'];
            $file_size = $_FILES['image']['size'];
            $upload_image = preg_replace("#[^a-z0-9.]#i", "", $upload_image);

            $image = $errors = '0';

            $path = "documents/$upload_image";
            move_uploaded_file($upload_tmp, $path);
//            $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//            $image = addslashes($_FILES["image"]["tmp_name"]);
//            $image_product = base64_decode($image);

            $ssql = "INSERT INTO store (category,Product,Model,Cost,image) VALUES ('$pcategory','$pname','$pmodel','$pcost','$path')";
            $sqls = "INSERT INTO sport (category,Product,Model,Cost,image) VALUES ('$pcategory','$pname','$pmodel','$pcost','$path')";
            mysqli_query($db, $ssql);
            mysqli_query($db, $sqls);
            $notify = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('New Product','Successfully added new product','success');";
            echo '}, 100);</script>';
        } else {
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Form Validation','Please Select Image','error');";
            echo '}, 100);</script>';
        }
    } else if ($pcategory == 'Fashion') {
        if ($check !== false) {
            /** @var TYPE_NAME $upload_image */
            $upload_image = $_FILES['image']['name'];
            //$upload_image = mt_rand(1000000000, 9999999999) . $upload_image;
            $upload_tmp = $_FILES['image']['tmp_name'];
            $upload_type = $_FILES['image']['type'];
            $file_size = $_FILES['image']['size'];
            $upload_image = preg_replace("#[^a-z0-9.]#i", "", $upload_image);

            $image = $errors = '0';

            $path = "documents/$upload_image";
            move_uploaded_file($upload_tmp, $path);
//            $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//            $image = addslashes($_FILES["image"]["tmp_name"]);
//            $image_product = base64_decode($image);

            $fsql = "INSERT INTO store (category,Product,Model,Cost,image) VALUES ('$pcategory','$pname','$pmodel','$pcost','$path')";
            $sqlf = "INSERT INTO fashion (category,Product,Model,Cost,image) VALUES ('$pcategory','$pname','$pmodel','$pcost','$path')";
            mysqli_query($db, $fsql);
            mysqli_query($db, $sqlf);
            $notify = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('New Product','Successfully added new product','success');";
            echo '}, 100);</script>';
        } else {
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Form Validation','Please Select Image','error');";
            echo '}, 100);</script>';
        }
    } else if ($pcategory == 'Electronic') {
        if ($check !== false) {
            /** @var TYPE_NAME $upload_image */
            $upload_image = $_FILES['image']['name'];
            //$upload_image = mt_rand(1000000000, 9999999999) . $upload_image;
            $upload_tmp = $_FILES['image']['tmp_name'];
            $upload_type = $_FILES['image']['type'];
            $file_size = $_FILES['image']['size'];
            $upload_image = preg_replace("#[^a-z0-9.]#i", "", $upload_image);

            $image = $errors = '0';

            $path = "documents/$upload_image";
            move_uploaded_file($upload_tmp, $path);
//            $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//            $image = addslashes($_FILES["image"]["tmp_name"]);
//            $image_product = base64_decode($image);

            $esql = "INSERT INTO store (category,Product,Model,Cost,image) VALUES ('$pcategory','$pname','$pmodel','$pcost','$path')";
            $sqle = "INSERT INTO electronic (category.Product,Model,Cost,image) VALUES ('$pcategory','$pname','$pmodel','$pcost','$path')";
            mysqli_query($db, $sqle);
            mysqli_query($db, $esql);
            $notify = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('New Product','Successfully added new product','success');";
            echo '}, 100);</script>';
        } else {
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Form Validation','Please Select Image','error');";
            echo '}, 100);</script>';
        }
    }
}
?>