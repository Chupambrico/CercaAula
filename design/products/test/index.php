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
		<link href="styles/a.css"					rel="stylesheet" type="text/css">
		


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
				<div class="wrapper">
					<div class="page-header">
						<p class="logo location custom-location">
						</p>
						<a href="#" class="deploy-sidebar"></a>
					</div>
					<?php
					$useragent=$_SERVER['HTTP_USER_AGENT'];
					if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
						include 'selectMobile.php';
					}else{
						include 'selectDesktop.php';
					}
					?>
					<div class='decoration'></div>
					<div class="container result">
						<ul>
						</ul>
					</div>
				</div>
				<div id="footer" class="footer">
					Se non sono presenti aule libere <br>nel'intervallo di tempo da voi scelto potete sempre usufruire di <a href="http://web.unitn.it/biblioteca/10221/biblioteca-centrale" target="_blank">biblioteche e aule studio!</a>
				</div>
			</div>
		</div>
	</body>
</html>