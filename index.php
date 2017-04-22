<?php
require_once "UserLog.php";
session_start(); ?>
<!DOCTYPE html>
<html xml:lang="pl-pl" lang="pl-pl" dir="ltr">

	<head>


		<title>Strona z kursami</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/countdown.css">
		<link rel="stylesheet" href="css/style_common.css" />
		<link rel="stylesheet" href="css/style4.css" />
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '27.86458333333333%',
					caption: true,
					navigation: true,
					fx: 'simpleFade'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->

			<header>
				<div class="container_12">
					<div class="grid_12">
						<div class="socials">
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-google-plus"></a>
							<a href="#" class="fa fa-instagram"></a>
						</div>
						<h1>
							<a href="index.php">
								<img src="images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
						<div class="menu_block">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.php">Strona gÅÃ³wna</a></li>
									<li><a href="index-1.php">O nas</a></li>
                                                                        <?php if (isset($_SESSION['username'])) { 
                                                                       echo '<li><a href="mojek.php">Moje kursy</a></li>';
                                                                       echo '<li><a href="dostepne.php">DostÄpne kursy</a></li>';
                                                                       echo '<li><a href="logout.php" name="wyloguj">Wyloguj</a></li>';
                                                                       } else {

                                                                           echo '<li><a href="log1.php">Zaloguj siÄ</a></li>';
                                                                           echo '<li><a href="index-2.php">Rejestracja</a></li>';
                                                                       } ?>
									
									<li><a href="index-4.php">Kontakt</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</header>
			<div class="slider_wrapper">
				<div id="camera_wrap" class="">
					<div data-src="images/slide.jpg">
						<div class="caption fadeIn">
							Kurs PHP
						</div>
					</div>
					<div data-src="images/slide1.jpg">
						<div class="caption fadeIn">
							Kurs Java
						</div>
					</div>
					<div data-src="images/slide2.jpg">
						<div class="caption fadeIn">
							Kurs MySQL
						</div>
					</div>
				</div>
			</div>
<?php
if (isset($_SESSION['username'])) {                                                                   
} else {
echo '<script type="text/javascript"> ';
echo 'var alerted = localStorage.getItem(\'alerted\') || \'\'; ';
echo 'if (alerted != \'yes\') { alert("Ta strona uÃÂ¼ywa ciasteczek!"); localStorage.setItem(\'alerted\',\'yes\');}</script>';
}
?>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h2 class="center">Naucz sie programowania juz dzis!</h2>
						<div class="count_wrap">
							<div class="clear"></div>
							<a href="index-2.php">DoÅÄcz do nas</a>
						</div>
					</div>
					<div class="clear"></div>
					
                                        
                                        
                                        
                                        
					<div class="clear"></div>
					<div class="grid_7">
						<h3>Witaj!</h3>
						<img src="images/page1_img4.jpg" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<p>Strona z kursami&trade; jest stronÄ zawieraÄcÄ najwÄkszÄ bazÄ kursÃ³w programowania oraz szeroko pojÄtej informatyki w Polsce.</p>
						</div>
						<div class="clear sep__1"></div>
						Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.
					</div>
					<div class="grid_4 prefix_1">
						<h3>Najblizsze wyklady LIVE</h3>
						<div class="news">
							<time datetime="2014-01-01">30<span>STY</span></time>
							<div class="extra_wrapper">
								<p class="color1"><a href="#">Magna non nunc tristique rhoncuseri </a></p>
								Aliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibuste.
							</div>
						</div>
						<div class="news">
							<time datetime="2014-01-01">03<span>LUT</span></time>
							<div class="extra_wrapper">
								<p class="color1"><a href="#">Tagna non nunc tristique rhoncuserr </a></p>
								Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.
							</div>
						</div>
					</div>
					<div class="clear"></div>
					
				
			
				</div>
			</div>
		</div>
         
            <?php
        include_once 'Kursy.php';
        if (filter_input(INPUT_GET, "wyloguj")) {
            Kursy::wyloguj();
        }

        
        ?>
     
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_logo">
						<a href="index.php">Strona z kursami</a>
					</div>
					
					<div class="copy">
						<span>Strona z kursami &copy; 2017</span>
					
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
		<script src="js/jquery.countdown.js"></script>
		<script src="js/cd_config.js"></script>
		<script src="js/modernizr.custom.69142.js"></script>
		<script type="text/javascript">
			Modernizr.load({
				test: Modernizr.csstransforms3d && Modernizr.csstransitions,
				yep : ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','js/jquery.hoverfold.js'],
				nope: 'css/fallback.css',
				callback : function( url, result, key ) {
					if( url === 'js/jquery.hoverfold.js' ) {
						$( '#grid' ).hoverfold();
					}
				}
			});
		</script>


	</body>
</html>