<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!--Gabe's Style Sheet-->
    <link rel="stylesheet" href="css/register.css">

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
    
    <!-- styles for svg program -->
    <link rel="stylesheet" type="text/css" href="css/visual_rep.css">

    <script src="js/register.js"></script>   
</head>

<body onload="registerHandlers()">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">

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
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/register-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Register Today</h1>
                        
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
                <p>Browse our many classes below and sign up today to reserve your child a spot! We offer a variety of fun outdoor activities and technology classes tailored specifically towards your child's skill level. Here at EdCamps, we have classes fit for everyone.</p>
            <p>Having trouble choosing which class is right for your child? Click <a href="forum_page.php">here</a> to read previous campers' reviews!</p>
</div>
        </div>
    <hr>

   <div id="schedule">
      <h2>Classes Offered</h2>
      <table cellpadding="10px" class="table">
         <tr class="instructions">
            <th>Class #</th>
            <th>Class</th>
            <th>Dates</th>
            <th>Location</th>
            <th>Price</th>
            <th>Register</th>
         </tr>
         <tr>
            <td>1</td>
            <td>Introduction to Python</td>
            <td>June 13, 2016 - June 24, 2016</td>
            <td>Santa Clara, CA</td>
            <td>$425</td>
            <td><a href="#jump"><input id="SantaClara_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>2</td>
            <td>Learn to Surf</td>
            <td>June 20, 2016 - June 24, 2016</td>
            <td>Santa Cruz, CA</td>
            <td>$200</td>
            <td><a href="#jump"><input id="SantaCruz_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>3</td>
            <td>Learn to Sail</td>
            <td>July 4, 2016 - July 8, 2016</td>
            <td>San Francisco, CA</td>
            <td>$250</td>
            <td><a href="#jump"><input id="SanFran_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>4</td>
            <td>Introduction to App Design</td>
            <td>August 1, 2016 - August 5, 2016</td>
            <td>Los Angeles, CA</td>
            <td>$175</td>
            <td><a href="#jump"><input id="LosAngeles_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>5</td>
            <td>Video Game Development</td>
            <td>July 25, 2016 - August 5, 2016</td>
            <td>Omaha, Nebraska</td>
            <td>$375</td>
            <td><a href="#jump"><input id="Omaha_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>6</td>
            <td>Watersports Camp</td>
            <td>June 27, 2016 - July 1, 2016</td>
            <td>Maui, Hawaii</td>
            <td>$250</td>
            <td><a href="#jump"><input id="Maui_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>7</td>
            <td>Video Game Development</td>
            <td>July 25, 2016 - July 29, 2016</td>
            <td>Orlando, Florida</td>
            <td>$200</td>
            <td><a href="#jump"><input id="Orlando_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>8</td>
            <td>Learn to Surf</td>
            <td>June 13, 2016 - June 17, 2016</td>
            <td>Providence, Rhode Island</td>
            <td>$200</td>
            <td><a href="#jump"><input id="Providence_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>9</td>
            <td>Introduction to Python</td>
            <td>August 8, 2016 - August 19, 2016</td>
            <td>Buffalo, New York</td>
            <td>$375</td>
            <td><a href="#jump"><input id="Buffalo_reg" type="button" value ="Register"/></a></td>
         </tr>
         <tr>
            <td>10</td>
            <td>Introduction to App Design</td>
            <td>July 18, 2016 - July 22, 2016</td>
            <td>Portland, Oregon</td>
            <td>$225</td>
            <td><a href="#jump"><input id="Portland_reg" type="button" value ="Register"/></a></td>
         </tr>
      </table>
   </div>
</div>  <!--End of Container-->

   <br /><br /><br />

  <div id="background">
	<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">	
		<text id="welcome" x="300" y="25" fill="white">
  			Current Class Availability 
  		</text>
  		
  		<text class="classes" x="15" y="70" fill="white">
  			1. Intro to Python
  		</text>
  		
  		<text class="classes" x="15" y="110" fill="white">
  			2. Learn to Surf
  		</text>
  		
  		<text class="classes" x="15" y="150" fill="white">
  			3. Learn to Sail
  		</text>
  		
  		<text class="classes" x="15" y="190" fill="white">
  			4. Intro to App Design
  		</text>
  		
  		<text class="classes" x="15" y="230" fill="white">
  			5. Video Game Development
  		</text>
  		
  		<text class="classes" x="15" y="270" fill="white">
  			6. Water Sports Camp
  		</text>
  		
  		<text class="classes" x="15" y="310" fill="white">
  			7. Video Game Development
  		</text>
  		
  		<text class="classes" x="15" y="350" fill="white">
  			8. Video Game Development
  		</text>
  		
  		<text class="classes" x="15" y="390" fill="white">
  			9. Intro to Python
  		</text>
  		
  		<text class="classes" x="15" y="430" fill="white">
  			10. Intro to App Design
  		</text>

		<line id="ticker" x1="300" x2="800" y1="470" y2="470" stroke-width="2" stroke="white">
		</line>

		<line id="tickerOne" x1="300" x2="300" y1="465" y2="475" stroke-width="2" stroke="white">
		</line>

		<text x="110" y="475" fill="white">
		  Students Enrolled:
		</text>

		<text x="295" y="490" fill="white">
		  0
		</text>

		<line id="tickerOne" x1="425" x2="425" y1="465" y2="475" stroke-width="2" stroke="white">
		</line>

		<text x="415" y="490"  fill="white">
		  10
		</text>

		<line id="tickerOne" x1="550" x2="550" y1="465" y2="475" stroke-width="2" stroke="white">
		</line>

		<text x="540" y="490" fill="white">
		  20
		</text>

		<line id="tickerOne" x1="675" x2="675" y1="465" y2="475" stroke-width="2" stroke="white">
		</line>

		<text x="665" y="490" fill="white">
		  30
		</text>

		<line id="tickerOne" x1="800" x2="800" y1="465" y2="475" stroke-width="2" stroke="white">
		</line>

		<text x="790" y="490" fill="white">
		  40
		</text>


		<?php
ini_set('display_errors','On');
error_reporting(E_ALL);
$db_host = "dbserver.********";
$db_user = "******";
$db_pass = "***********";
$db_name = "*********";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT classNum FROM register";

$result = $con->query($sql);
if (!$result)
{
	die('Error: ' . mysqli_error($con));
}

 //Counter for each class
$countOne = 0;
$countTwo = 0;
$countThree = 0;
$countFour = 0;
$countFive = 0;
$countSix = 0;
$countSeven = 0;
$countEight = 0;
$countNine = 0;
$countTen = 0;
	
//Loops through the MySQL table
while($row = mysqli_fetch_assoc($result))
{
	//Checks to see which class number the current row is and increments the corresponding counter
	if($row['classNum'] == "1"){
		$countOne++;
	}
	
	else if($row['classNum'] == "2"){
		$countTwo++;
	}
	
	else if($row['classNum'] == "3"){
		$countThree++;
	}
	
	else if($row['classNum'] == "4"){
		$countFour++;
	}
	
	else if($row['classNum'] == "5"){
		$countFive++;
	}
	
	else if($row['classNum'] == "6"){
		$countSix++;
	}
	
	else if($row['classNum'] == "7"){
		$countSeven++;
	}
	
	else if($row['classNum'] == "8"){
		$countEight++;
	}
	
	else if($row['classNum'] == "9"){
		$countNine++;
	}
	
	else if($row['classNum'] == "10"){
		$countTen++;
	}
}

//Multiply each counter by 10 to account for each kid to be equivalent to 10px so a total of 5
$countOne *= 12.5;
$count_one = $countOne . "px";
$countTwo *= 12.5;
$count_two = $countTwo . "px";
$countThree *= 12.5;
$count_three = $countThree . "px";
$countFour *= 12.5;
$count_four = $countFour . "px";
$countFive *= 12.5;
$count_five = $countFive . "px";
$countSix *= 12.5;
$count_six = $countSix . "px";
$countSeven *= 12.5;
$count_seven = $countSeven . "px";
$countEight *= 12.5;
$count_eight = $countEight . "px";
$countNine *= 12.5;
$count_nine = $countNine . "px";
$countTen *= 12.5;
$count_ten = $countTen . "px";

echo "<rect id='one' x='300' y='60' rx='2' ry='2' height='15px' width='$count_one'> </rect>";
echo "<rect id='two' x='300' y='100' rx='2' ry='2' height='15px' width='$count_two'> </rect>";
echo "<rect id='three' x='300' y='140' rx='2' ry='2' height='15px' width='$count_three'></rect>";
echo "<rect id='four' x='300' y='180' rx='2' ry='2' height='15px' width='$count_four'></rect>";
echo "<rect id='five' x='300' y='220' rx='2' ry='2' height='15px' width='$count_five'></rect>";
echo "<rect id='six' x='300' y='260' rx='2' ry='2' height='15px' width='$count_six'></rect>";
echo "<rect id='seven' x='300' y='300' rx='2' ry='2' height='15px' width='$count_seven'></rect>";
echo "<rect id='eight' x='300' y='340' rx='2' ry='2' height='15px' width='$count_eight'></rect>";
echo "<rect id='nine' x='300' y='380' rx='2' ry='2' height='15px' width='$count_nine'></rect>";
echo "<rect id='ten' x='300' y='420' rx='2' ry='2' height='15px' width='$count_ten'></rect>";


mysqli_close($con);
?>



	</svg>
</div>


  <br /><br /><br />


<div class="container">

   <form id="jump" name="jump" method="post" action="php/registration.php" >
      <fieldset id="registerform">
         <legend style="font-size:20px;"> EdCamps Registration Form </legend>
        <pre>If registering more than one child for a class, each child entered after
the first child recieves a 10% discount off of the price of their class.</pre>
            <p>* - Marks Required fields.</p> 
    <div id="registrationFormContainer">
         <p>
            <p><u>Participant Information</u></p>
            <label for="firstname">First Name* </label><input type="text" id="firstname" name="firstname" tabindex="1" size="10"/>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="lastname">Last Name* </label><input type="text" id="lastname" name="lastname" tabindex="2" size="10" />
            <br /><br />
            <label for="school">School* </label><input type="text" id="school" name="school" tabindex="3" size="20"/>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="grade">Grade* </label><input type="text" id="grade" name="grade" tabindex="4" size="5" />
            <br /><br />
            <label for="birthday">Birthday (mm/dd/yyyy)* </label><input type="text" id="birthday" name="birthday" tabindex="5" size="10" />
         </p>
         <br />
         <p>
            <p><u>Parent Information</u></p>
            <label for="pfirstname">First Name* </label><input type="text" id="pfirstname" name="pfirstname" tabindex="6" size="10" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="plastname">Last Name* </label><input type="text" id="plastname" name="plastname" tabindex="7" size="10" />
            <br /><br />
            <label for="email">Email* </label><input type="text" id="email" name="email" tabindex="8" size="15" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="phone">Phone Number* </label><input type="text" id="phone" name="phone" tabindex="9" size="10" />
            <br /><br />
            <label for="childinstruct">Special Instructions for Student (ie. allergies, etc.) </label>
            <br />
            <textarea id="childinstruct" name="childinstruct" rows="5" cols="50"> </textarea>
            <br /><br />
            <label for="classnum">Class #* </label><input type="text" id="classnum" name="classnum" oninput="changePrice()" tabindex="10" size="3" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="fee">Price </label><input type="text" id="fee" name="fee" tabindex="11" size="7" readonly />
         </p>
         <br />
         <p>
            <p><u>Payment Information</u></p>
            <label for="cardname">Card Holder Name* </label><input type="text" id="cardname" name="cardname" tabindex="12" size="20" />
            <br /><br />
            <label for="cardnumber">Credit Card Number* </label><input type="text" id="cardnumber" name="cardnumber" tabindex="13" size="17"/>
            <br/> <br/>
            <label for="security">Security Number* </label><input type="text" id="security" name="security" tabindex="14" size="4" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="expiration">Expiration Date (mm/dd/yyyy)* </label><input type="text" id="expiration" name="expiration" tabindex="15" size="10" />
         </p>
         <br />
         <input id="submit" type="submit" tabindex="16" />
      </fieldset>
   </form>
</div> <!--end of registration form container-->


</div> <!--end of container-->

<!--End of Gabe's HTML code-->



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                     <a href="index.html">
                    <img class="img-responsive img-center" src="img/Logo.jpg" alt="Locations Map" style="height:100px;width:100px;margin:auto;"> 
                    <p style="color:darkgray;font-size:8pt;text-align:center;"> Image by Aleisha Nelson </p>
                </a>  


                    <p style="font-size:8pt;color:darkgray;text-align:center;">Header Image from www.campsandprograms.com</p>
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
