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
	   $page ="enhancement.php";
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
      <td><strong>Hero Image and Cutout Text</strong></td>
      <td>To capture the visitors' interest onto the page so they can be invested more into the page and discover what is this product is about. The Cutout Text and Hero Image was not taught in class and is made to bring in visitors and make them feel this is an important sporting facility.</td>
      <td><a href="https://www.w3schools.com/howto/howto_css_hero_image.asp">Hero Image</a><br/>
<a href="https://www.w3schools.com/howto/howto_css_cutout_text.asp">Cutout Text</a></td>
      <td><a href="index.html#hero">Hero Text and Cut Out Location</a></td>		
    </tr>
    <tr>
      <td><strong>Hover Arrow/Animation</strong></td>
      <td>The use of Hover arrow where there would be arrows pointing at where its suppose to go which would make people much easier to use the website. This would increase interactivity on the website. When it is used as a submit or reset button, it would become easier for the user to use as it indicates with the symbol of which button do which one. These animated buttons are not covered in tutorials.</td>
      <td><a href="https://www.w3schools.com/howto/howto_css_animate_buttons.asp">Animated button</a></td>
		<td><a href="index.html#Learn">Learn More Button</a><br/>
		  <a href="equire.html#submit">Submit</a><br/>
			<a href="equire.html#reset">Reset</a></td>
    </tr>
    <tr>
      <td><strong>Fade In Images</strong></td>
      <td>The animation used in various locations is to assist making both the images of website load easier and faster along with it bringing visitors in. This isn't taught during tutorial but is a good use for the website to be creative.</td>
		<td><a href="https://stackoverflow.com/questions/11660710/css-transition-fade-in">Fade In Animation</a></td>
		<td><a href="index.html#hero">Index Image1</a><br/>
		<a href="index.html#info">Index Image2</a><br/>
		<a href="equire.html#image1">Equiry SubHeader Image</a><br/>
		<a href="enhancement.html#image4">Enhancement SubHeader Image</a><br/>
		<a href="product.html#image3">Product SubHeader Image</a><br/>
			<a href="about.html#image2">About-Me SubHeader Image</a><br/>
			<a href="about.html#ClassTimeTable">Timetable</a>
		</td>
		
    </tr>
  </tbody>
</table>

</main>
  </div>
			 <?php include('includes/footer.inc');?>
		  </div>
</body>
</html>