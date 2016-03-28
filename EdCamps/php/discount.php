<?php
    session_start();

    ini_set('display_errors','On');
   error_reporting(E_ALL);

   $db_host = "dbserver.engr.scu.edu";
   $db_user = "gchrist";
   $db_pass = "00001011346";
   $db_name = "sdb_gchrist";

   //create connection to MySQL
   $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $sql = "SELECT * FROM register";
   $result = $con->query($sql);

$grandTotal = $_SESSION['total'];
$flag = false;
 
   //search through emails in database
   while($row = mysqli_fetch_assoc($result)){
	if($row['email'] == $_POST['email']){
	  $grandTotal = $grandTotal - ($grandTotal*.15);
	  echo "Discounted price: " . $grandTotal;
	  $flag = true;
	}
    }
    if($flag == false){
      echo "Your email is not in our database. Your total is: " . $grandTotal;
    }

   mysqli_close($con);

?>
