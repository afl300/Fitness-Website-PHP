<!DOCTYPE html>
<!--this page is the front page of the website where it direct people to where they are and give a glimpse of what is the fitness centre is like-->
<html lang='en'>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Clement Cheung"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>Active Fitness | 24 Hours Fitness Centre</title>
	<!--This is to put the logo in the top page-->
	<link rel="icon" href="images/icon.png"/>
	<link rel="stylesheet" href="style/style.css"/>
</head>
<body>
	<!--Code from https://www.freecodecamp.org/news/how-to-keep-your-footer-where-it-belongs-59c6aa05c59c/ to fix up an error in the coding-->
	 <div id="page-container">
   <div id="content-wrap">
<?php 
	   $page ="index.php";
	   echo "<header>";
	   include_once('includes/header.inc');
	   include_once('includes/menu.inc');
	   echo "</header>";
	   ?>
<main>
<!-- loosely base on coding on https://www.w3schools.com/howto/howto_css_hero_image.asp
https://www.w3schools.com/css/tryit.asp?filename=trycss_buttons_animate1
https://www.w3schools.com/howto/howto_css_cutout_text.asp
-->
  <div class="hero_image" id="hero">
		<div class="hero_text">
		  <div class="text">ACTIVE</div>
			<p style="font-size: 24px" id="Learn">24/7 Fitness Centre</p>
			<a class="button" href="product.php"><span>Learn More:</span></a>
		</div>
	</div>
	<section>
<h3 id="intro">Welcome to Active Fitness Australia</h3>
	<p id="subintro">This is an Australian Fitness Gym that is open 24/7. Also, this fitness centre would give back and help out the communities.</p></section>
	<p>&nbsp;</p>
	<section id="info">
	<div id="centerpad">
	<div class="ProfileCenter" id="a">
		<!--vector taken from https://www.vecteezy.com/vector-art/161662-security-icon-free-vector-->
		<img src="images/Security.png" alt="Image of a security camera" width="100" id="securitycam">
		<h4 id="security">Safety First</h4>
	<p class="paddex">Your safety is important whether you train during late hours or the day. We have 24 hours security monitoring alongside with only secure key access to the facility. There is also a private bathroom and changing room in the facility. </p>
	</div>
	  <div class="ProfileCenter" id="b"> <!--vector taken from https://www.pinpng.com/picture/xmThwm_cmbiate-a-al-24-hour-clock-vector-hd/-->
		  <img src="images/pinpng.com-reloj-png-1299052.png" alt="24 hours clock" width="100" id="time">
		  <h4 id="Convienience">Easy Conveinience</h4>
		  <p class="paddex" id="bigpad">The centre is open 24/7 so you can get your fitness training whenever you want to. </p><p>&nbsp;</p>
<p>&nbsp;</p>

	</div>
	  <div class="ProfileCenter" id="c">
		  <!--image taken from https://flyclipart.com/does-using-a-personal-trainer-work-gateway-crossfit-personal-training-personal-trainer-clipart-138911-->
		  <img src="images/does-using-a-personal-trainer-work-gateway-crossfit-personal-training-138911.png" alt= "a training goal" width="100" id="trophie">
		  <h4 id="Train">Training Assistant</h4>
		  <p>Your motivation is important where we have a remote and flexible coach they have a range of skills at an affordable option to personal training. You can talk to our staff for more information about the range of services and to find one that is suitable to your lifestyle </p></div>
	<p>&nbsp;</p>
<p>&nbsp;</p>
		</div>
		</section>
</main>
  </div>
			 <?php include('includes/footer.inc');?>
		  </div>
</body>
</html>