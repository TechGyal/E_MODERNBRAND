<?php
include('login.php');
if (isset($_SESSION['ecustomer'])) {
    header("Location: index2.php");
}
include('register.php');
?>
<html>
<head>
    <?php
    require 'headerFile.php';
    ?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid dark">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle lwrite2" data-toggle="collapse" data-target="#myNavbar">
                        <!--                        <span class="icon-bar"></span>-->
                        <!--                        <span class="icon-bar"></span>-->
                        <!--                        <span class="icon-bar"></span>-->
                        <!--                        <span class="icon-bar"></span>-->
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-responsive"
                                                                  id="logoimage"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--home-->
<div class="container-fluid defaultimage2">
    <div class="row dark">
        <div class="col-md-2">

        </div>
        <div class="col-md-4 brand2 mydesign">
            <div class="caption">
                <h3 class="text-center text-uppercase">SIGN UP</h3>
                <form role="form" class="horizontal-form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group input-group aligncenter">
                        <label class="btn btn-dark btn-file lwrite btechbutton">
                            <img src="img/profile2.png" class="img img-circle img-responsive aligncenter">
                            Profile Image<input type="file" style="display: none;" required="required"
                                                name="image" id="image">
                        </label>
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-user input-group-addon mydesign"></span>
                        <input type="text" class="form-control lwrite" placeholder="Full Names" autocomplete="off"
                               required="required" name="Fname">
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-phone input-group-addon mydesign"></span>
                        <input type="text" class="form-control lwrite" placeholder="Phone Number" autocomplete="off"
                               required="required" name="phoneNumber">
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-user input-group-addon mydesign"></span>
                        <input type="text" class="form-control lwrite" placeholder="Username" autocomplete="off"
                               required="required" name="username">
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-envelope input-group-addon mydesign"></span>
                        <input type="email" class="form-control lwrite" placeholder="Email Address" autocomplete="off"
                               required="required" name="email">
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-lock input-group-addon mydesign"></span>
                        <input type="password" class="form-control lwrite" placeholder="Password" autocomplete="off"
                               required="required" name="password">
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-lock input-group-addon mydesign"></span>
                        <input type="password" class="form-control lwrite" placeholder="Confirm Password"
                               autocomplete="off"
                               required="required" name="password2">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-md btn-dark btnmine"
                               name="signup" value="SIGN UP">
                    </div>
                </form>
                <p class="text-center text-uppercase text-danger"><?php echo $notify2; ?></p>
                <p class="text-center text-uppercase text-success"><?php echo $notify; ?></p>
            </div>
        </div>

        <div class=" col-md-1">

        </div>

        <div class="col-md-4 aligncenter">
            <div class="caption brand3">
                <h1 class="text-center"><img src="img/logo.png" class="img-responsive aligncenter"></h1>
                <h4 class="text-center text-uppercase">CUSTOMER LOGIN</h4>
                <form role="form" class="horizontal-form adminlogin" method="post" action="">
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-user input-group-addon mydesign"></span>
                        <input type="text" class="form-control lwrite" placeholder="Username" autocomplete="off"
                               required="required" name="username">
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-eye-open input-group-addon mydesign"></span>
                        <input type="password" class="form-control lwrite" placeholder="Password" autocomplete="off"
                               required="required" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-md btn-dark btnmine" name="userlogin">
                            <span class="glyphicon glyphicon-log-in"></span> SIGN IN
                        </button>
                    </div>
                    <p class="text-center text-uppercase text-danger"><?php echo $error2; ?></p>
                </form>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </div>

        <div class="col-md-1">

        </div>
    </div>
</div>

<!--Footer-->
<div class="footer Footerimage">
    <div class="container-fluid" id="contact">
        <div class="row  dark2">
            <div class="col-md-4 text-center">
                <h4 class="defaultborder text-center text-muted">Social Media</h4>
                <div class="col-md-2">
                    &nbsp;
                </div>
                <div class="col-md-2">
                    <a href="#"><img src="img/facebookIcon.jpg" class="img-responsive img-circle"></a>
                </div>
                <div class="col-md-2">
                    <a href="#"><img src="img/googlePlusIcon.jpg" class="img-responsive img-circle"></a>
                </div>
                <div class="col-md-2">
                    <a href="#"><img src="img/linkedinIcon.jpg" class="img-responsive img-circle"></a>
                </div>
                <div class="col-md-2">
                    <a href="#"><img src="img/twitterIcon.jpg" class="img-responsive img-circle"></a>
                </div>
            </div>
            <div class="col-md-2">
                <h4 class="defaultborder text-center text-muted">E-MODERNBRAND</h4>
                <h5><a href="index.php" class="defaultlink pull-right">HOME</a></h5>
            </div>
            <div class="col-md-6">
                <h4 class="defaultborder text-center text-muted">Partners</h4>
                <div class="col-md-3">
                    <a href="#"><img src="img/logo.png" class="img-responsive img-thumbnail img4"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="img/logo.ico" class="img-responsive img-thumbnail img4"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="img/Techno Science 20170911_091025.jpg"
                                     class="img-responsive img-thumbnail img4"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="img/tecksol2.png" class="img-responsive img-thumbnail img4"></a>
                </div>
            </div>
        </div>
        <div class="row dark2">
            <div class="col-md-4">
                <hr/>
                <p class="text-center text-muted">&copy; CopyRight 2017</p>
                <hr/>
            </div>
            <div class="col-md-4">
                <h1 class="text-center"><img src="img/logo.png"></h1>
            </div>
            <div class="col-md-4">
                <hr/>
                <p class="text-center text-muted">&rightsquigarrow; All Rights Reserved For E-MODERNBRAND</p>
                <hr/>
            </div>
        </div>
    </div>
</div>
<?php
require 'scriptFile.php';
?>
</body>
</html>
