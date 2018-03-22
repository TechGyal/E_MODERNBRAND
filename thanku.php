<?php
include('customersession.php');
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
                    <a class="navbar-brand" href="index2.php"><img src="img/logo.png" class="img-responsive"
                                                                   id="logoimage"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logoutuser.php"><span class="glyphicon glyphicon-log-out"></span> LogOut </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--home-->
<div class="container-fluid storeimage">
    <div class="row dark">
        <div class="col-md-12">
            <div class="col-lg-1"></div>
            <div class="col-md-10 brand5 aligncenter mydesign">
                <h2 class="text-muted text-center text-uppercase">HELLO</h2>
                <h3 class="text-uppercase text-center text-info"><img
                            src="<?php echo $customerimage; ?>"
                            class="img img-responsive img-circle loadedimage2 aligncenter mydesign">
                </h3>
                <h3 class="text-uppercase text-center text-info" id="welcome"><b><i><-- <?php echo $cname; ?> --></i></b></h3>
                <h2 class="text-muted text-center text-uppercase">THANK YOU FOR SHOPPING WITH US</h2>
                <h2 class="text-muted text-center text-uppercase">YOUR ORDER WILL BE AVAILABLE TO YOU SOON</h2>
                <h4 class="text-muted text-center text-uppercase">For more information contact us through</h4>
                <h4 class="text-muted text-center text-uppercase"><span
                            class="glyphicon glyphicon-phone">+254-713255791</span></h4>
                <h4 class="text-center">
                    <a href="mailto:gridtechideal@gmail.com" class="text-muted"><span
                                class="glyphicon glyphicon-envelope"></span> Mail</a></h4>
                <h1 class="text-center"><a href='store.php' class='btn btn-dark btn-md btnmine'>shop more <span
                                class='glyphicon glyphicon-shopping-cart'></span></a></h1>
            </div>
            <div class="col-lg-1"></div>
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
