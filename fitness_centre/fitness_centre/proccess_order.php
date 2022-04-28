	<?php
	function sanitise_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return($data);
	}
	//Checks if proccess was triggered by a form submit, if not display an error message
	if (!isset ($_POST["submit"])){
		header("location: index.php");
		exit();
	}
	
	//echo "<p>welcome to this new world</p>";
	

	$err_msg="";
	//firstname
	if (!isset($_POST["fname"])) {
		// if this page is triggered by payment form submission, all text inputs are set
		// for security reason, just in case somebody created a similar form, and tried to submit to process_order, we can also test isset for all the text inputs
		header("location:enquire.php");
		exit();
	}
	else{
		$firstName=$_POST["fname"];  
		$firstName=sanitise_input($firstName);
		if ($firstName=="") {
			$err_msg .= "<p>Please enter first name.</p>";
		}
		else if (!preg_match("/^[a-zA-Z]{2,25}$/",$firstName)) {
			$err_msg .= "<p>First name can only contain max 25 alpha characters.</p>";
		}
	}

	//lastname
	if (!isset($_POST["lname"])) {
		// if this page is triggered by payment form submission, all text inputs are set
		// for security reason, just in case somebody created a similar form, and tried to submit to process_order, we can also test isset for all the text inputs
		header("location:enquire.php");
		exit();
	}
	else{
		$lastname=$_POST["lname"];  
		$lastname=sanitise_input($lastname);
		if ($lastname=="") {
			$err_msg .= "<p>Please enter last name.</p>";
		}
		else if (!preg_match("/^[a-zA-Z]{1,25}$/",$lastname)) {
			$err_msg .= "<p>Last name can only contain max 25 alpha characters.</p>";
		}
	}


	//email
	if (!isset($_POST["email"])) {
		// if this page is triggered by payment form submission, all text inputs are set
		// for security reason, just in case somebody created a similar form, and tried to submit to process_order, we can also test isset for all the text inputs
		header("location:enquire.php");
		exit();
	}
	else{
		$email=$_POST["email"];  
		$email=sanitise_input($email);
		if ($email=="") {
			$err_msg .= "<p>Please enter email.</p>";
		}
		else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email)) {
			$err_msg .= "<p>The email you have entered is invalid.</p>";
		}
	}

	//phone
	if (!isset($_POST["phone"])) {
		// if this page is triggered by payment form submission, all text inputs are set
		// for security reason, just in case somebody created a similar form, and tried to submit to process_order, we can also test isset for all the text inputs
		header("location:enquire.php");
		exit();
	}
	else{
		$phone=$_POST["phone"];  
		$phone=sanitise_input($phone);
		if ($phone=="") {
			$err_msg .= "<p>Please enter Phone Number.</p>";
		}
		else if (!preg_match("/^\d\d\d\d\d\d\d\d\d\d$/",$phone)) {
			$err_msg .= "<p>The phone number you just entered is invalid</p>";
		}
		else if (!preg_match("/^[0-9]{1,10}$/",$phone)) {
			$err_msg .= "<p>Phone Number must be numerical.</p>";
		}
	}

//postcodes
	if (!isset($_POST["postcode"])) {
		header("location:enquire.php");
		exit();
	}
	else{
		$postcode=$_POST["postcode"];  
		$state=$_POST["state"];
		//echo $state;
		$state=sanitise_input($state);
		$postcode=sanitise_input($postcode);
		if ($postcode=="") {
			$err_msg .= "<p>Please enter Postcode.</p>";
		}
		else if (!preg_match('/^[0-9]{4}$/',$postcode)){
    		echo "The post code must be a 4-digit number.";
		}
		switch(substr($postcode,-4,1)){
			case 1:
				if(!(substr($postcode,-4,1)==1 && $state=="NSW")){
					$err_msg .= "<p>The postcode you enetered and New South Wales postcodes do not match.</p>";
				}
			break;
			case 2:
				if(!(substr($postcode,-4,1)==2 && $state=="NSW")){
					$err_msg .= "<p>The postcode you enetered and New South Wales postcodes do not match.</p>";
				}
			break;
			case 3:
				if(!(substr($postcode,-4,1)==3 && $state=="VIC")){
					$err_msg .= "<p>The postcode you enetered and Victoria postcodes do not match.</p>";
				}
			break;		
			case 4:
				if(!(substr($postcode,-4,1)==4 && $state=="QLD")){
					$err_msg .= "<p>The postcode you enetered and Queensland postcodes do not match.</p>";
				}
			break;		
			case 5:
				if(!(substr($postcode,-4,1)==5 && $state=="SA")){
					$err_msg .= "<p>The postcode you enetered and South Australia postcodes do not match.</p>";
				}
			break;		
			case 6:
				if(!(substr($postcode,-4,1)==6 && $state=="WA")){
					$err_msg .= "<p>The postcode you enetered and Western Australia postcodes do not match.</p>";
				}
			break;		
			case 7:
				if(!(substr($postcode,-4,1)==7 && $state=="TAS")){
					$err_msg .= "<p>The postcode you enetered and Tasmaina postcodes do not match.</p>";
				}
			break;		
			case 8:
				if(!(substr($postcode,-4,1)==8 && $state=="VIC")){
					$err_msg .= "<p>The postcode you enetered and Victoria postcodes do not match.</p>";
				}
			break;		
			case 9:
				if(!(substr($postcode,-4,1)==9 && $state=="QLD")){
					$err_msg .= "<p>The postcode you enetered and Queensland postcodes do not match.</p>";
				}
			break;		
			case 0:
				if(!(substr($postcode,-4,1)==0 && $state=="NT" || $state=="ACT")){
					$err_msg .= "<p>The postcode you enetered and Nothern Territory postcodes  or Australian Cpital Territory postcodes do not match.</p>";
				}
			break;	
		}
	}

	//street address
	if (!isset($_POST["streAdd"])) {
		header("location:enquire.php");
		exit();
	}
	else{
		$streetaddress=$_POST["streAdd"];  
		$streetaddress=sanitise_input($streetaddress);
		if (!preg_match("/^[A-Za-z0-9 ]{1,40}$/",$streetaddress)) {
			$err_msg .= "<p>The street address need to be less than 40 characters.</p>";
		}
	}

	//suburb
	if (!isset($_POST["subAdd"])) {
		header("location:enquire.php");
		exit();
	}
	else{
		$suburb=$_POST["subAdd"];  
		$suburb=sanitise_input($suburb);
		if (!preg_match("/^[A-Za-z0-9 ]{1,20}$/",$suburb)) {
			$err_msg .= "<p>The Suburb/Town name need to be less than 20 characters.</p>";
		}
	}

	$durationofmember = "";
	$numofclass = "";

	//duration of membership
	if (!isset($_POST["Ymember"])) {
		$durationofmember = "0";
		$Ymember = "";
	}else{
		$Ymember=$_POST["Ymember"];
	if ($Ymember == "Yes Membership"){
		$durationofmember=$_POST["duration"];
		if (!preg_match("/^[0-9]{1,999}$/",$durationofmember)) {
		$err_msg .= "<p>The number of months for membership that is inserted must be numberical.</p>";
		}
	}
	else
	{
		$durationofmember="0";
	}}

	//number of classes that is chosen
	if (!isset($_POST["Yclass"])) {
		$numofclass = "0";
		$Yclass="";
	}else{
		$Yclass=$_POST["Yclass"];
	if ($Yclass == "Yes Classes"){
		$numofclass=$_POST["numofclass"];
			if (!preg_match("/^[0-9]{1,999}$/",$numofclass)) {
				$err_msg .= "<p>The number of classes that is inserted must be numberical.</p>";
			}
	}
	else if ($Yclass=="")
	{
		$numofclass="0";
	}}


	//echo $durationofmember;
	//echo $numofclass;
	//card Name
	if (!isset($_POST["CardName"])) {
		header("location:enquire.php");
		exit();
	}
	else{
		$cardname=$_POST["CardName"];  
		$cardname=sanitise_input($cardname);
		if ($cardname=="") {
			$err_msg .= "<p>Please enter card name.</p>";
		}
		else if (!preg_match("/^[A-Za-z ]{1,40}$/",$cardname)) {
			$err_msg .= "<p>Card name can only contain max 40 alpha characters.</p>";
		}
	}

	//card number validation
	if (!isset($_POST["CardNo"])) {
		header("location:enquire.php");
		exit();
	}
	else{
		$cardtype = $_POST["CardType"];
		$cardno = $_POST["CardNo"];  
		$cardtype=sanitise_input($cardtype);
		$cardno=sanitise_input($cardno);
		if ($cardno=="") {
			$err_msg .= "<p>Please enter the card number.</p>";
		}else if(!is_numeric($cardno)){
			$err_msg .= "<p>Your Card number must be a number.</p>";
		} else {
			switch($cardtype){
				case "Visa":
						if (!preg_match("/^([4]{1})([0-9]{15})$/",$cardno)) {
							$err_msg .= "<p>Your Visa card has been entered incorrectly either by not having 16 numerical character or the correct values.</p>";
						}
				break;
				case "MasterCard":
						if (!preg_match("/^([51|52|53|54|55]{2})([0-9]{14})$/",$cardno)) {
							$err_msg .= "<p>Your MasterCard has been entered incorrectly either by not having 16 numerical character or the correct values.</p>";
						}	
				break;
				case "AmEx":
						if (!preg_match("/^([34|37]{2})([0-9]{13})$/",$cardno)) {
							$err_msg .= "<p>Your American Express has been entered incorrectly either by not having 15 numerical character or the correct values.</p>";						
				break;			
				}
			}
		}
	}

	//card Name
	if (!isset($_POST["CardExpire"])) {
		header("location:enquire.php");
		exit();
	}
	else{
		$cardexp=$_POST["CardExpire"];  
		$cardexp=sanitise_input($cardexp);
		if ($cardexp=="") {
			$err_msg .= "<p>Please enter Card Expire.</p>";
		}
		else if (!preg_match("/([0-1]{1})([0-9]{1})\/([0-9]{2})$/",$cardexp)) {
			$err_msg .= "<p>The card expiration date has been incorrected inserted, it need to be numerical with this layout mm/yy.</p>";
		}
	}

	//cvv
	if (!isset($_POST["cvv"])) {
		header("location:enquire.php");
		exit();
	}
	else{
		$cvv=$_POST["cvv"];  
		$cvv=sanitise_input($cvv);
		if ($cvv=="") {
			$err_msg .= "<p>Please enter CVV.</p>";
		}
		else if (!is_numeric($cvv)){
			$err_msg .="<p>Your CVV must be a number.</p>";
		}
		else if (!preg_match("/^[0-9]{3}$/",$cvv)) {
			$err_msg .= "<p>Your Card Verification Value must be 3 numbers or be entered only by numbers.</p>";
		}
	}





//if error redirect thenm
if($err_msg!=""){
	
	session_start();
	$_SESSION['firstname'] =$firstName;
	$_SESSION['lastname']=$lastname;
	$_SESSION['email']=$email;
	$_SESSION['phone']=$phone;
	$_SESSION['postcode']=$postcode;
	$_SESSION['states']=$state;
	$_SESSION['streetaddress']=$streetaddress;
	$_SESSION['suburb']=$suburb;
	$_SESSION['durationofmem']=$durationofmember;
	$_SESSION['numofclass']=$numofclass;
	$_SESSION['cardtype']=$cardtype;
	$_SESSION['cardname']=$cardname;
	$_SESSION['cardno']=$cardno;
	$_SESSION['cardexp']=$cardexp;
	$_SESSION['cvv']=$cvv;
	$_SESSION['Yclass']=$Yclass;
	$_SESSION['Ymember']=$Ymember;	
	//echo"<p>$err_msg</p>";
	header("location:fix_order.php?err_msg=$err_msg");
	exit();
}

//no error, insert into database and redirect to reciept.php
$ds_msg="";
require_once "settings.php";
$conn = mysqli_connect($host,$user,$pwd,$sql_db);

if($conn){
	//create table if not exists
	$query = "CREATE TABLE IF NOT EXISTS orders(
	order_id INT AUTO_INCREMENT PRIMARY KEY,
	firstName VARCHAR(25),
	lastName VARCHAR(25),
	email VARCHAR(50),
	phone VARCHAR(10),
	streeetAdd VARCHAR(40),
	suburb VARCHAR(20),
	state VARCHAR(5),
	postcode VARCHAR(4),
	member VARCHAR(1),
	LengthOfMemByMon INT,
	class VARCHAR(1),
	NumberOfClasses INT,
	orderCost DECIMAL(6,2),
	orderTime DATETIME,
	cardType VARCHAR(20),
	cardName VARCHAR(40),
	cardNumber VARCHAR(20),
	cardExp VARCHAR(5),
	CVV VARCHAR(20),
	orderStatus VARCHAR(25)
	);";
	$result = mysqli_query($conn,$query);
	if($result){//create table successful
		//calculate cost
		$cost = 75 + $durationofmember * 50 + $numofclass * 15;
		//$date time
		$datetime = date('Y-m-d H:i:s');
		//Product choice
		if ($Ymember == "Yes Membership"){
			$Ymember = "Y";
		}else{
			$Ymember = "N";
		} 
		
		if ($Yclass == "Yes Classes"){
			$Yclass = "Y";
		}else{
			$Yclass = "N";
		} 
		//insert
		$query = "INSERT INTO orders (firstName,lastName,email,phone,streeetAdd,suburb,state,postcode,member,LengthOfMemByMon,class,NumberOfClasses,orderCost,orderTime,cardType,cardName,cardNumber,cardExp,cvv,orderStatus)
		VALUES('$firstName','$lastname','$email','$phone','$streetaddress','$suburb','$state','$postcode','$Ymember','$durationofmember','$Yclass','$numofclass','$cost','$datetime','$cardtype','$cardname','$cardno','$cardexp','$cvv','PENDING');";
		$insert_result = mysqli_query ($conn, $query);
		if($insert_result){//insert successful
			$cardno =  substr($cardno, -4);
				$db_msg="<form><h2 id='Visit'><em>Your order is inserted into the database.</em></h2>"
						. "<table class='Timetable' id='receipt'><tr><th>Information Item:</th><th>Value</th></tr>"
						. "<tr><th>Order ID: </th><td>" . mysqli_insert_id($conn) . "</td></tr>"
						. "<tr><th>First Name: </th><td>$firstName</td></tr>"
						. "<tr><th>Last Name: </th><td>$lastname</td></tr>"
						. "<tr><th>Email: </th><td>$email</td></tr>"
						. "<tr><th>Phone Number: </th><td>$phone</td></tr>"
						. "<tr><th>Street Address: </th><td>$streetaddress</td></tr>"					
						. "<tr><th>Suburb: </th><td>$suburb</td></tr>"
						. "<tr><th>State: </th><td>$state</td></tr>"
						. "<tr><th>Member: </th><td>$Ymember</td></tr>"
						. "<tr><th>Duration of Membership: </th><td>$durationofmember Months</td></tr>"
						. "<tr><th>Member: </th><td>$Yclass</td></tr>"
						. "<tr><th>Number of Classes </th><td>$numofclass</td></tr>"
						. "<tr><th>Cost: </th><td>$$cost</td></tr>"
						. "<tr><th>Date: </th><td>$datetime</td></tr>"
						. "<tr><th>Card Type </th><td>$cardtype</td></tr>"
						. "<tr><th>Card Name </th><td>$cardname</td></tr>"
						. "<tr><th>Card Number </th><td>***********$cardno</td></tr>"
						. "<tr><th>Card Expiry Month </th><td>$cardexp</td></tr>"
						. "<tr><th>CVV </th><td>***</td></tr>"
						. "<tr><th>Status: </th><td>PENDING</td></tr>"
						. "</table></form>";  // you can display more information 			
			} else {
				$db_msg= "<p>Insert  unsuccessful.</p>";
			}
		} else {
			$db_msg= "<p>Create table operation unsuccessful.</p>";
		}
		mysqli_close ($conn);					// Close the database connect
	} else {
		$db_msg= "<p>Unable to connect to the database.</p>";
	}
	//  redirect to receipt.php
	//echo $db_msg;
	header("location:reciept.php?db_msg=$db_msg");


















	?>