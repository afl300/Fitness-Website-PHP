<!DOCTYPE html>
<!--this page is for the people to pay for the membership-->
<html lang='en'>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Clement Cheung"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>Fix Order | Active Fitness | 24 Hours Fitness Centre</title>
	<!--This is to put the logo in the top page-->
	<link rel="icon" href="images/icon.png"/>
	<script src="scripts/part2.js"></script>
	<script src="scripts/enhancements.js"></script>
	<link rel="stylesheet" href="style/style.css"/>
</head>
<body>
		<!--Code from https://www.freecodecamp.org/news/how-to-keep-your-footer-where-it-belongs-59c6aa05c59c/ to fix up an error in the coding-->
		 <div id="page-container">
   <div id="content-wrap">
<?php 
	   $page ="payment.php";
	   echo "<header>";
	   include_once('includes/header.inc');
	   include_once('includes/menu.inc');
	   echo "</header>";
	   ?>

<main>
	<div id="image1">
	   		<h1><strong><em>Fix Order</em></strong></h1>
	</div>

	<section>
	<form id="fixup" method="post" action="proccess_order.php" novalidate="novalidate">

		<h3 id="paymentH">Please Fix Up information</h3>
		
	<div>
				
		<fieldset>
		
			<?php 
	// *******************  not from process_order.php, redirection
	if (!isset($_GET["err_msg"])) {
		header("location:equire.php");
		exit();// terminiate 
	}
	// **********************   from process_order.php
	// display error message  
	echo "<fieldset><legend>List of errors:</legend><div class='error' name='error' id='error'>";
	echo $_GET["err_msg"];
	echo "</div></fieldset>";
	// get values
	session_start();
	if (isset($_SESSION["firstname"]))    // first name
		$firstName=$_SESSION["firstname"];
	else 
		$firstName="";
	 
	if (isset($_SESSION["lastname"]))    // last name
		$lastName=$_SESSION["lastname"];
	else 
		$lastName="";
			
	if (isset($_SESSION["email"]))    // email
		$email=$_SESSION["email"];
	else 
		$email="";
			
	if (isset($_SESSION["phone"]))    // phone
		$phone=$_SESSION["phone"];
	else 
		$phone="";
			
	if (isset($_SESSION["streetaddress"]))    // street address
		$streetaddress=$_SESSION["streetaddress"];
	else 
		$streetaddress="";
			
	if (isset($_SESSION["suburb"]))    // suburb
		$suburb=$_SESSION["suburb"];
	else 
		$suburb="";	
			
	if (isset($_SESSION["postcode"]))    // postcode
		$post=$_SESSION["postcode"];
	else 
		$post="0000";

	if (isset($_SESSION["states"]))    // state
		$states=$_SESSION["states"];
	else
		$states="VIC";

	if (isset($_SESSION["Ymember"]))    // Yes Membership
		$Ymember=$_SESSION["Ymember"];
	else 
		$Ymember="";
			
	if (isset($_SESSION["Yclass"]))    // Yes Classes
		$Yclass=$_SESSION["Yclass"];
	else 
		$Yclass="";
			
	if (isset($_SESSION["durationofmem"]))    //Duration of Membership
		$durationofmem=$_SESSION["durationofmem"];
	else 
		$durationofmem="0";	

	if (isset($_SESSION["numofclass"]))    // Number of class
		$numofclass=$_SESSION["numofclass"];
	else 
		$numofclass="0";	
			
	if (isset($_SESSION["cardname"]))    // street address
		$cardName=$_SESSION["cardname"];
	else 
		$cardName="";	
			
	if (isset($_SESSION["cardtype"]))    // card type
		$cardtype=$_SESSION["cardtype"];
	else 
		$cardtype="Visa";	
			
	if (isset($_SESSION["cardno"]))    // card number
		$cardNo=$_SESSION["cardno"];
	else 
		$cardNo="";	
			
	if (isset($_SESSION["cardexp"]))    // card expiry date
		$cardexp=$_SESSION["cardexp"];
	else 
		$cardexp="12-20";	
			
	if (isset($_SESSION["cvv"]))    // cvv
		$cvv=$_SESSION["cvv"];
	else 
		$cvv="000";	
	
	$Yclass=(strpos($Yclass,"Yes Classes")!==false);	
	$Ymember=(strpos($Ymember,"Yes Membership")!==false);	
	
			?>
<p>
			<label for="firstName">First Name</label>
			<input type="text" id="fname" name="fname" value="<?php echo $firstName; ?>" maxlength="25">
		</p>
		<p>
			<label for="lastName">Last Name</label>
			<input type="text" id="lname" name="lname" value="<?php echo $lastName; ?>" maxlength="25">
		</p>
			
		<p>
			<label for="email">Email:</label>
			<input type="text" id="email" name="email" value="<?php echo $email; ?>">
		</p>
		<p>
			<label for="phone">Phone Number:</label>
			<input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" maxlength="10">
		</p>
			<fieldset>
				<legend>Home Address:</legend>
		<p>
			<label for="streAdd">Street Address</label>
			<input type="text" id="streAdd" name="streAdd" value="<?php echo $streetaddress; ?>" maxlength="40">
		</p>	
		<p>
			<label for="subAdd">Suburb name:</label>
			<input type="text" id="subAdd" name="subAdd" value="<?php echo $suburb; ?>"  maxlength="20" >
		</p>
					
				<?php switch($states){

				case "NSW":
					echo'<p><label for="state">State:</label><select name="state" id="state">	
					<option value="VIC">VIC</option>
				<option value="NSW" selected="selected">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option></select></p>';
				break;
				case "QLD":
					echo'<p><label for="state">State:</label><select name="state" id="state">	
					<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD" selected="selected">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option></select></p>';
				break;
				case "NT":
					echo'<p><label for="state">State:</label><select name="state" id="state">	
					<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT" selected="selected">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option></select></p>';		
				break;
				case "WA":
					echo'<p><label for="state">State:</label><select name="state" id="state">	
				<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA" selected="selected">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option></select></p>';		
				break;
				case "SA":
					echo'<p><label for="state">State:</label><select name="state" id="state">	
				<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA" selected="selected">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option></select></p>';		
				break;
				case "TAS":
					echo'<p><label for="state">State:</label><select name="state" id="state">	
				<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS" selected="selected">TAS</option>
				<option value="ACT">ACT</option></select></p>';		
				break;
				case "ACT":
					echo'<p><label for="state">State:</label><select name="state" id="state">	
				<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT" selected="selected">ACT</option></select></p>';		
				break;
				
				case "VIC":
					echo'<p><label for="state">State:</label><select name="state" id="state">	
					<option value="VIC" selected="selected">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option></select></p>';
				break;
}?>


				
			<p>
				<label for="Postcode">Postcode:</label>
				<input type="text" id="postcode" name="postcode" maxlength="4" value="<?php echo $post;?>">
			</p>
</fieldset>
		</fieldset>
		<fieldset id="memsign">
			<legend>Sign up to Membership and classes</legend>
			<p>Startup cost:$75<br/>
				Member: $50 per Month<br/>
			Classes: $15 Per class</p>
			<p>
						<label for="Ymember">Membership: </label>
						<input type="checkbox" name="Ymember" id="Ymember" value="Yes Membership" <?php echo($Ymember)?"checked":""; ?>/><br />
						<label for="duration">Number of Months for membership:</label>
						<input type="text" id="duration" name="duration" maxlength="3" size="3" value ="<?php echo $durationofmem?>"/><br/>
				</p>


					<p>	<label for="Yclass">Classes: </label>
						<input type="checkbox" name="Yclass" id="Yclass" value="Yes Classes" <?php echo($Yclass)?"checked":""; ?>/><br/>
						<label for="numofclass">Number of Classes:</label>
						<input type="text" id="numofclass" name="numofclass" maxlength="3" size="3" value ="<?php echo $numofclass;?>"/>		
				</p>
		<fieldset>
		<legend>Card Information:</legend>
		
		<fieldset id="CardType">
			<legend>Preferred Payment Method: </legend>
		<?php 	switch($cardtype){
				case "Visa":
					echo'<label for="visa">Visa</label>
							<input type="radio" name="CardType" value="Visa" id="visa" checked="checked"><br />
						<label for="master">Mastercard</label>
							<input type="radio" name="CardType" value="MasterCard" id="master"><br />
						<label for="amex">American Express</label>
							<input type="radio" name="CardType" value="AmEx" id="amex"><br />';
				break;
				case "MasterCard":
					echo'<label for="visa">Visa</label>
							<input type="radio" name="CardType" value="Visa" id="visa"><br />
						<label for="master">Mastercard</label>
							<input type="radio" name="CardType" value="MasterCard" id="master" checked="checked"><br />
						<label for="amex">American Express</label>
							<input type="radio" name="CardType" value="AmEx" id="amex"><br />';
				break;
				case "AmEx":
					echo'<label for="visa">Visa</label>
							<input type="radio" name="CardType" value="Visa" id="visa"><br />
						<label for="master">Mastercard</label>
							<input type="radio" name="CardType" value="MasterCard" id="master"><br />
						<label for="amex">American Express</label>
							<input type="radio" name="CardType" value="AmEx" id="amex" checked="checked"><br />';
				break;			
				}

			?>

		
		</fieldset>
			
		<p><label for="CardName">Cardholder Name: </label><input type="text" name="CardName" id="CardName" placeholder="Cardholder name" maxlength="40" value="<?php echo $cardName;?>"></p>
			
		<p><label for="CardNo">Credit card Number: </label><input type="text" name="CardNo" id="CardNo" placeholder="0000111122223333" maxlength="16" value="<?php echo $cardNo;?>"></p>
			
		<p><label for="CardExpire">Credit card expiry date: </label><input type="text" name="CardExpire" id="CardExpire" placeholder="mm/yy" maxlength="5" value="<?php echo $cardexp;?>"></p>
			
		<p><label for="cvv">Card verification value (CVV): </label><input type="text" name="cvv" id="cvv" placeholder="000" maxlength="3" value="<?php echo $cvv;?>"></p>
		
			
		
			

			
		
			
			
			
			
		</fieldset>
	<button type="submit" class="button" id="submit" name="submit"><span>Check out</span></button>
		<button type="button" class="resetbutton" id="cancel"><span>Cancel order</span></button>
	</div>
	</form>
</section>

</main>
  </div>
			 
			 <?php include('includes/footer.inc');?>

		  </div>
</body>
</html>