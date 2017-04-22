<?php
require_once "UserLog.php";
session_start(); 
if (!isset($_SESSION['username'])) {header('index.php');} ?>
<!DOCTYPE html>
<html xml:lang="pl-pl" lang="pl-pl" dir="ltr">
	<head>
		<title>Moje kursy</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/wh.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script>
			$(document).ready(function(){
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
	<body class="" id="top">
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
                                                             <li><a href="mojek.php">Moje kursy</a></li>
                                                             <li><a href="dostepne.php">DostÄpne kursy</a></li>
                                     <li><a href="logout.php" name="wyloguj">Wyloguj</a></li>

									<li><a href="index-4.php">Kontakt</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</header>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h2 class="center">Witaj, <?php 
                echo $_SESSION['username'];
                ?>!</h2>
						
					</div>
					<div class="clear"></div>
					
                                        
                                        
                                        
                                        
					<div class="clear"></div>
					<div class="grid_7">
						<h3>Twoje kursy</h3>
						<?php   include_once 'Kursy.php';
                                                Kursy::mojek($_SESSION['username']);
                                                ?>
					</div>
					<div class="grid_4 prefix_1">
						<h3>Kursy, ktore moga Ci sie spodobac</h3>
						<?php Kursy::niemojek($_SESSION['username']);
                                                ?>
					</div>
					<div class="clear"></div>
					
				
			
				</div>
			</div>
		</div>
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
	</body>
</html>