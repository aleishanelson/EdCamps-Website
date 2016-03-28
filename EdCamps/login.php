<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Login</title>

    <link href="css/login.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <!-- Collect the nav links, forms, and other content for toggling -->
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
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/92.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                      
			<br/>
<br/>
<br/>
                        <span class="subheading"> </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	    <h3> Login Here </h3>
               <p>Login with your email to view the full list of classes your child is signed up for and their camp schedule.  </p>
            
            </div>
        </div>
    </div>

    <hr>
<div class="container">
  <div class="loginFormContainer">
<!--<form action="php/viewStudents.php" method="post">
       
            <p><u>Parent Information</u></p>
            <label for="firstname">First Name* </label><input type="text" id="firstname" name="firstname" tabindex="1" size="10"/>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="lastname">Last Name* </label><input type="text" id="lastname" name="lastname" tabindex="2" size="10" />
            &nbsp;&nbsp;&nbsp;&nbsp;
<br/>
<br/>
 <label for="email">Email* </label><input type="text" id="email" name="email" tabindex="8" size="15" />
            &nbsp;&nbsp;&nbsp;&nbsp;
<br/>
  <input id="submit" type="submit" tabindex="16" />
</form>
-->

<form action="php/viewStudents.php" method="post">

            <h4>Member Login
            </h4>
            <input type="text" placeholder=" First Name" id="firstname" name="firstname" tabindex="1" size="25"/>
            <br/>
   <br/>


            <input type="text" placeholder=" Last Name" id="lastname" name="lastname" tabindex="2" size="25" />
           
        <br/>

<br/>

        <input type="text" placeholder=" Email Address" id="email" name="email" tabindex="8" size="25" />
            
        <br/>

<br/>

  <input id="submit" value="Submit" type="submit" tabindex="16" />
<br/>
<br/>

</form>

</div>
</div>





    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <a href="index.html">
                    <img class="img-responsive img-center" src="img/Logo.jpg" alt="Locations Map" style="height:100px;width:100px;margin:auto;"> 
                    <p style="color:darkgray;font-size:8pt;text-align:center;"> Image by Aleisha Nelson </p>
                </a>    
                <p style="font-size:8pt;color:darkgray;text-align:center;"> Header Image from designmodo.com<p>
                        
                <p class="copyright text-muted">Copyright &copy; Aleisha Nelson, John Roof, & Gabe Christ - COEN 161 Final Project - 2016</p>
                </div>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
