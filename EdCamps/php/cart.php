<?php
  session_start();
?>

<?php

include ("inventory.php"); 

    // This function displays the contents of the shopping cart 
function show_cart() {
	global $widgets;
	global $prices;
    if (isset($_SESSION['cart'])){
		echo "<br/><br/><h3 style='text-align:center;'>Your Shopping Cart has the following items:</h3><hr><br/><br />"; 
		$mycart = $_SESSION['cart'];
		
		echo "<table cellpadding='10' border='1' style='text-align:center;margin:auto;width:750px;' > 
		<tr>
		  <th style='text-align:center;'>Quantity</th>
		  <th style='text-align:center;'>Product</th>
		  <th style='text-align:center;'>Price</th>
		  <th style='text-align:center;'>Remove 1 item</th>
		</tr>";
		
		foreach ($mycart as $key => $value){
		if ($value >0)
		    echo "<tr>";

		    // get the full widget name from the widgets array;
			$fullname = $widgets[$key];
			$priceItem = $prices[$key];
			
			echo "<td>" . $value . "</td>";
			echo "<td>" . $fullname . "</td>";
			echo "<td>" . $priceItem . "</td>";
			echo "<td>" . "<a href="."cart.php?drop=$key".">    Remove</a>" . "</td>";

		    echo "</tr>";
		}
		echo "</table>";
	}
	else {
		echo "No items in the cart";
	}

}
// This function removes an item from the shopping cart
function drop() {
    global $widgets;
	 if (isset($_GET['drop'])){   //get the item id to drop 
	 							//which is the string sent w the selection when the user clicks remove
	 	$dropItemId = $_GET['drop'];

		if (isset($_SESSION['cart'])){ 
			$mycart = $_SESSION['cart'];
    echo "<br/><br/><h3 style='text-align:center;'>You have removed 1 $widgets[$dropItemId] from your cart.</h3><hr><br/><br />";
			$value;
			if ($mycart[$dropItemId]>1) { //if more than 1 item exists in the cart, remove 1 from the count
			$mycart[$dropItemId] -= 1;
			$_SESSION['cart'] = $mycart;
			}
				//else if there is only 1 item in the cart, remove it. 
			
			else{
			unset ($mycart[$dropItemId]);			
			$_SESSION['cart'] = $mycart;
			} 			
		}
	}  
} 
// Adds an item to the shopping cart
function addToCart(){
	// Access the global array
	global $widgets;
	
	
	// Get the item id to add - this is the string sent with the 
	// selection when the user clicked a link
	
	$addItemId = $_GET['add'];
		 		 		
	if (isset($_SESSION['cart'])){
		$mycart = $_SESSION['cart'];
		
		// if the item already exists, increment the count
		if (isset($mycart[$addItemId])){
			$mycart[$addItemId]+= 1;									
		} 
		// if the item does not exist, add it to the cart
		else{
			$mycart[$addItemId] = 1;
		}		
	}
	else{
		// cart does not exist, create one
		$mycart = array();
		$mycart[$addItemId] = 1;
	}
	$_SESSION['cart'] = $mycart; 
	//echo "$widgets[$addItemId] added to cart <br/>";  

	header('location:/~gchrist/EdCamps/shop.php');
}
function clearCart(){
	if (isset($_GET['clear'])){
	 	if (isset($_SESSION['cart'])){
			unset($_SESSION['cart']); 
	  	}
		echo "Shopping Cart Cleared ";
	} 
}


function checkout() {
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


	$teeCount;
	$jsCount;
	$bpCount;
	$bottleCount;
	$webCount;

	$grandTotal = 0;
	   //get content from database
	$items = "SELECT * FROM shop";
	$result = $con->query($items);
      
	//search through database and store quantity of items in stock
	while($row = mysqli_fetch_assoc($result)){
	    if($row['id'] == "1"){
		$teeCount = $row['quantityInStock'];
	    }
	    else if($row['id'] == "2"){
		$jsCount = $row['quantityInStock'];
	    }
	    else if($row['id'] == "3"){
		$bpCount = $row['quantityInStock'];
	    }
	    else if($row['id'] == "4"){
		$bottleCount = $row['quantityInStock'];
	    }
	    else if($row['id'] == "5"){
		$webCount = $row['quantityInStock'];
	    }
	}


	global $widgets;
	global $prices;
    

	if(isset($_SESSION['cart'])){
	echo "<h3 style='text-align:center;'>Thank you for purchasing these items! </h3><hr><br/><br/>";
	/*echo "<h4> Have you already signed your child up for camps? Great! Please enter your email for a 15% discount!</h4><form action='discount.php' method='post'><input id='email'
	      name='email' type='text' 
	      placeholder='Email here!'/> <input id='emailCheck' name='submit' 
	      value='submit' type='submit'/></form><hr><br/><br/>";*/
	$mycart = $_SESSION['cart'];
	
	$flag = false;

	echo "<table table cellpadding='10' border='1' style='text-align:center;margin:auto;width:750px;'>
		<tr>
		  <th style='text-align:center;'>Quantity</th>
		  <th style='text-align:center;'>Product</th>
		  <th style='text-align:center;'>Price</th>
		</tr>";
	

	foreach($mycart as $key => $value){
		//echo "$key   $value";  key is the index and the value is the number of times the item is in the array

		if ($value>0){
			
			if($key == "tee"){
			    $teeCount -= $value;
			    $sql = "UPDATE shop SET quantityInStock=$teeCount WHERE id=1";
			    if(mysqli_query($con,$sql)){
			    }
			}

			else if($key == "js"){
			    $jsCount -= $value;
			    $sql = "UPDATE shop SET quantityInStock=$jsCount WHERE id=2";
			     if(mysqli_query($con,$sql)){
			     }
			      
			}

			else if($key == "bp"){
			    $bpCount -= $value;
			    $sql = "UPDATE shop SET quantityInStock=$bpCount WHERE id=3";
			     if(mysqli_query($con,$sql)){
			     }
			}

			else if($key == "bottle"){
			    $bottleCount -= $value;
			    $sql = "UPDATE shop SET quantityInStock=$bottleCount WHERE id=4";
			    if(mysqli_query($con,$sql)){
			    }
			}

			else if($key == "web"){
			    $webCount -= $value;
			    $sql = "UPDATE shop SET quantityInStock=$webCount WHERE id=5";
			    if(mysqli_query($con,$sql)){
			    }
			}
			
			$flag = true;
			//get the full widget name from the global widgets array
			$itemName = $widgets[$key];

			//get the number of items that are in the shopping cart
			$itemPrice = $prices[$key];

			//calculate the total price of the item(s)
			$totalItemPrice = ($value*$itemPrice);
			$grandTotal += $totalItemPrice;    //calculate grand total
			$_SESSION['total'] = $grandTotal;

			echo "<tr>";
			echo "<td>" . $value . "</td>";
			echo "<td>" . $itemName . "</td>";
			echo "<td>" . $itemPrice . "</td>";
			echo "</tr>";

			//print("$itemName ($value)    $$itemPrice  = $totalItemPrice <br/> ");
		}

		
		else {
			echo "<tr>";
			echo "<td colspan='3' style='text-align:center;'>" . "<h3>No items in cart to purchase.</h3>"  . "</td>";
			echo "</tr>";
		}
	}
		

	if($flag == true){
	  echo "<tr>";
	  echo "<td colspan='3' style='text-align:right;padding:10px;font-weight:bold;'>" . "Total price: " . $grandTotal . " </td>";
	  echo "</tr>";
	}

	echo "</table>";

	session_destroy();
	}

      //close connection
      mysqli_close($con);
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	<title>View Cart</title>


        <link rel="stylesheet" type="text/css" href="/~gchrist/EdCamps/css/bootstrap.min.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/shoppingCart.css"/>-->
	<link href="/~gchrist/EdCamps/css/clean-blog.min.css" rel="stylesheet">


  <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>



</head>
<body>

<div class="container">
<?php
	// if user has chosen "add"
	if ( isset($_GET['add'])) { 
		addToCart();
		unset($_GET['add']);
	}
	// if user has chosen "show cart"	
	elseif (isset($_GET['show'])){ 
		show_cart();
		unset($_GET['show']);	
	}
	// if user has chosen "clear cart"	
	elseif (isset($_GET['clear'])){ 
		clearCart();
		unset($_GET['clear']);	
	}
	// if user has chosen "remove item from cart"		
	elseif (isset($_GET['drop'])){ 
		drop();
		unset($_GET['drop']);	
	}// if user has chosen "remove item from cart"		
	elseif (isset($_GET['checkout'])){ 
		checkout();
		unset($_GET['checkout']);	
	}	   	
?>

</div>   <!--End of container div-->
<p> 

<div class="container">
    <ul class="pager">
        <li class="next">
            <a href="/~gchrist/EdCamps/shop.php">Back to EdCamps Shop &rarr;</a>
        </li>
    </ul>
</div> <!--End of container div-->
</p> 

<hr>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                     <a href="index.html">
                    <img class="img-responsive img-center" src="/~gchrist/EdCamps/img/Logo.jpg" alt="Logo" style="height:100px;width:100px;margin:auto;"> 
                    <p style="color:darkgray;font-size:8pt;text-align:center;"> Image by Aleisha Nelson </p>
                </a>  
                    <p style="font-size:8pt;color:darkgray;text-align:center;"><p>
                    <p class="copyright text-muted">Copyright &copy; Aleisha Nelson, John Roof, & Gabe Christ - COEN 161 Final Project - 2016</p>
                </div>
            </div>
        </div>
    </footer>



 </body>
</html>

