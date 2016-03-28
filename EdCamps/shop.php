<?php
    session_start(); //start the php session before writing the HTML
?>
<?php 
    include("php/inventory.php");
   // include("php/viewCart.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EdCamps Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--  <link href="css/shop.css" rel="stylesheet">  -->

    <!--Custom Fonts-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
  function registerHandlers(){
    document.getElementById("addToCartTee").onclick = function(){ 
	alert("EdCamps Tee has been added to your cart!");
    }

    document.getElementById("addToCartJSBook").onclick = function(){ 
	alert("JavaScript textbook has been added to your cart!");
    }

    document.getElementById("addToCartBackpack").onclick = function(){ 
	alert("EdCamps Backpack has been added to your cart!");
    }

    document.getElementById("addToCartWaterbottle").onclick = function(){ 
	alert("EdCamps Waterbottle has been added to your cart!");
    }

    document.getElementById("addToCartWebProgBook").onclick = function(){ 
	alert("Intro to Web Programming textbook has been added to your cart!");
    }
  }
</script>
</head>

<body onload="registerHandlers()">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
<li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="post.html">Sample Activities</a>
                    </li>
                    <li>
                        <a href="forum_page.php">Reviews</a>  
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header-->
<header class="intro-header" style="background-image: url('img/shop.gif')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                       
<br/><br/><br/>
<br/><br/><br/>
<br/><br/><br/>
                        <span class="subheading"> </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <hr>
    

<!--page content-->



    <!-- /.container -->

    <div class="container">
	    <h2 style="text-align:center;font-size:40pt;"> EdCamps Shop</h2>
      <hr>
            <p>Shop our camp products so that you can arrive at camp well-prepared! We seel various textbooks and classroom materials at discounted prices, as well as apparel and accessories so that you can show off your EdCamps spirit! </p>
            <hr>
            </div>


        <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">


    <!--Beginning of shop products-->

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="img/edcampsTee.jpg" alt="EdCamps Tee">
                    <div class="caption">
                        <h4 class="pull-right">$14.99</h4>
                        <h4>EdCamps T-Shirt</h4>
                        <hr>
                        <p>Show off that you were an EdCamps Inc. participant with this fun tee! One size fits all.</p>
                        <p style="font-size:10px;">Image by Aleisha Nelson</p>
                         <!--Add to cart button-->
                                <ul class="pager">
                                    <li id="addToCartTee" class="next">
                                         <a method="post" href="php/cart.php?add=tee">Add to Cart &rarr;</a>
                                    </li>
                                </ul>
                     </div>
                    </div>
                </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/JSbook.jpg" alt="JS Textbook">
                            <div class="caption">
                                <h4 class="pull-right">$34.99</h4>
                                <h4>Intro to JavaScript</h4>
                                <hr>
                                <p>This textbook is essential for learning the basics to JavaScript. Follow this step-by-step guide to create your very own Javascript game! 4th Ed.</p>
                                <p style="font-size:10px;">Image from newscred.com</p>
                                 <!--Add to cart button-->
                                <ul class="pager">
                                    <li id="addToCartJSBook" class="next">
                                         <a href="php/cart.php?add=js">Add to Cart &rarr;</a>
                                    </li>
                             </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/backpack1.jpg" alt="EdCamps Backpack">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4>EdCamps Backpack</h4>
                                <hr>
                                <p>Keep all of your camping essentials in one place with this trendy backpack! Great for bringing materials with you to class. </p>
                                <p style="font-size:10px;">Image from iconfinder.com</p>
                                 <!--Add to cart button-->
                                <ul class="pager">
                                    <li id="addToCartBackpack" class="next">
                                         <a href="php/cart.php?add=bp">Add to Cart &rarr;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/waterbottle.jpg" alt="EdCamps Waterbottle">
                            <div class="caption">
                                <h4 class="pull-right">$12.99</h4>
                                <h4>EdCamps Waterbottle</h4>
                                <hr>
                                <p>Always stay hydrated! Purchase this EdCamps waterbottle and personalize it with stickers that you can find in our camp store onsite!</p>
                                <p style="font-size:10px;">Image from sustainability.ncsu.edu</p>
                                 <!--Add to cart button-->
                                <ul class="pager">
                                    <li id="addToCartWaterbottle" class="next">
                                         <a href="php/cart.php?add=bottle">Add to Cart &rarr;</a>
                                         <!--link above^ viewCart.php?add=$key-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/webProgBook.jpg" alt="Web Programming Textbook">
                            <div class="caption">
                                <h4 class="pull-right">$34.99</h4>
                                <h4>Intro to Web Programming</h4>
                                <hr>
                                <p>This textbook is essential for learning the basics to web programming. 5th Ed.</p>
                                <p style="font-size:10px;">Image from digitalsynopsis.com</p>
                                
                                <!--Add to cart button-->
                                <ul class="pager">
                                    <li id="addToCartWebProgBook" class="next">
                                         <a href="php/cart.php?add=web">Add to Cart &rarr;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4>Ready to checkout?</h4>
                        <p></p>

                        <a class="btn btn-primary" target="_blank" href="php/cart.php?show">View Shopping Cart</a>
                        <p> </p>
                        <a class="btn btn-primary" target="_blank" href="php/cart.php?checkout">Checkout</a>
                        <p>

                        Don't like what you see? <a href="php/cart.php?clear">empty your cart</a> and start over!
                        </p>
                    </div>

                </div>
            </div><p style="font-size:8pt;color:darkgray;text-align:center;">Header Image from dribble.com</p>
        </div>
    </div>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
		    <a href="index.html">
                    <img class="img-responsive img-center" src="img/Logo.jpg" alt="Locations Map" style="height:100px;width:100px;margin:auto;"> 
                    <p style="color:darkgray;font-size:8pt;text-align:center;"> Image by Aleisha Nelson </p>
		    </a>  
                    <p style="color:lightgray;font-size:8pt;text-align:center;"> Header gif from iconfinder/com/Dribbble-Digital-Icon-Pack-animated-gif-by-Seth-Eckert.gif</p>
                    <p class="copyright text-muted">Copyright &copy; Aleisha Nelson, John Roof, & Gabe Christ - COEN 161 Final Project - 2016</p>
                </div>

<br/>

<div style="margin:auto;width:100%;text-align:center;">
<ul style="font-size:10pt;list-style-type:disc;text-decoration:underline;">
             
<li style="display:inline;padding-right:20px;">
                        <a href="index.html">Home</a>
                    </li>
<li style="display:inline;padding-right:20px;">
                        <a href="login.php">Login</a>
                    </li>
                    <li style="display:inline;padding-right:20px;" >
                        <a href="register.php">Register</a>
                    </li>
                    <li style="display:inline;padding-right:20px;">
                        <a href="shop.php">Shop</a>
                    </li>
                    <li style="display:inline;padding-right:20px;">
                        <a href="post.html">Sample Activities</a>
                    </li>
                    <li style="display:inline;padding-right:20px;" >
                        <a href="forum_page.php">Reviews</a>  
                    </li>
                    <li style="display:inline;padding-right:20px;" >
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
</div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>