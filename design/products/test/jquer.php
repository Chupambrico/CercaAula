<?php $page='j'; ?>
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

        <div class="decoration"></div>

        <div class="container no-bottom">
        	<h4 class="heading-icon">Checkboxes and Radios</h4>
            <p>It's important to have more than one style of checkbox, and radio! So we included a couple of sets!</p>
            <div class="column">
                <div class="one-half">
                    <a class="checker checkbox-v1" href="#">Check</a>
                    <a class="checker checkbox-v2" href="#">Check</a> 
                    <a class="checker checkbox-v3" href="#">Check</a>         
                </div>
                <div class="one-half">
                    <a class="checker radio-v1" href="#">Check</a>
                    <a class="checker radio-v2" href="#">Check</a> 
                    <a class="checker checkbox-v4" href="#">Check</a>       
                </div>
            </div>
        </div>
        <div class="decoration"></div>

    	<!--Tabs-->
    	
        <div class="container">
        	<h4 class="heading-icon">Tabs!</h4>
            <p>Tabs are just awesome! So much information in such little space, makes the page compact, clean, and fast loading!</p>
            <ul class="tab" id="tab">
                <li class="active"><a href="#one-tab" class="tab-but">But 1</a></li>
                <li><a href="#two-tab" class="tab-but">But 2</a></li>
                <li><a href="#three-tab" class="tab-but">But 3</a></li>
            </ul>
            <div class="tab-content" id="one">
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, 
                    or randomised words which don't look.
                </p>
            </div>
            <div class="tab-content" id="two" style="display: none;">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer. 
                </p>
            </div>
        
            <div class="tab-content" id="three" style="display: none;">
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, 
                    or randomised words which don't look even slightly.
                </p>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="decoration"></div>

    	<!--Notifications-->
        
        <div class="container no-bottom">
        	<h4 class="heading-icon">Notifications!</h4>
            <p>We all find use for these! Maybe something changed, you want your users to know that some part of your page changed! These are a simple way of doing so!</p>

            <div class="small-notification green-notification">
                <p>It's good! We love notifications!</p><a href="#">x</a>
            </div>
            
            <div class="small-notification red-notification">
                <p>Something bad happened, mkay!</p><a href="#">x</a>
            </div>
            
            <div class="small-notification blue-notification">
                <p>Some information here!</p><a href="#">x</a>
            </div>
            
            <div class="small-notification yellow-notification">
                <p>A warning notification!</p><a href="#">x</a>
            </div>
            
            <div class="notification-box red-box">
                    <h4>ALL IS GOOD! I'M IN LOVE!</h4>
                    <a class="close-notification" href="#">x</a>
                <div class="clear"></div>
                <p>
                    Now now, relax. This is just a notification demo! No need 
                    to worry. It's not the real thing! This is just a simple 
                    notification not the apocalypse!  
                </p>  
            </div>    
            
            <div class="notification-box blue-box">
                    <h4>ALL IS GOOD! I'M IN LOVE!</h4>
                    <a class="close-notification" href="#">x</a>
                <div class="clear"></div>
                <p>
                    Now now, relax. This is just a notification demo! No need 
                    to worry. It's not the real thing! This is just a simple 
                    notification not the apocalypse!  
                </p>  
            </div>
            
            <div class="notification-box yellow-box">
                    <h4>ALL IS GOOD! I'M IN LOVE!</h4>
                    <a class="close-notification" href="#">x</a>
                <div class="clear"></div>
                <p>
                    Now now, relax. This is just a notification demo! No need 
                    to worry. It's not the real thing! This is just a simple 
                    notification not the apocalypse!  
                </p>  
            </div>   
           
            <div class="notification-box green-box">
                    <h4>ALL IS GOOD! I'M IN LOVE!</h4>
                    <a class="close-notification" href="#">x</a>
                <div class="clear"></div>
                <p>
                    Now now, relax. This is just a notification demo! No need 
                    to worry. It's not the real thing! This is just a simple 
                    notification not the apocalypse!  
                </p>  
            </div>  
       	</div>
        
        <div class="decoration"></div>

    	<!--Toggles-->
        
        <div class="container no-bottom">
            <h4 class="heading-icon">Toggles!!</h4>
            <p>Maybe you like their design, or the functionality drives you nuts, these are important and they are coded in such fashion you can use as many as you wish on the same page!</p>
        </div>
        
        <div class="container no-bottom">
            <div class="toggle-container-v3"> 
                <div class="toggle-v3">
                    <a class="show-toggle-v3" href="#" style="display: none;">Content Is Shown!</a>
                    <a class="hide-toggle-v3" href="#">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v3" style="display: none;">
                        <div class="toggle-decoration-v3"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>



        <div class="container no-bottom">
            <div class="toggle-container-v4"> 
                <div class="toggle-v4">
                    <a class="show-toggle-v4" href="#" style="display: none;">Content Is Shown!</a>
                    <a class="hide-toggle-v4" href="#">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v4" style="display: none;">
                        <div class="toggle-decoration-v4"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>

        <div class="container no-bottom">
            <div class="toggle-container-v5"> 
                <div class="toggle-v5">
                    <a class="show-toggle-v5" href="#" style="display: none;">Content Is Shown!</a>
                    <a class="hide-toggle-v5" href="#">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v5" style="display: none;">
                        <div class="toggle-decoration-v5"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>

        <div class="container no-bottom">
            <div class="toggle-container-v2"> 
                <div class="toggle-v2">
                    <a class="show-toggle-v2" href="#" style="display: none;">Content Is Shown!</a>
                    <a class="hide-toggle-v2" href="#">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v2" style="display: none;">
                        <div class="toggle-decoration-v2"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>
            
        <div class="container no-bottom">
            <div class="toggle-container-v1"> 
                <div class="toggle-v1">
                    <a class="show-toggle-v1" href="#" style="display: none;">Content Is Shown!</a>
                    <a class="hide-toggle-v1" href="#">Content Is Hidden!</a>
                    <div class="clear"></div>
                    <div class="toggle-content-v1" style="display: none;">
                        <div class="toggle-decoration-v1"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                             when an unknown printer took a galley of type and scrambled it to make a type 
                             specimen book. It has survived not only five centuries, but also the leap 
                             into electronic typesetting, remaining essentially unchanged. It was 
                             popularised in the 1960s with the release of Letraset sheets containing 
                             Lorem Ipsum passages, and more recently with desktop publishing software
                             like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div> 
                </div> 
            </div>
        </div>
        
        <div class="decoration"></div>
        
        <!--Dropdown-->
        
        <div class="container no-bottom">
        <h4 class="heading-icon">Dropdown menu's?</h4>
        <p> Most mobile templates only give you one drop down menu, you can use as many as you want with ours</p>
        
        	<div class="dropdown-menu">
            	<a class="dropdown-deploy" href="#"><em class="left-dropdown bg-light"></em>DEPLOY MENU</a>
                <a class="dropdown-hidden" href="#" style="display: none;"><em class="left-dropdown bg-light"></em>HIDE MENU</a>
                <a class="dropdown-item bg-light" href="#" style="display: none;">Dropdown item one</a>
                <a class="dropdown-item bg-light" href="#" style="display: none;">Dropdown item two</a>
                <a class="dropdown-item bg-light" href="#" style="display: none;">Dropdown item three</a>
                <div class="dropdown-bottom-border"></div>
            </div>     
        </div>
        
        <div class="decoration"></div>
        
        <!--Sliding box-->
        
        <div class="container no-bottom">
            <h4 class="heading-icon">Cute Slider?</h4>
            <p>Try this for a great anti bot method! Interaction required!</p>
                <div class="sliding-door">
                    <div class="sliding-door-top">
                        <a href="#">
                            <em class="bg-light"></em>
                            Tap for our phone number!
                        </a>
                    </div>    
                    <div class="sliding-door-bottom">
                        <a href="tel:+12 345 7890">
                            <em class="bg-light"></em>
                            <strong>Call us:</strong> 
                            +1 555 354 7890
                        </a>
                    </div>
                </div>
    		<div class="sliding-door-clear"></div>
    	</div>
        
        <div class="container no-bottom">
                <div class="sliding-door">
                    <div class="sliding-door-top">
                        <a href="#">
                            <em class="bg-light"></em>
                            Tap for our mail address!
                        </a>
                    </div>    
                    <div class="sliding-door-bottom">
                        <a href="mailto:+12 345 7890">
                            <em class="bg-light"></em>
                            <strong>Mail us:</strong> 
                            mail@domain.com
                        </a>
                    </div>
                </div>
        	<div class="sliding-door-clear"></div>
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