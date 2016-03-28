<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Reviews</title>
	<link rel="stylesheet" type="text/css" href="css/forum.css">									

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <script>
    function message(){
		if(document.getElementById('class').value != "" && document.getElementById('age').value != "" && document.getElementById('feedback').value != ""){
			alert("Thank you for submitting a review of our camps!");
		}
    }
  </script>

</head>

<body>
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

    <header class="intro-header" style="background-image: url('img/review.gif');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 style="color:black;">Reviews</h1>
                        <p></p>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>


<div class="container">
    <div class="post-preview">
                    
                        <h2 class="post-title">
                            Write a Review
                        </h2>
                        <p class="post-subtitle">
                         <p>We value your feedback as it helps us to improve our programs for future years! Leave a review below or scroll down to read reviews on our different classes and activities to help you choose the right one for your child!   </p>
                </div>
                <hr>

	<h1> Review Forum </h1>
	<form id="form" action="php/forum.php" method="post">
		<div id="items">
  		Class Attended<br>
  		<input type="text" id="class" name="class" placeholder=" Class Name">
		<br /><br />
		Age of Child:<br>
  		<input type="text" id="age" name="age" placeholder=" Age">
  		<br /><br />
  		Please briefly describe your Child's experience!  We are constantly looking to improve our camp and would love any and all feedback! <br>
  		<textarea id="feedback" name="feedback" rows="10" cols="40" placeholder=" Comments"></textarea>
  		<br /><br />
  		<input type="submit" name="Submit" value="Submit"  onclick="message()">
  		</div>
	</form> 
      
  <br /><br />

<hr>
  <h1>Reviews:</h1>

      <?php
	ini_set('display_errors','On');
   error_reporting(E_ALL);

   $db_host = "dbserver.engr.scu.edu";
   $db_user = "gchrist";
   $db_pass = "00001011346";
   $db_name = "sdb_gchrist";

   //create connection to MySQL
   $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

   //check connection
   if(mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_errno();
   }

        //get content from database
  $table = "SELECT * FROM forum";
  $result = $con->query($table);


  echo "<table cellpadding='10' border='1' style='text-align:center;margin:auto;width:750px;'>
    <tr>
    <th style='text-align:center;'>Class</th>
    <th style='text-align:center;'>Age</th>
    <th style='text-align:center;'>Review</th>
    </tr>";

  while($row = mysqli_fetch_assoc($result)){
    

    echo "<tr>";
    echo "<td>" . $row['class'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td style='width:450px;'>" . $row['feedback'] . "</td>";
    echo "</tr>";

  
  }

    echo "</table>";

mysqli_close($con);
  
      ?>

</div> <!--End of Container Div-->
<hr>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                     <a href="index.html">
                    <img class="img-responsive img-center" src="img/Logo.jpg" alt="Logo" style="height:100px;width:100px;margin:auto;"> 
                    <p style="color:darkgray;font-size:8pt;text-align:center;"> Image by Aleisha Nelson </p>
                </a>  
                    <p style="font-size:8pt;color:darkgray;text-align:center;"> Header GIF from www.ios.uplabs.com<p>
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


</body>
</html>
