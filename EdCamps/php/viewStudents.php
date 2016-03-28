<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Login Successful!</title>


    <!-- Bootstrap Core CSS -->
    <link href="/~gchrist/EdCamps/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/~gchrist/EdCamps/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	
	<link href="~gchrist/EdCamps/css/suclogin.css" rel="stylesheet">

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
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/~gchrist/EdCamps/index.html">Home</a>
                    </li>
                    <li>
                        <a href="/~gchrist/EdCamps/login.php">Login</a>
                    </li>
                    <li>
                        <a href="/~gchrist/EdCamps/register.php">Register</a>
                    </li>
                    <li>
                        <a href="/~gchrist/EdCamps/shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="/~gchrist/EdCamps/post.html">Sample Activities</a>
                    </li>
                    <li>
                        <a href="/~gchrist/EdCamps/forum_page.php">Reviews</a>  
                    </li>
                    <li>
                        <a href="/~gchrist/EdCamps/contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/~gchrist/EdCamps/img/sLogin.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div style="margin-bottom:50px;margin-top:50px;" class="page-heading">

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
              
               
                







                <div id="classSched">



                        <!--Insert Gabe and Jack's class schedule code here-->
			<?php
   ini_set('display_errors','On');
   error_reporting(E_ALL);

   $db_host = "dbserver.engr.scu.edu";
   $db_user = "gchrist";
   $db_pass = "00001011346";
   $db_name = "sdb_gchrist";

   //create connection to MySQL
   $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

   $flag = false;
   $flag2 = false;
    $count = 0;

   //check connection
   if(mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_errno();
   }

   //get content from database
   $sql = "SELECT * FROM register";
   $result = $con->query($sql);

 

   //search through emails in database
   while($row = mysqli_fetch_assoc($result)){
		if($row['email'] == $_POST['email'] && $row['pfirstname'] == $_POST['firstname'] && $row['plastname'] == $_POST['lastname']){
			if($flag == false){
			    echo " <h3 style='text-align:center;margin:auto;'>Congrats! You have successfully logged In!</h3><br />";

			    echo "<p style='text-align:center;margin:auto;'> You can view your camper's complete schedule below. </p>
				  <hr>

				    <h3 style='text-align:center;margin:auto;'> Your EdCamps Schedule </h3> 
				    <hr>";
			    
			    echo "<table id='scheduleTable' border='2' cellpadding='10' style='text-align:center'>
			    <tr>
			    <th style='text-align:center'>Student Enrolled</th>
			     <th style='text-align:center'>Class</th>
			      <th style='text-align:center'>Dates</th>
			      <th style='text-align:center'>Location</th>
			      <th style='text-align:center'>Price</th>
				  </tr>";

				$flag2 = true;
			}
			
			$flag = true;
			  
			echo "<tr>";
			echo "<td>" . $row['cfirstname'] . " " . $row['clastname'] . "</td>";
			
			if($row['classNum'] == "1"){
				echo "<td>" . "Introduction to Python" . "</td>";
				echo "<td>" . "June 13, 2016 - June 24, 2016" . "</td>";
				echo "<td>" . "Santa Clara, CA" . "</td>";
			}
			else if($row['classNum'] == "2"){
				echo "<td>" . "Learn to Surf" . "</td>";
				echo "<td>" . "June 20, 2016 - June 24, 2016" . "</td>";
				echo "<td>" . "Santa Cruz, CA" . "</td>";
			}
			else if($row['classNum'] == "3"){
				echo "<td>" . "Learn to Sail" . "</td>";
				echo "<td>" . "July 4, 2016 - July 8, 2016" . "</td>";
				echo "<td>" . "San Francisco, CA" . "</td>";
			}
			else if($row['classNum'] == "4"){
				echo "<td>" . "Introduction to App Design" . "</td>";
				echo "<td>" . "August 1, 2016 - August 5, 2016" . "</td>";
				echo "<td>" . "Los Angeles, CA" . "</td>";
			}
			else if($row['classNum'] == "5"){
				echo "<td>" . "Video Game Development" . "</td>";
				echo "<td>" . "July 25, 2016 - August 5, 2016" . "</td>";
				echo "<td>" . "Omaha, Nebraska" . "</td>";
			}
			else if($row['classNum'] == "6"){
				echo "<td>" . "Watersports Camp" . "</td>";
				echo "<td>" . "June 27, 2016 - July 1, 2016" . "</td>";
				echo "<td>" . "Maui, Hawaii" . "</td>";
			}
			else if($row['classNum'] == "7"){
				echo "<td>" . "Video Game Development" . "</td>";
				echo "<td>" . "July 25, 2016 - July 29, 2016" . "</td>";
				echo "<td>" . "Orlando, Florida" . "</td>";
			}
			else if($row['classNum'] == "8"){
				echo "<td>" . "Learn to Surf" . "</td>";
				echo "<td>" . "June 13, 2016 - June 17, 2016" . "</td>";
				echo "<td>" . "Providence, Rhode Island" . "</td>";
			}
			else if($row['classNum'] == "9"){
				echo "<td>" . "Introduction to Python" . "</td>";
				echo "<td>" . "August 8, 2016 - August 19, 2016" . "</td>";
				echo "<td>" . "Buffalo, New York" . "</td>";
			}
			else if($row['classNum'] == "10"){
				echo "<td>" . "Introduction to App Design" . "</td>";
				echo "<td>" . "July 18, 2016 - July 22, 2016" . "</td>";
				echo "<td>" . "Portland, Oregon" . "</td>";
			}

			echo "<td>" . $row['classPrice'] . "</td>";
			echo "</tr>";	

			$count++;
		}	
   }

   if($flag2 == true){
	   echo "</table>";
	}

    if($count == 0){
	echo "<h3 style='text-align:center;margin:auto;'>You have no children enrolled in our camps!</h3>" . "<br />" . "<p style='text-align:center;margin:auto;'><a href='/~gchrist/EdCamps/register.php' >" . "Register here!" . "</a></p>";
    }


	mysqli_close($con);
?>



                </div>

                <hr>

                   <p> Check out our <a href="/~gchrist/EdCamps/shop.php"> EdCamps shop</a> to make sure your child is well prepared before arriving to camp!</p>
                
               <img style="height:100px; width:100px;margin-left:20px;" src="/~gchrist/EdCamps/img/backpack1.jpg" alt="Backpack">
               <img style="height:100px;width:100px;float:left;margin-left:20px;" src="/~gchrist/EdCamps/img/java.jpg" alt="JS">
               <img style="height:100px;width:100px;float:left;margin-left:20px;" src="/~gchrist/EdCamps/img/textbook.jpg" alt="textbook">
               <img style="height:100px;width:100px;float:left;margin-left:20px;" src="/~gchrist/EdCamps/img/comp.jpg" alt="computer">
         

             <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="/~gchrist/EdCamps/shop.php">Shop Now &rarr;</a>
                    </li>
                </ul>

                <hr>
                <p>Want to register for another class? </p>


 <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="/~gchrist/EdCamps/register.php">Back to Classes &rarr;</a>
                    </li>
                </ul>


            </div>
        </div>
        <hr>
    </div>

    

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <a href="/~gchrist/EdCamps/index.html">
                    <img class="img-responsive img-center" src="/~gchrist/EdCamps/img/Logo.jpg" alt="Locations Map" style="height:100px;width:100px;margin:auto;"> 
                    <p style="color:darkgray;font-size:8pt;text-align:center;"> Image by Aleisha Nelson </p>
                </a>    
                <p style="font-size:8pt;color:darkgray;text-align:center;"> Header Image from designmodo.com<p>
                    <p style="font-size:8pt;color:darkgray;text-align:center;"> Shop Icons from community.mitchell.edu & www.iconfinder.com <p>
                        
                <p class="copyright text-muted">Copyright &copy; Aleisha Nelson, John Roof, & Gabe Christ - COEN 161 Final Project - 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/~gchrist/EdCamps/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/~gchrist/EdCamps/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/~gchrist/EdCamps/js/clean-blog.min.js"></script>

</body>

</html>

