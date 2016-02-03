<?php

//Make short Variable names
$firstName = $_REQUEST['FirstName'];
$lastName = $_REQUEST['LastName'];
$phone = $_REQUEST['PhoneNumber'];
$email = $_REQUEST['Email'];
$comments = $_REQUEST['Comments'];
$available = $_REQUEST['available_field'];
$Pickup1 = $_REQUEST['Primary_Pickup']
$Pickup2 = $_REQUEST['Backup1_Pickup']
$Pickup3 = $_REQUEST['Backup2_Pickup']
$Pickup4 = $_REQUEST['Backup3_Pickup']

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Secured by Fire Computer Consulting</title>
		<!--Link to Jquery librarys for slideshow-->
		<script type="text/javascript" src="../Slideshow/jquery-1.2.6.min.js"></script>
		<script src="../Slideshow/Slidshow.js"></script>
		<script type="text/javascript">
			$(function() {
				setInterval( "slideSwitch()", 5000 );
			});
		</script>

		<!--Link to CSS style sheet.-->
		<link rel="stylesheet"
			  type="text/css"
			  href="../SecuredByFire.css"/>
		<style>
			p {
				color: yellow;
			}
		</style>
	</head>
	<body>
		<div id="head">
			<!--Image used under 17 U.S.C. ยง 107 Fair use-->
			<a href="../Index.html">
				<img src="../SecuredByFire.png"
					 id="Logo"
					 alt="Secured By Fire Logo"
					 height="100"
					 width ="100">
			</a>
			<a href="../Index.html"
				<h1>Secured By Fire Computer Consulting</h1>
			</a>
		</div>
		<div id="LeftColumn">
			<div id="menu">
				<li><a href="../Index.html">Home</a></li>
				<li><a href="../Location/Location.html">Location</a></li>
				<li><a href="../Testimonials/Testimonials.html">Testimonials</a></li>
				<li><a href="../Contact/Contact.html">Contact Us</a></li>
			</div>
		</div>
		<div id="CenterColumn">
			<p>Thank you for getting in touch with us.  We will contact you within one (1) business day.</p>
		</div>
		<!--Photos taken by Dean Nelson-->
		<div id="slideshow">
			<img src="../Slideshow/image1.jpg" alt="Slideshow Image 1" class="active" />
			<img src="../Slideshow/image2.jpg" alt="Slideshow Image 2" />
			<img src="../Slideshow/image3.jpg" alt="Slideshow Image 3" />
		</div>
		<div id="Footer">
			<p>SecuredByFire.com is registered and owned by Dean Nelson.</p>
		</div>
	</body>
</html>