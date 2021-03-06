﻿<?php
require_once "UserLog.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>O nas</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
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
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_4">
						<h3>O nas</h3>
						<img src="images/page2_img.jpg" alt="" class="img_inner">
						<p class="color1">
							<a href="#">Lamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert</a>
						</p>
						Ecommodo re luctus libero. Praesent faucibusertulomi malesuada cibuste. Donec laoreet metus id laoreetert malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed ertoli molo Curabitur vel lorem sit amet nulla ullamcorper<br>
						<a href="index-4.php" class="btn">Skontaktuj siÄ z nami</a>
					</div>
					<div class="grid_4">
						<h3>Najpopularniejsze kursy</h3>
						<ul class="list">
							<li>
								<div class="list_count">1</div>
								<div class="extra_wrapper">
									<p class="color1"><a href="#"><?php include_once 'Kursy.php'; Kursy::kursy1(); ?></a></p>
									<?php  Kursy::kursy1o(); ?>
								</div>
							</li>
							<li>
								<div class="list_count">2</div>
								<div class="extra_wrapper">
									<p class="color1"><a href="#"><?php  Kursy::kursy2(); ?></a></p>
									<?php  Kursy::kursy2o(); ?>
								</div>
							</li>
							<li>
								<div class="list_count">3</div>
								<div class="extra_wrapper">
									<p class="color1"><a href="#"><?php  Kursy::kursy3(); ?> </a></p>
									<?php  Kursy::kursy3o(); ?>
								</div>
							</li>
						</ul>
					</div>
					<div class="grid_4">
						<h3>Nasi specjalisci</h3>
						<div class="block2">
							 <div class="grid_2 alpha"><img src="images/page2_img1.jpg" alt=""></div>
							 <div class="grid_2 omega"><img src="images/page2_img2.jpg" alt=""></div>
						</div>
						<div class="block2">
							 <div class="grid_2 alpha"><img src="images/page2_img3.jpg" alt=""></div>
							 <div class="grid_2 omega"><img src="images/page2_img4.jpg" alt=""></div>
						</div>
						<div class="block2">
							<div class="grid_2 alpha"><img src="images/page2_img5.jpg" alt=""></div>
							<div class="grid_2 omega"><img src="images/page2_img6.jpg" alt=""></div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<div class="hor_separator hor__1"></div>
						<h3>Opinie naszych kursantow</h3>
					</div>
					<div class="clear"></div>
					<div class="grid_4">
						<blockquote class="bq1">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna... </p>
							<div class="alright">Jola Lojalna</div>
						</blockquote>
					</div>
					<div class="grid_4">
						<blockquote class="bq1">
							<p>Dorem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magwe...</p>
							<div class="alright">Zenon Zenon</div>
						</blockquote>
					</div>
					<div class="grid_4">
						<blockquote class="bq1">
							<p>Gorem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctoro magndales...</p>
							<div class="alright">Filip Kowalski</div>
						</blockquote>
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