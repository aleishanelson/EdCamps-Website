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

  //make sure submit button is pressed and that text is entered into each textfield
  if(isset($_POST['Submit']) && $_POST['class'] != "" && $_POST['age'] != "" && $_POST['feedback'] != ""){
    //insert items from registration form into MYSQL database
    $sql = "INSERT INTO forum (class,age,feedback)
           VALUES ('$_POST[class]','$_POST[age]','$_POST[feedback]')";

    //makes sure entry into table was correct
    if ($con->query($sql) === TRUE) {
      echo "New entry for registration table created successfully!";
    }
    else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
      
      //redirect page back to the reviews page
      header("Location:/~gchrist/EdCamps/forum_page.php");
   }

  //if submit button is pressed and no text is enterend into review textfields
  if((isset($_POST['Submit']))){
    //redirect page back to reviews page and do not insert anything into database
    header("Location:/~gchrist/EdCamps/forum_page.php");
  }
   
  mysqli_close($con);
?>
