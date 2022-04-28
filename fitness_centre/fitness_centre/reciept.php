<!DOCTYPE html>
<!--this page is the front page of the website where it direct people to where they are and give a glimpse of what is the fitness centre is like-->
<html lang='en'>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Clement Cheung"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>Reciept| 24 Hours Fitness Centre</title>
	<!--This is to put the logo in the top page-->
	<link rel="icon" href="images/icon.png"/>
	<link rel="stylesheet" href="style/style.css"/>
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
	   		<h1><strong><em>Reciept</em></strong></h1>
	</div>
	<section>
<?php
	
	if (!isset($_GET["db_msg"])) {// not from process_order.php, redirection
		header("location:equire.php");
		exit();
	}
	else { // from process_order.php, display receipt
		echo $_GET["db_msg"];
	}
	
		?></section>
</main>
  </div>
			 <?php include('includes/footer.inc');?>
		  </div>
</body>
</html>