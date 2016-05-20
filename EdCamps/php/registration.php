 <?php
   ini_set('display_errors','On');
   error_reporting(E_ALL);

   $db_host = "dbserver.*********";
   $db_user = "*********";
   $db_pass = "********";
   $db_name = "********";

    $flag = FALSE;

   //create connection to MySQL
   $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

   //check connection
   if(mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_errno();
   }

  
/*
 *   code used on command line to create MySQL Database table
 *
   //create database table for MySQL
   $sql = "CREATE TABLE register (
      id INT AUTO_INCREMENT PRIMARY KEY

      cfirstname VARCHAR(30) NOT NULL,
      clastname VARCHAR(30) NOT NULL,
      school VARCHAR(50) NOT NULL,
      grade VARCHAR(10) NOT NULL,
      birthday VARCHAR(10) NOT NULL,

      pfirstname VARCHAR(30) NOT NULL,
      plastname VARCHAR(30) NOT NULL,
      email VARCHAR(50) NOT NULL,
      phone VARCHAR(10) NOT NULL,
      specialInstructions VARCHAR(200),
      classNum VARCHAR(2) NOT NULL,
      classPrice VARCHAR(5) NOT NULL,

      ccName VARCHAR(30) NOT NULL,
      ccNumber VARCHAR(20) NOT NULL,
      security VARCHAR(3) NOT NULL,
      expirationDate VARCHAR(10) NOT NULL
   )";

   //make sure table was created properly
   if ($con->query($sql) === TRUE) {
      echo "Table register created successfully";
   }
   else {
      echo "Error creating table: " . $con->error;
   }
 */ 


  //get price form and convert to float
  $priceInitial = $_POST['fee'];
  $priceFinal = "$priceInitial";

  //get column of emails from database
  $email = "SELECT email FROM register";
  $result = $con->query($email);


  //loop through all emails and check if it is already entered into database
  while($row = mysqli_fetch_assoc($result)){
    //check if email is in the database
    if($row['email'] == $_POST['email']){
      //give 10% discount to student if parents email is entered
      if($priceInitial == "$200"){
	$priceFinal = "$180";
      }
      else if($priceInitial == "$425"){
	$priceFinal = "382.50";
      }
      else if($priceInitial == "$250"){
	$priceFinal = "225";
      }
      else if($priceInitial == "$175"){
	$priceFinal = "157.50";
      }
      else if($priceInitial == "$375"){
	$priceFinal = "337.50";
      }
      else if($priceInitial == "$225"){
	$priceFinal = "202.50";
      }
    }
  }

  //make sure required textfields have text in them
  if($_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['school'] != "" && $_POST['grade'] != "" && $_POST['birthday'] != "" &&
      $_POST['pfirstname'] != "" && $_POST['plastname'] != "" && $_POST['email'] != "" && $_POST['phone'] != "" && $_POST['childinstruct'] != "" && $_POST['classnum'] != "" && $_POST['fee'] != "" &&
      $_POST['cardname'] != "" && $_POST['cardnumber'] != "" && $_POST['security'] != "" && $_POST['expiration'] != ""){
    //insert items from registration form into MYSQL database
    $sql = "INSERT INTO register (cfirstname, clastname, school, grade, birthday,
               pfirstname, plastname, email, phone, specialInstructions, classNum, classPrice,
               ccName, ccNumber, security, expirationDate)
			   VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[school]','$_POST[grade]','$_POST[birthday]',
		  '$_POST[pfirstname]','$_POST[plastname]','$_POST[email]','$_POST[phone]','$_POST[childinstruct]','$_POST[classnum]','$priceFinal',
      '$_POST[cardname]','$_POST[cardnumber]','$_POST[security]','$_POST[expiration]')";

         //makes sure entry into table was correct
      if ($con->query($sql) === TRUE) {
	echo "New entry for registration table created successfully!";
      }
      else {
	echo "Error: " . $sql . "<br>" . $con->error;
      }
      header("Location:/~gchrist/EdCamps/successReg.html");
   }

   else{
    header("Location:/~gchrist/EdCamps/register.php");
  }


      //close connection
      mysqli_close($con);
?>
