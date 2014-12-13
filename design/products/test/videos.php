<?php $page='v'; ?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<!--Declare page as mobile friendly --> 
<meta content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" name="viewport">
<!-- Declare page as iDevice WebApp friendly -->
<meta content="yes" name="apple-mobile-web-app-capable">
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link href="images/splash/splash-icon.png" sizes="114x114" rel="apple-touch-icon-precomposed"> 
<!-- iPhone 3, 3Gs -->
<link media="screen and (max-device-width: 320px)" href="images/splash/splash-screen.png" rel="apple-touch-startup-image"> 
<!-- iPhone 4 -->
<link media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" href="images/splash/splash-screen@2x.png" rel="apple-touch-startup-image"> 
<!-- iPhone 5 -->
<link href="images/splash/splash-screen@3x.png" sizes="640x1096" rel="apple-touch-startup-image">

<!-- Page Title -->
<title>Epsilon Elements | Mobile Framework Starter</title>

<!-- Stylesheet Load -->
<link type="text/css" rel="stylesheet" href="styles/style.css">
<link type="text/css" rel="stylesheet" href="styles/framework-style.css">
<link type="text/css" rel="stylesheet" href="styles/framework.css">
<link type="text/css" rel="stylesheet" href="styles/bxslider.css">
<link type="text/css" rel="stylesheet" href="styles/swipebox.css">
<link type="text/css" rel="stylesheet" href="styles/icons.css">
<link media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" rel="stylesheet" href="styles/retina.css">


<!--Page Scripts Load -->
<script type="text/javascript" src="scripts/jquery.min.js"></script>	
<script type="text/javascript" src="scripts/snap.js"></script>
<script type="text/javascript" src="scripts/hammer.js"></script>	
<script type="text/javascript" src="scripts/jquery-ui-min.js"></script>
<script type="text/javascript" src="scripts/subscribe.js"></script>
<script type="text/javascript" src="scripts/contact.js"></script>
<script type="text/javascript" src="scripts/jquery.swipebox.js"></script>
<script type="text/javascript" src="scripts/bxslider.js"></script>
<script type="text/javascript" src="scripts/colorbox.js"></script>
<script type="text/javascript" src="scripts/retina.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" src="scripts/framework.js"></script>

</head>
<body>

<div id="preloader" style="display: none;">
	<div id="status" style="display: none;">
    	<p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>



<div class="all-elements">
    
    <?php include './sidebar.php';?>
       
    <div class="page-content" id="content">
        <div class="page-header">
            <p class="logo">
                <img width="63" src="images/misc/logo.png">
            </p>
            <a class="deploy-sidebar" href="#"></a>
        </div>
        
       <div class="container no-bottom">
            <div class="portfolio-item-full-width">
				<iframe src="http://www.youtube.com/embed/G_G8SdXktHg" class="responsive-video image-decoration"></iframe>
                <h5 class="uppercase">A full width portfolio item!</h5>
                <p>We like portfolios a lot! We've optimized them to the extreme to make them work like a charm on mobiles!</p>
        	</div>
            <div class="decoration"></div>
        	<div class="portfolio-item-full-width">
				<iframe src="http://player.vimeo.com/video/7449107" class="responsive-video image-decoration"></iframe> 
				<h5 class="uppercase">A full width portfolio item!</h5>
                <p>We like portfolios a lot! We've optimized them to the extreme to make them work like a charm on mobiles!</p>
        	</div>
        </div>	
        <div class="footer">
        	<a class="footer-facebook" href="#"></a>
            <a class="footer-twitter" href="#"></a>
            <a class="footer-up go-up" href="#"></a>
            <em>All rights reserved</em>
        </div> 
	</div>
</div>


































<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><div id="cboxNext" style="float: left;"></div><div id="cboxPrevious" style="float: left;"></div><div id="cboxSlideshow" style="float: left;"></div><div id="cboxClose" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>