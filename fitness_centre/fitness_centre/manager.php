<!DOCTYPE html>
<!--this page is the front page of the website where it direct people to where they are and give a glimpse of what is the fitness centre is like-->
<html lang='en'>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Clement Cheung"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>Manager| 24 Hours Fitness Centre</title>
	<!--This is to put the logo in the top page-->
	<link rel="icon" href="images/icon.png"/>
	<link rel="stylesheet" href="style/style.css"/>
	<?php
		function sanitise_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return($data);
	}?>
</head>	
<body>
	<!--Code from https://www.freecodecamp.org/news/how-to-keep-your-footer-where-it-belongs-59c6aa05c59c/ to fix up an error in the coding-->
	 <div id="page-container">
   <div id="content-wrap">
<?php 
	   $page ="reciept.php";
	   echo "<header>";
	   include_once('includes/header.inc');
	   include_once('includes/menu.inc');
	   echo "</header>";
	   ?>
<main>
	<div id="image1">
	   		<h1><strong><em>Management</em></strong></h1>
	</div>
	<section>
<?php

	if (isset ($_POST["update1"]))
	{
		//echo "Update";
		//echo $_POST["statuses"];
		//echo $_POST["id"];
		$id=$_POST["id"];
		$status=$_POST["statuses"];
		$id = sanitise_input($id);
		//echo $id;
		//echo $status;
		require_once "settings.php";	// Load MySQL log in credentials
		$conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
		if ($conn) { // connected
			mysqli_query($conn, "UPDATE orders
				SET orderStatus='$status' 
				WHERE order_id=$id");
		}
	}
	if (isset ($_POST["cancel"]))
	{
		$id=$_POST["id"];
		$id = sanitise_input($id);

		require_once "settings.php";	// Load MySQL log in credentials
		$conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
		if ($conn) { // connected
			mysqli_query($conn, "DELETE FROM orders WHERE order_id=$id AND orderStatus='PENDING'");
			//echo "pass";
		}else{echo "<p>The order cannot be deleted unless the order status is PENDING.</p>";}
	}
	//Used for searching
	if (!isset($_POST["member"])) {
		$member = "N";
	} else {
		$member = "Y";
	}
	
	if (!isset($_POST["class"])) {
		$class = "N";
	} else {
		$class = "Y";
	}	
	
	if (!isset($_POST["sort"])) {
		$sort = "";
	} else if($_POST["sort"]=="Please Choose sorting method"){
		$sort = "";
	}else{
		$sort = $_POST["sort"];
	}	
	
	if (!isset($_POST["status"])) {
		$status = "";
	} else if($_POST["status"]=="Please Choose Status"){
		$status = "";
	}else{
		$status = $_POST["status"];
	}	
	
	if (!(isset($_POST["fn"])&&isset($_POST["ln"])))
		$query = "SELECT * FROM orders;";	
	else if (!$sort == ""){
		$fn=trim($_POST["fn"]);
		$ln=trim($_POST["ln"]);
		switch($sort){
				case "Order ID":
				$query="SELECT * FROM orders WHERE orderStatus LIKE '%$status%' AND firstName LIKE '%$fn%' AND lastName LIKE '%$ln%'ORDER BY order_id";
				break;
				case "First name":
				$query="SELECT * FROM orders WHERE orderStatus LIKE '%$status%' AND firstName LIKE '%$fn%' AND lastName LIKE '%$ln%'ORDER BY firstName";
				break;
				case "Last name":
				$query="SELECT * FROM orders WHERE orderStatus LIKE '%$status%' AND firstName LIKE '%$fn%' AND lastName LIKE '%$ln%' ORDER BY lastName";
				break;
				case "Cost":
				$query="SELECT * FROM orders WHERE orderStatus LIKE '%$status%' AND firstName LIKE '%$fn%' AND lastName LIKE '%$ln%' ORDER BY orderCost";
				break;
		}
	}
	else if ($member == "Y"){
		$query="SELECT * FROM orders WHERE member LIKE '%$member%'";
	}
	else if ($class == "Y"){
		$query="SELECT * FROM orders WHERE class LIKE '%$class%'";
	}	
	else if (!$status == ""){
		$query="SELECT * FROM orders WHERE orderStatus LIKE '%$status%'";
	}
	else{
		$fn=trim($_POST["fn"]);
		$ln=trim($_POST["ln"]);
		$query="SELECT * FROM orders WHERE firstName LIKE '%$fn%' and lastName LIKE '%$ln%'";
	}
?>

	<?php
	//printing all of the data or search data
	require_once "settings.php";	// Load MySQL log in credentials
	$conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
	if ($conn) { // connected
 
		$result = mysqli_query ($conn, $query);		
		if ($result) {	//   query was successfully executed
			
			$record = mysqli_fetch_assoc ($result);
			if ($record) {		//   record exist

				echo "<table class='Table'>";
				echo "<tr>
				
				<th>Order <br>
				ID</th>
				<th>Order Time</th>				
				<th>First<br>
				Name</th>
				<th>Last<br>
				Name</th>
				<th>Membership</th>			
				<th>Duration <br>
				of<br>
				Membership<br>
				By
				Month
				</th>
				<th>Classes</th>				
				<th>No <br>
				of<br>
				Class</th>
				<th>Order<br>
				Cost</th>
				<th>Order Status</th>
				<th>Delete*</th>
				<th>Update</th>
				</tr>";
				
				while ($record) {
					echo "<form action='manager.php' method='post' id='table'>";
					echo "<tr><td>{$record['order_id']}</td>";
					echo "<input type='hidden' name='id' id='id' value='{$record['order_id']}'/>	";
					echo "<td>{$record['orderTime']}</td>";				
					echo "<td>{$record['firstName']}</td>";
					echo "<td>{$record['lastName']}</td>";
					echo "<td>{$record['member']}</td>";				
					echo "<td>{$record['LengthOfMemByMon']}</td>";
					echo "<td>{$record['class']}</td>";						
					echo "<td>{$record['NumberOfClasses']}</td>";
					echo "<td>".'$'.$record['orderCost']."</td>";
					switch($record['orderStatus']){
					case "PENDING":
					echo'<td><select name="statuses" id="statuses">	
				<option value="PENDING" selected="selected">PENDING</option>
				<option value="FULFILLED">FULFILLED</option>
				<option value="PAID">PAID</option>
				<option value="ARCHIEVED">ARCHIEVED</option></select></td>';
					break;
					case "FULFILLED":
					echo'<td><select name="statuses" id="statuses">	
				<option value="PENDING" >PENDING</option>
				<option value="FULFILLED" selected="selected">FULFILLED</option>
				<option value="PAID">PAID</option>
				<option value="ARCHIEVED">ARCHIEVED</option></select></td>';
					break;
					case "PAID":
					echo'<td><select name="statuses" id="statuses">	
				<option value="PENDING">PENDING</option>
				<option value="FULFILLED">FULFILLED</option>
				<option value="PAID" selected="selected">PAID</option>
				<option value="ARCHIEVED">ARCHIEVED</option></select></td>';
					break;
					case "ARCHIEVED":
					echo'<td><select name="statuses" id="statuses">	
				<option value="PENDING">PENDING</option>
				<option value="FULFILLED">FULFILLED</option>
				<option value="PAID">PAID</option>
				<option value="ARCHIEVED" selected="selected">ARCHIEVED</option></select></td>';
					break;	
					}
					echo "<td><button type='submit' id='cancel' name='cancel' class='button1'><span>Cancel</span></button></td>";
					echo"<td><button type='submit' id='update1' name='update1' class='button2'><span>Update</span></button></td></tr>";
					$record = mysqli_fetch_assoc($result);
					echo"</form>";
				}
				echo "</table>";
				mysqli_free_result ($result);	// Free resources
			} else {
				echo "<p>No record retrieved.</p>";
			}

		} else {
			echo "<p>Orders table doesn't exist or select operation unsuccessful.</p>";
		}
		mysqli_close ($conn);	// Close the database connection
	} else {
		echo "<p>Unable to connect to the database.</p>";
	}
	
	?>
	<p class="error" id="error1">*Note: the item that is being canceled needs its status to be PENDING</p>	
<!--This is to search the items that is being listed-->		 
	   <form action="manager.php" method="post" id="search">
		<h2>Search Order</h2>
		<p><label for="sort">Sort Order: </label><select name="sort" id="sort">
		<option selected="selected">Please Choose sorting method</option>
		<option value="Order ID">Order ID</option>
		<option value="First name">First name</option>
		<option value="Last name">Last name</option>
		<option value="Cost">Cost</option>		
		</select></p>
		<p><label>First Name: <input type="text" name="fn" ></label></p> 
		<p><label>Last Name: <input type="text" name="ln" ></label></p>
		<fieldset><legend>Products:</legend>
		<p><label for="member">Membership: </label>
		<input type="checkbox" name="member" id="member" value="member" /></p>
		<p><label for="class">Classes: </label>
		<input type="checkbox" name="class" id="class" value="class" /></p></fieldset>
		<p><label for="status">Order Status:</label><select name="status" id="status">
				<option selected="selected">Please Choose Status</option>
				<option value="PENDING">PENDING</option>
				<option value="FULFILLED">FULFILLED</option>
				<option value="PAID">PAID</option>	
				<option value="ARCHIEVED">ARCHIEVED</option>	
		</select></p>
	<button type="submit" class="button" id="submit2" name="submit2"><span>Search Now:</span></button>
	</form>

		
</section>


		


<!--This is to search items-->	
<!--<?php
	//if (isset ($_POST["submit1"])){
//$id=$_POST["ID1"];
//$status=$_POST["statas"];
//$id = sanitise_input($id);
//echo $id;
//echo $status;
//require_once "settings.php";	// Load MySQL log in credentials
	//$conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
	//if ($conn) { // connected
	//mysqli_query($conn, "UPDATE orders
//SET orderStatus='$status' 
//WHERE order_id=$id");
	//}		
	//}
		?>	

	<form action="update.php" method="post" id="update">
	   <h2>Update Status</h2>
	   <p><label>Order ID:</label><select name='ID1' id='ID1'>
		   <?php
	//require_once "settings.php";	// Load MySQL log in credentials
	//$conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
	//if ($conn) { // connected
		//$result=mysqli_query($conn, "SELECT order_id FROM orders");
		
		//while($record=mysqli_fetch_array($result)){
		//echo"<option value='{$record['order_id']}'>{$record['order_id']}</option>";
		//}
		//mysqli_close ($conn);	// Close the database connection
	//}?></select>
</p>		
		<p><label>Order Status:</label>
		<select name="statas" id="statas">	
				<option value="PENDING" selected="selected">PENDING</option>
				<option value="FULFILLED">FULFILLED</option>
				<option value="PAID">PAID</option>
			<option value="ARCHIEVED">ARCHIEVED</option></select>
	<button type="submit" class="button" id="submit1" name="submit1"><span>Update</span></button>
	   </form>

	   
	-->   
<!--This is to delete items-->		   
	<?php
	//if (isset ($_POST["submit2"])){
//$id=$_POST["ID2"];
//$id = sanitise_input($id);

//require_once "settings.php";	// Load MySQL log in credentials
	//$conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
	//if ($conn) { // connected
	//mysqli_query($conn, "DELETE FROM orders 
//WHERE order_id=$id AND orderStatus='PENDING'");
	//	echo "pass";
	//}	
	//}
		?>	 
<!--This is to delete any data that is not needed-->
	<!--
	<form action="delete.php" method="post" id="delete">
	   <h2>Cancel</h2>
		<p>Note: the item that is being canceled needs its status to be PENDING</p>
	   <p><label>Order ID:</label><select name='ID2' id='ID2'>		   <?php
	//require_once "settings.php";	// Load MySQL log in credentials
	//$conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
	//if ($conn) { // connected
	//	$result=mysqli_query($conn, "SELECT order_id FROM orders");
		
	//	while($record=mysqli_fetch_array($result)){
	//	echo"<option value='{$record['order_id']}'>{$record['order_id']}</option>";
	//	}
	//	mysqli_close ($conn);	// Close the database connection
	//}?></select></p>
	<button type="submit" class="button" id="submit2" name="submit2"><span>Cancel</span></button>
	   </form>	-->
		 
		 


</main>
  </div>
			 <?php include('includes/footer.inc');?>
		  </div>
</body>
</html>