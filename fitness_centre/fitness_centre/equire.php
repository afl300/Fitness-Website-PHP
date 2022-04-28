<!DOCTYPE html>
<!--this page is for the people who want to ask the fitness center about the centre or want to send feedback and to find where the fitness centre is at-->
<html lang='en'>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Clement Cheung"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>Contact Us | Active Fitness | 24 Hours Fitness Centre</title>
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
	   $page ="enquire.php";
	   echo "<header>";
	   include_once('includes/header.inc');
	   include_once('includes/menu.inc');
	   echo "</header>";
	   ?>

<main>
	<div id="image1">
	   		<h1><strong><em>CONTACT US</em></strong></h1>
	</div>

	<section>
	<form id="enquire" method="post" action="payment.php" novalidate="novalidate">
		<h2 id="Visit"><em>Visit Active Fitness Center</em></h2>
		<ul>
		<li class="listclear" id="address">607 Canterbury Rd, Surrey Hills VIC 3127</li>
		<li class="listclear" id="callno"><strong>Call:</strong> (04) 98888785</li>
		</ul><br>
<br>

		<h3 id="Request">Enquiry</h3>
	<div>
		<p>
		  <label for="FName">Your First Name:*</label>
		  <input type="text" name= "FName" id="FName" maxlength="25"/></p>
		<p>		  <label for="SName">Your Surname:*</label>
		  <input type="text" name= "SName" id="SName" maxlength="25"/></p>
		<p><label for="email">Email:*</label>
				<!--Use an HTML5 email control -->
      <input type="text" name= "email" id="email" placeholder="abc@xyz.com"/></p>
		<p><label for="Phone">Phone Number:*</label><input type="text" id="Phone" name="Phone"
		placeholder="04xxxxxxxx"
		maxlength="10"
		/>
		</p>
		<fieldset id="PrefContact">
		<legend>Preferred Contact:</legend><p>
<label><input name="PrefContact" type="radio" value="email" checked="checked">Email</label>
		<label><input type="radio" name="PrefContact" value="post">Post</label>
			<label><input type="radio" name="PrefContact" value="phone">Phone</label></p>
		
		</fieldset>
			<fieldset>
		<legend>Address</legend>
			<p><label for="StreAddress">Street Address:* </label>
				<input type="text" maxlength="40" name="StreAddress" id="StreAddress"></p>
			<p><label for="SubAddress">Suburb/Town:* </label>
				<input type="text" maxlength="20" name="SubAddress" id="SubAddress"></p>
			<p><label for="State">State:*</label><select name="State" id="State">
				<option value="VIC" selected="selected">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option>
				</select></p>
			<p><label for="Postcode">Postcode:*</label>
				<input type="text" id="Postcode" name="Postcode" maxlength="4" placeholder="0000">
				</p>
		</fieldset>
		<fieldset id="memsign">
			<legend>Sign up to Membership and classes</legend>
			<p>Startup cost:$75<br/>
				Member: $50 per Month<br/>
			Classes: $15 Per class</p>
			<p>
						<label for="Ymember">Membership: </label>
						<input type="checkbox" name="Ymember" id="Ymember" value="Ymember" /><br /></p>
				<p id="hidden1">
						<label for="monthmem">Number of Months for membership:</label>
						<input type="text" id="monthmem" name="monthmem" maxlength="3" size="3" value ="0"/><br/>
				</p>
					<p>	<label for="Yclass">Classes: </label>
						<input type="checkbox" name="Yclass" id="Yclass" value="Yclass"/><br/></p>
			<p id="hidden2">
						<label for="noofclasses">Number of Classes:</label>
						<input type="text" id="noofclasses" name="noofclasses" maxlength="3" size="3" value ="0"/>
				</p>
			

	
		
		</fieldset>
		<p><label for="Category">Enquiry Type: </label><select name="Category" id="Category">
			<option value="" selected="selected">Please Select</option>
			<option value="General">General Enquiry</option>
				<option value="Feedback">Feedback</option>
				<option value="FitnessnHealth">Fitness and Health</option>
				<option value="Membership">Membership</option>
				<option value="Other">Other</option>
			</select></p>
			
		<p>
						
		Features:
			<label><input type="checkbox" name="Features[]" value="Cost" id="cost">Cost</label>
			<label><input type="checkbox" name="Features[]" value="PersonalTrain" id="PersonalTrain">Personal training</label>
			<label><input type="checkbox" name="Features[]" value="Classes" id="Classes">Classes</label>
			<label><input type="checkbox" name="Features[]" value="Entry" id="Entry">Condition of Entry</label>
			<label><input type="checkbox" name="Features[]" value="Gym" id="Gym">24 Hours Fitness</label>
		</p>
		<p>
		<label for="enquiry">Equiry Information:<br/>
</label>
		<textarea name="enquiry" id="enquiry" rows="4" cols="25" placeholder="Enter Question/Comment"></textarea>
		</p>
	<button type="submit" class="button" id="submit" name="submit"><span>Pay Now:</span></button>
		<button type="reset" class="resetbutton" id="reset"><span>Reset:</span></button>
	</div>
	</form>
</section>

</main>
  </div>
			 <?php include('includes/footer.inc');?>
		  </div>
</body>
</html>