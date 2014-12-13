<?php $page='h'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--Declare page as mobile friendly --> 
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
		<!-- Declare page as iDevice WebApp friendly -->
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png"> 
		<!-- iPhone 3, 3Gs -->
		<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" /> 
		<!-- iPhone 4 -->
		<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
		<!-- iPhone 5 -->
		<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />

		<!-- Page Title -->
		<title>Epsilon Elements | Mobile Framework Starter</title>

		<!-- Stylesheet Load -->
		<link href="styles/style.css"				rel="stylesheet" type="text/css">
		<link href="styles/framework-style.css" 	rel="stylesheet" type="text/css">
		<link href="styles/framework.css" 			rel="stylesheet" type="text/css">
		<link href="styles/bxslider.css"			rel="stylesheet" type="text/css">
		<link href="styles/swipebox.css"			rel="stylesheet" type="text/css">
		<link href="styles/icons.css"				rel="stylesheet" type="text/css">
		<link href="styles/retina.css" 				rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />
		<link href="styles/custom.css"				rel="stylesheet" type="text/css">
		<link href="styles/a.css"				rel="stylesheet" type="text/css">
		<link href="styles/b.css"				rel="stylesheet" type="text/css">
		


		<!--Page Scripts Load -->
		<script src="scripts/jquery.min.js"		 type="text/javascript"></script>	
		<script src="scripts/snap.js"			 type="text/javascript"></script>
		<script src="scripts/hammer.js"			 type="text/javascript"></script>	
		<script src="scripts/jquery-ui-min.js"   type="text/javascript"></script>
		<script src="scripts/subscribe.js"		 type="text/javascript"></script>
		<script src="scripts/contact.js"		 type="text/javascript"></script>
		<script src="scripts/jquery.swipebox.js" type="text/javascript"></script>
		<script src="scripts/bxslider.js"		 type="text/javascript"></script>
		<script src="scripts/colorbox.js"		 type="text/javascript"></script>
		<script src="scripts/retina.js"			 type="text/javascript"></script>
		<script src="scripts/custom.js"			 type="text/javascript"></script>
		<script src="scripts/custom2.js"		 type="text/javascript"></script>
		<script src="scripts/framework.js"		 type="text/javascript"></script>

	</head>
	<body>

		<div id="preloader">
			<div id="status">
				<p class="center-text">
					Loading the content...
					<em>Loading depends on your connection speed!</em>
				</p>
			</div>
		</div>



		<div class="all-elements">
			
			<?php include 'sidebar.php';?>
			   
			<div id="content" class="page-content">
				<div class="page-header">
					<p class="logo location">
						<img src="images/misc/logo.png" width="63">
					</p>
					<a href="#" class="deploy-sidebar"></a>
				</div>
				<div class="container">
					<select class="day">
					</select>
					<select class="orainizio">
					</select>
					<select class="orafine">
					</select>
				</div>
				<div class="container">
					<span class="custom-dropdown custom-dropdown--emerald">
						<select class="custom-dropdown__select custom-dropdown__select--emerald">
							<option>The Shawshank Redemption</option>
							<option>The Godfather</option>
							<option>Pulp Fiction</option>
							<option>The Good, the Bad and the Ugly</option>
							<option>12 Angry Men</option>
						</select>
					</span>
				</div>
				<div class="container result">
					<ul>
					</ul>
				</div>
				
				<div class="footer">
					<a href="#" class="footer-facebook"></a>
					<a href="#" class="footer-twitter"></a>
					<a href="#" class="footer-up go-up"></a>
					<em>All rights reserved</em>
				</div>     
			</div> 
		</div>
	</body>
</html>