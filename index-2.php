<?php 
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
?>
<!DOCTYPE html>
<html xml:lang="pl-pl" lang="pl-pl" dir="ltr">
	<head>
		<title>Rejestracja</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/form.css">
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
									<li><a href="log1.php">Zaloguj siÄ</a></li>
                                                                        <li><a href="index-2.php">Rejestracja</a></li>
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
                                    <div class="grid_4" id="wh">
                                        @
                                    </div>
					<div class="grid_4" id="account">
                                            <div>
						<h3>Rejestracja</h3>
						
                                                
                                                
                                                <form method="get" id="form">
                                                        <table>
                                                            <tr><td>ImiÄ</td><td>
                                                       <label class="imie">
                                                           <input type="text" name="imie" required=""/>
                                                       </label></td>
                                                            </tr><tr><td>Nazwisko</td><td>
                                                        <label class="nazwisko">
                                                            <input type="text" name="nazwisko" required="required" />
                                                        </label></td>
                                                            </tr>
                                                            <tr><td>Login</td><td>
                                                        <label class="login">
                                                            <input type="text" name="login" required="required"/>
							</label>
                                                                </td></tr>
                                                             <tr><td>HasÅo</td><td>
                                                        <label class="haslo">
                                                            <input type="password" name="haslo" required="required" />
							</label>
                                                                </td></tr>
                                                              <tr><td>E-mail</td><td>
                                                        <label class="mail">
                                                            <input type="email" name="email" required="required"/>
							</label>
                                                                </td></tr>
                                                              
                                                              </table>
                                                    
                                                             <input type="reset" class="btn" value="WyczyÅÄ" />
                                                                 
                                                                 <input type="submit" name="rej" value="Rejestracja" class="btn" />
                                                               
                                                              </form>
                                                        
                                                
                                                 <?php
                                                    include_once 'Kursy.php';
                                                    
                                                    if (filter_input(INPUT_GET, "rej")) {
                                                        Kursy::dodaj();
                                                    }       
                                                    
                                                    ?>
                                                
                                                
                                                
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