<?php
include('dbconnection.php');
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
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu drop">
                                <li><a href="#motors">Motors</a></li>
                                <li><a href="#fashion">Fashion</a></li>
                                <li><a href="#electronics">Electronics</a></li>
                                <li><a href="#sport">Sports wear</a></li>
                            </ul>
                        </li>
                        <li><a href="#contactus">Contact Us</a></li>
                        <li><a href="userlogin.php">SHOP<span class="glyphicon glyphicon-shopping-cart"></a></li>
                        <li><a href="userlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--home-->
<div class="container-fluid defaultimage">
    <div class="row dark">
        <div id="miCarousel" class="carousel slide dark" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#miCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#miCarousel" data-slide-to="1"></li>
                <li data-target="#miCarousel" data-slide-to="2"></li>
                <li data-target="#miCarousel" data-slide-to="3"></li>
                <li data-target="#miCarousel" data-slide-to="4"></li>
                <li data-target="#miCarousel" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/motor8.jpg" alt="LaFerrari"
                         class="img-responsive img-transparency homesize">
                    <div class="carousel-caption dark cbrand">
                        <h6 class="text-uppercase text-center">Mega Cars</h6>
                        <h1 class="text-center"><a href="#motors" class="btn btn-dark btn-lg btechbutton">SHOP NOW</a>
                        </h1>
                        <p class="text-muted">Horsepower sells cars but torque power wins races</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/motor7.jpg" alt="GTR" class="img-responsive img-transparency homesize">
                    <div class="carousel-caption dark cbrand">
                        <h6 class="text-uppercase text-center">Super Cars</h6>
                        <h1 class="text-center"><a href="#motors" class="btn btn-dark btn-lg btechbutton">SHOP NOW</a>
                        </h1>
                        <p class="text-muted">Horsepower sells cars but torque power wins races</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/e.jpg" alt="hp"
                         class="img-responsive img-transparency homesize">
                    <div class="carousel-caption dark cbrand">
                        <h6 class="text-center text-uppercase">Electronics</h6>
                        <h1 class="text-center"><a href="#electronics" class="btn btn-dark btn-lg btechbutton">SHOP
                                NOW</a>
                            <p class="text-muted">Technology pour change</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/e%20(1).jpg" alt="hp"
                         class="img-responsive img-transparency homesize">
                    <div class="carousel-caption dark cbrand">
                        <h6 class="text-center text-uppercase">Electronics</h6>
                        <h1 class="text-center"><a href="#electronics" class="btn btn-dark btn-lg btechbutton">SHOP
                                NOW</a>
                            <p class="text-muted">Technology pour change</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/fashion%20(2).jpg" alt="hp"
                         class="img-responsive img-transparency homesize">
                    <div class="carousel-caption dark cbrand">
                        <h6 class="text-center text-uppercase">Fashion</h6>
                        <h1 class="text-center"><a href="#fashion" class="btn btn-dark btn-lg btechbutton">SHOP NOW</a>
                            <p class="text-muted">My Dress My Choice</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/sport%20(6).jpg" alt="hp"
                         class="img-responsive img-transparency homesize">
                    <div class="carousel-caption dark cbrand">
                        <h6 class="text-center text-uppercase">Sport Wear</h6>
                        <h1 class="text-center"><a href="#sport" class="btn btn-dark btn-lg btechbutton">SHOP NOW</a>
                            <p class="text-muted">Sports Today's Life</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#miCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#miCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!--products-->
<div class="container-fluid productsimage">
    <div class="row dark" id="products">
        <div class="jumbotron dark">
            <h2 class="text-center text-muted">OUR PRODUCTS</h2>
        </div>
    </div>
    <div class="row dark">
        <div class="col-md-6" id="motors">
            <h3 class="text-center motorborder">MOTOR</h3>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/motor.jpg" alt="LaFerrari"
                             class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">

                            <h4>Motor Features</h4>
                            <h6>Model :Ferrari LaFerrari</h6>
                            <h6>Horse Power :950</h6>
                            <h6>Torque Power :209</h6>
                            <h6>Cost :30,000,000KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg motorbtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Horsepower sells cars but torque power wins races</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/motor2.jpg" alt="LaFerrari"
                             class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">

                            <h4>Motor Features</h4>
                            <h6>Model :Nissan GTR</h6>
                            <h6>Horse Power :900</h6>
                            <h6>Torque Power :200</h6>
                            <h6>Cost :20,000,000KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg motorbtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Horsepower sells cars but torque power wins races</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-6" id="electronics">
            <h3 class="text-center electroborder">ELECTRONIC</h3>
            <div id="mCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mCarousel" data-slide-to="1"></li>
                    <li data-target="#mCarousel" data-slide-to="2"></li>
                    <li data-target="#mCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/e%20(1).jpg" alt="hp"
                             class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">
                            <h4>Electronic Features</h4>
                            <h6>Model :HP Pavilion</h6>
                            <h6>Batery Power :2000mA</h6>
                            <h6>Cost :40,000KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg electrobtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Technology pour change</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/services.jpg" alt="hp" class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">
                            <h4>Electronic Features</h4>
                            <h6>Model :HTC Desire</h6>
                            <h6>Batery Power :2000mA</h6>
                            <h6>Cost :16,000KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg electrobtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Technology pour change</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#mCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row dark">
        <div class="col-md-6" id="sport">
            <h3 class="text-center sportsborder">SPORT WEAR</h3>
            <div id="sCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#sCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#sCarousel" data-slide-to="1"></li>
                    <li data-target="#sCarousel" data-slide-to="2"></li>
                    <li data-target="#sCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/sport%20(3).jpg" alt="hp"
                             class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">
                            <h4>Sport Wear</h4>
                            <h6>Model :HP Pavilion</h6>
                            <h6>Batery Power :2000mA</h6>
                            <h6>Cost :40,000KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg sportsbtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Technology pour change</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/sport%20(5).jpg" alt="hp" class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">
                            <h4>Sport Wear</h4>
                            <h6>Model :HP Pavilion</h6>
                            <h6>Batery Power :2000mA</h6>
                            <h6>Cost :40,000KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg sportsbtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Technology pour change</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#sCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#sCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-6" id="fashion">
            <h3 class="text-center fashionborder">FASHION</h3>
            <div id="yCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#yCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#yCarousel" data-slide-to="1"></li>
                    <li data-target="#yCarousel" data-slide-to="2"></li>
                    <li data-target="#yCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/fashiontech%20(1).jpeg" alt="fashion"
                             class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">
                            <h4>Fashion Features</h4>
                            <h6>Cost :3,000KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg fashionbtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Horsepower sells cars but torque power wins races</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/fashiontech%20(15).jpg" alt="fashion"
                             class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">
                            <h4>Fashion Features</h4>
                            <h6>Cost :4,500KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg fashionbtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Horsepower sells cars but torque power wins races</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/fashion%20(5).jpg" alt="fashion" class="img-responsive img-thumbnail defaultsize">
                        <div class="carousel-caption dark">
                            <h4>Fashion Features</h4>
                            <h6>Cost :5,000KSH</h6>
                            <a href="userlogin.php" class="btn btn-dark btn-lg fashionbtn"><span
                                        class="glyphicon glyphicon-shopping-cart"></span></a>
                            <p class="text-info">Horsepower sells cars but torque power wins races</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#yCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#yCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--contact us-->
<div class="container-fluid conatctimage">
    <div class="row dark" id="contactus">
        <div class="jumbotron dark">
            <h2 class="text-center text-muted">CONTACT US</h2>
        </div>
    </div>

    <div class="row dark">
        <div class="col-md-6">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <a href="#"><h2 class="text-center text-uppercase" title="Find Our Location" id="mylocation"><span
                            class="glyphicon glyphicon-map-marker"></span></h2>
            </a>
        </div>
        <div class="col-md-5">
            <h3 class="text-center text-uppercase">CUSTOMER FEEDBACK</h3>
            <form role="form" class="horizontal-form adminlogin" method="post" action="">
                <div class="form-group input-group">
                    <span class="glyphicon glyphicon-user input-group-addon mydesign"></span>
                    <input type="text" class="form-control mydesign" placeholder="Username"
                           required="required" name="username">
                </div>
                <div class="form-group input-group">
                    <span class="glyphicon glyphicon-envelope input-group-addon mydesign"></span>
                    <input type="email" class="form-control mydesign" placeholder="Email Address"
                           required="required" name="email">
                </div>
                <div class="form-group">
                    <textarea class="form-control mydesign" rows="10" name="skills" required
                              placeholder="Write Your FeedBack Here"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-md btn-dark btnmine"
                           name="studentlogin" value="SUBMIT FEEDBACK">
                </div>
            </form>
        </div>
        <div class="col-md-1">

        </div>
    </div>
</div>

<!--Footer-->
<div class="footer Footerimage">
    <div class="container-fluid">
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
                <br/>
                <h5><a href="#motors" class="defaultlink pull-right">MOTORS</a></h5>
                <br/>
                <h5><a href="#electronics" class="defaultlink pull-right">ELECTRONICS</a></h5>
                <br/>
                <h5><a href="#fashion" class="defaultlink pull-right">FASHION</a></h5>
                <br/>
                <h5><a href="#sport" class="defaultlink pull-right">SPORTS WEAR</a></h5>
                <br/>
                <h5><a href="#contactus" class="defaultlink pull-right">CONTACT US</a></h5>
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