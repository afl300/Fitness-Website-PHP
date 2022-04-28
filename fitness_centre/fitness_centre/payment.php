<!DOCTYPE html>
<!--this page is for the people to pay for the membership-->
<html lang='en'>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Clement Cheung"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>Payment | Active Fitness | 24 Hours Fitness Centre</title>
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
	   		<h1><strong><em>PAYMENT</em></strong></h1>
	</div>

	<section>
	<form id="paypage" method="post" action="proccess_order.php" novalidate="novalidate">

		<h3 id="paymentH">Payment</h3>
		<div><p>Countdown to page timeout: <span id="timeout">05:00</span> Minutes</p></div>
		
	<div>
				
		<fieldset>
		<legend>Billing Address</legend>
		<p>Your Name: <span id="confirm_name"></span></p>
		<p>Email: <span id="email_confirm"></span></p>
		<p>Duration of membership: <span id="duration_membership"></span> Month</p>
		<p>Number of Classes: <span id="noofclass"></span></p>
		<p>Total Cost: $<span id="confirm_cost"></span></p>
		<p>Phone Number: <span id="confirm_phone"></span></p>
		<p>Home Address: <span id="address"></span></p>
			
		
		<input type="hidden" name="fname" id="fname" />	
		<input type="hidden" name="lname" id="lname" />
		<input type="hidden" name="email" id="email" />
		<input type="hidden" name="phone" id="phone"/>
		<input type="hidden" name="cost" id="cost"/>	
		<input type="hidden" name="duration" id="duration"/>
		<input type="hidden" name="numofclass" id="numofclass"/>	
		<input type="hidden" name="streAdd" id="streAdd"/>	
		<input type="hidden" name="subAdd" id="subAdd"/>
		<input type="hidden" name="state" id="state"/>
		<input type="hidden" name="postcode" id="postcode"/>
		<input type="hidden" name="PrefContact" id="PrefContact"/>
		<input type="hidden" name="Category" id="Category"/>
		<input type="hidden" name="featcost" id="featcost"/>
		<input type="hidden" name="featpt" id="featpt"/>
		<input type="hidden" name="featclass" id="featclass"/>
		<input type="hidden" name="featentry" id="featentry"/>
		<input type="hidden" name="featgym" id="featgym"/>	
		<input type="hidden" name="enquiry" id="enquiry"/>
		<input type="hidden" name="Ymember" id="Ymember"/>
		<input type="hidden" name="Yclass" id="Yclass"/>

		</fieldset>
		<fieldset>
		<legend>Card Information:</legend>
		
		<fieldset id="CardType">
			<legend>Preferred Payment Method: </legend>
		<label for="visa">Visa</label>
			<input type="radio" name="CardType" value="Visa" id="visa" checked="checked"><br />
		<label for="master">Mastercard</label>
			<input type="radio" name="CardType" value="MasterCard" id="master"><br />
		<label for="amex">American Express</label>
			<input type="radio" name="CardType" value="AmEx" id="amex"><br />
		
		</fieldset>
			
		<p><label for="CardName">Cardholder Name: </label><input type="text" name="CardName" id="CardName" placeholder="Cardholder name" maxlength="40"></p>
			
		<p><label for="CardNo">Credit card Number: </label><input type="text" name="CardNo" id="CardNo" placeholder="0000111122223333" maxlength="16" ></p>
			
		<p><label for="CardExpire">Credit card expiry date: </label><input type="text" name="CardExpire" id="CardExpire" placeholder="mm/yy" maxlength="5"></p>
			
		<p><label for="cvv">Card verification value (CVV): </label><input type="text" name="cvv" id="cvv" placeholder="000" maxlength="3"></p>
		
			
		
			
		
			
		
			
			
			
			
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