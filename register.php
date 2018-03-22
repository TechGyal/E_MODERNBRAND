<?php
include('dbconnection.php');
$notify = '';
$notify2 = '';
if (isset($_POST['signup'])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $fname = mysqli_real_escape_string($db, $_POST['Fname']);
    $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneNumber']);
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    $Email = mysqli_real_escape_string($db, $_POST['email']);
    $pass1 = mysqli_real_escape_string($db, $_POST['password']);
    $pass2 = mysqli_real_escape_string($db, $_POST['password2']);
    if ($check !== false) {
        /** @var TYPE_NAME $upload_image */
        $upload_image = $_FILES['image']['name'];
        //$upload_image = mt_rand(1000000000, 9999999999) . $upload_image;
        $upload_tmp = $_FILES['image']['tmp_name'];
        $upload_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $upload_image = preg_replace("#[^a-z0-9.]#i", "", $upload_image);

        $image = $errors = '0';

        $path = "profile/$upload_image";
        move_uploaded_file($upload_tmp, $path);

        if ($pass1 != $pass2) {
            $notify2 = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Form Validation','Password Do Not Match','error');";
            echo '}, 100);</script>';
        } else {
            $pass1 = md5($pass1); //hash password before storing it.
            $sql = "INSERT INTO register VALUES ('$path','$fname','$phoneNumber','$uname','$Email','$pass1')";
            $validate = mysqli_query($db, $sql);

            if ($validate == true) {
                $notify = "Hello $uname you have been Successfully registered\nProceed to Login";
                echo '<script type="text/javascript">';
                echo "setTimeout(function () { swal('Account Notification','Hello $uname you have been Successfully registered\nProceed to Login   ','success');";
                echo '}, 100);</script>';
            } else {
                $notify2 = "Registration Failed\nPlease try again.";
                echo '<script type="text/javascript">';
                echo "setTimeout(function () { swal('Account Notification','Registration Failed\nPlease try again.','error');";
                echo '}, 100);</script>';
            }

//        header("location: userlogin.php"); // Redirecting To Other Page
        }
       // mysqli_close($db); // Closing Connection
    } else {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Form Validation','Please Select Image','error');";
        echo '}, 100);</script>';
    }
}
