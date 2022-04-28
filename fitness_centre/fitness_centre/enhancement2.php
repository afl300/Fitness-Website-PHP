<!DOCTYPE html>
<!--this page is about the enhancements done on the website-->
<html lang='en'>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Clement Cheung"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>Enhancement</title>
	<!--This is to put the logo in the top page-->
	<link rel="icon" href="images/icon.png"/>
	<link rel="stylesheet" href="style/style.css"/>
</head>
<body>
		<!--Code from https://www.freecodecamp.org/news/how-to-keep-your-footer-where-it-belongs-59c6aa05c59c/ to fix up an error in the coding-->
		 <div id="page-container">
   <div id="content-wrap">
<?php 
	   $page ="enhancement2.php";
	   echo "<header>";
	   include_once('includes/header.inc');
	   include_once('includes/menu.inc');
	   echo "</header>";
	   ?>
<main>
	<div id="image4"><h1><strong><em>ENHANCEMENT</em></strong></h1></div>
<table class="Timetable" id="enhancement">
  <tbody>
    <tr>
      <th scope="col"><em><strong>Enhancement Name</strong></em></th>
      <th scope="col"><em><strong>Description of the enhancement</strong></em></th>
      <th scope="col"><em><strong>Link of where enhancement from</strong></em></th>
	<th scope="col"><em><strong>Where is Enhancement Located</strong></em></th>
    </tr>
    <tr>
      <td><strong>Display Text when Checkbox is Checked</strong></td>
      <td>This is used so that when the checkboxes is checked, it can expand some of the hidden text and variables that is in the text</td>
      <td><a href="https://www.w3schools.com/howto/howto_js_display_checkbox_text.asp">How TO - Display Text when Checkbox is Checked</a></td>
      <td><a href="equire.html#memsign">Hide Text area in enquiries</a><br/>
		  <a href="equire.html#hidden1">Hide Text 1 in enquiries</a><br/>
		<a href="equire.html#hidden2">Hide Text 2 in enquiries</a>
		</td>			
    </tr>
    <tr>
      <td><strong>CountDown Timer and Session Timeout</strong></td>
      <td>The use of two different codes combinging into one are utilized in this case to have one hidden away as it countdown so that the page so there would be a limited amount of time to complete the payment. At the same time, another set of code would show the timer for the customer to know when the time is up for the payment. If the customer fails to complete the payment, an alert/prompt would appear that would notify about the failure of payment and would redirect the customer back to the index page of the website.</td>
      <td><a href="https://stackoverflow.com/questions/20618355/the-simplest-possible-javascript-countdown-timer">The simplest possible JavaScript countdown timer?</a><br/>
		  <a href="https://www.w3schools.com/jsref/met_win_settimeout.asp">Window setTimeout() Method</a>
		</td>
		<td><a href="payment.html#timeout">Timeout on the payment page (best to go through enquiries first) </a></td>
    </tr>
  </tbody>
</table>

</main>
  </div>
			 <?php include('includes/footer.inc');?>
		  </div>
</body>
</html>