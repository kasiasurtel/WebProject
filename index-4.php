<?php
require_once "UserLog.php";
session_start(); ?>
<!DOCTYPE html>
<html xml:lang="pl-pl" lang="pl-pl" dir="ltr">
	<head>
		<title>Kontakt</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/TMForm.js"></script>
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
					<div class="grid_5">
						<h3>Kontakt</h3>
						<div class="text1">OdwiedÅº nas w naszej placÃ³wce.</div>
						The Company Name Inc. <br>
						9870 St Vincent Place, <br>
						Glasgow, DC 45 Fr 45. <br>
						Telephone: +1 800 603 6035 <br>
						FAX: +1 800 889 9898 <br>
						E-mail: <span class="color1"><a href="mailto:surtel.katarzyna@gmail.com">mail@demolink.org</a></span>
					</div>
					<div class="grid_6 prefix_1">
						<h3>Formularz kontaktowy</h3>
						<form id="form">
							<div class="success_wrapper">
								<div class="success-message">WiadomoÅÄ zostaÅa wysÅana!</div>
							</div>
							<label class="name">
								<input type="text" placeholder="ImiÄ *" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*To pole jest wymagane!</span>
								<span class="error-message">*Podaj swoje imiÄ!</span>
							</label>
							<label class="email">
								<input type="text" placeholder="E-mail *" data-constraints="@Required @Email" />
								<span class="empty-message">*To pole jest wymagane!</span>
								<span class="error-message">*Podaj prawidÅowy e-mail!</span>
							</label>
							<label class="phone">
								<input type="text" placeholder="Nr telefonu" data-constraints="@JustNumbers"/>
								<span class="error-message">*Podaj prawidÅowy numeer!</span>
							</label>
							<label class="message">
								<textarea placeholder="WiadomoÅÄ *" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*To pole jest wymagane!</span>
								<span class="error-message">*WiadomoÅÄ jest za krÃ³tka!</span>
							</label>
							<div>
								<div class="clear"></div>
								<div class="btns">
									<a href="#" data-type="reset" class="btn">WyczyÅÄ</a>
									<a href="#" data-type="submit" class="btn">WyÅlij</a>
								</div>
							</div>
						</form>
					</div>
					<div class="clear"></div>
                                        <div class="grid_12">
						<h3>Znajdz nas</h3>
						<div class="map">
							<figure class="">
								<iframe src="http://www.citymaps.ie/create-google-map/map.php?width=100%&amp;height=600&amp;hl=en&amp;q=Nadbystrzycka%2038%2C%20Lublin%2C%20Polska+(Strona%20z%20kursami)&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=A&amp;output=embed" style="border:0"></iframe>
							</figure>
						</div>
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