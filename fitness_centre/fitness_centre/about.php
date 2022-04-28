<!DOCTYPE html>
<!--this page is the about page about the Developer of this website-->
<html lang='en'>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Clement Cheung"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>About the Developer</title>
	<!--This is to put the logo in the top page-->
	<link rel="icon" href="images/icon.png"/>
	<link rel="stylesheet" href="style/style.css"/>
</head>
<body>
		<!--Code from https://www.freecodecamp.org/news/how-to-keep-your-footer-where-it-belongs-59c6aa05c59c/ to fix up an error in the coding-->
			 <div id="page-container">
   <div id="content-wrap">
<?php 
	   $page ="about.php";
	   echo "<header>";
	   include_once('includes/header.inc');
	   include_once('includes/menu.inc');
	   echo "</header>";
	   ?>
	
<main>
	<div id="image2">
	<h1><strong><em>ABOUT THE WEBSITE DEVELOPER</em></strong></h1>
	</div>
<figure> <a href="about.html#Profile"><img src="images/DevPhoto.jpg" alt="picture of the Developer of this website" width="300"/></a>
	</figure>
	<section>
  <dl class="Profile">
	<dt class="Profiletxt" id="Profile"><span class="ProfiletxtH"><strong>Profile:</strong></span></dt>
	<dt class="Profiletxt"><strong><em>Name:</em></strong></dt>
	<dd class="Profiletxt">Clement Cheung</dd>
	<dt class="Profiletxt"><strong><em>Student ID:</em></strong></dt>
	<dd class="Profiletxt">s103076376</dd>
	<dt class="Profiletxt"><em><strong>Course:</strong></em></dt>
	<dd class="Profiletxt">Bachelor of Computer Science (Proffessional)</dd>
	<dt class="Profiletxt"><em><strong>Email:</strong></em></dt>
		<dd class="Profiletxt"><a id="DevEmail" href="mailto:103076376@student.swin.edu.au?Subject=Enquires%20about%20website" >103076376@student.swin.edu.au</a></dd>
	  
  </dl>
<div class="Profile">
	<h3 id="ProfiletxtHead">Demographic:</h3>
	  <dl id="dl1">
		<dt class="Profiletxt"><strong>Gender:</strong></dt>
		<dd>Male</dd>
		<dt class="Profiletxt"><strong>Age:</strong></dt>
		<dd>18 Year Old</dd>
		<dt class="Profiletxt"><strong>Occupation:</strong></dt>
		<dd>Domestic Student</dd>
		<dt class="Profiletxt"><strong>Location of Birth:</strong></dt>
		<dd>Melbourne</dd>
		<dt class="Profiletxt"><strong>Disabilities:</strong></dt>
		<dd>Autism</dd>
    
	  </dl>
	</div>
<p>&nbsp;</p><p>&nbsp;</p>


<div class="Profile">
  <h3 class="ProfiletxtH">List of Favourites:</h3>
  <p class="listsubheading"><strong>TV Shows:</strong></p>
  <ul class="list">
    <li>Air Crash Investigations</li>
    <li>Seconds from Disasters</li>
    <li>Hotel Hell</li>
    <li>Gordon Ramsays 24 Hours to Hell and Back</li>
    <li>CW Arrow</li>
    <li>CW The Flash</li>
    <li>CW Batwoman</li>
    <li>Gravity Falls</li>
    <li>Sonic X</li>
    <li>Infinity Train</li>
    <li>Teen Titans</li>
  </ul>
  <p class="listsubheading"><strong>Manga and Comics:</strong></p>
  <ul class="list">
    <li>Beastars</li>
    <li>Flash Rebirth (2016)</li>
    <li>Flashpoint</li>
    <li>Superman Red Son</li>
    <li>Batman The Dark Knight Returns</li>
    <li>DC Dark Nights: Metal</li>
    <li>Pokemon Adventures</li>
  </ul>
  <p class="listsubheading"><strong>Anime:</strong></p>
  <ul class="list">
    <li>Beastars</li>
    <li>Summer Wars</li>
    <li>Sword Art Online</li>
  </ul>
  <p class="listsubheading"><strong>Movies:</strong></p>
  <ul class="list">
    <li>Ready Player One</li>
    <li>Sonic The Movie</li>
    <li>How to Train Your Dragon (Franchise)</li>
    <li>Spider-Man Into The Spider-Verse</li>
    <li>The Terminal</li>
    <li>War Games</li>
    <li>Ferris bullers Days off</li>
  </ul>
  <p class="listsubheading"><strong>Music Genre:</strong></p>
  <ul class="list">
    <li>TV, Film, Anime, Game Soundtracks</li>
    <li>Electrionic</li>
    <li>Folk</li>
    <li>Jazz</li>
    <li>Pop</li>
  </ul>
</div>
<div class="Profile">
  <h3 class="ProfiletxtH">List of interests:</h3>
	<ul class="list">
	  <li>Anime and Manga</li>
		<li>Aviation</li>
		<li>Cooking</li>
		<li>Technology
		  <ul>
		    <li>Computers</li>
		    <li>Laptops</li>
		    <li>Mobile Phones</li>
	      </ul>
		</li>
		<li>Tokusatsu</li>
		<li>Video Editing 
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
        </li>
	</ul>
</div>
	</section>
<div>
  <table class="Timetable" id="ClassTimeTable">
    <tbody>
      <tr class="Times">
        <td colspan="6" class="Times"><h2 class="classtime">Class Timetable</h2></td>
      </tr>
      <tr class="Times">
        <td class="Times">&nbsp;</td>
        <td class="tablewidth">Monday</td>
        <td class="tablewidth">Tuesday</td>
        <td class="tablewidth">Wednesday</td>
        <td class="tablewidth">Thurday</td>
        <td class="tablewidth">Friday</td>
      </tr>
      <tr>
        <td class="Times">8:00AM</td>
			<td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="4" class="webapp">Creating Web Application Lab</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
        <td rowspan="4" class="Netapp">Network and Switching Lecture</td>
      </tr>
      <tr>
        <td class="Times">9:00AM</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">10:00AM</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">&nbsp;</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
        <td rowspan="4" class="IntroPro">Introduction to Programing Lab</td>
      </tr>
      <tr>
        <td class="Times">11:00AM</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">&nbsp;</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">12:00PM</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
         <td class="Times">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="IntroPro" rowspan="4">Introduction to Programming Lecture</td>
        <td class="ComLog" rowspan="4">Computer &amp; Logic Essentials Lecture</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">1:00PM</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  
      </tr>
      <tr>
        <td class="Times">&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
		  
      </tr>
      <tr>
        <td class="Times">2:00PM</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>

      </tr>
      <tr>
         <td class="Times">&nbsp;</td>
        <td class="webapp" rowspan="4">Creating Web Application Lecture</td>
        <td class="Netapp" rowspan ="6">Network and Switching Lab</td>
        <td class="ComLog" rowspan="4">Computer &amp; Logic Essentials Tutorial</td>
        <td>&nbsp;</td>
        <td rowspan="4"  class="IntroPro">Introduction to Programing Workshop</td>
      </tr>
      <tr>
        <td class="Times">3:00PM</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
         <td class="Times">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">4:00PM</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">&nbsp;</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="Times">5:00PM</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
      <tr>
         <td class="Times">&nbsp;</td>
        <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <p></p>
  <p></p>
</div>
</main>
  </div>
			 <?php include('includes/footer.inc');?>
		  </div>
</body>
</html>