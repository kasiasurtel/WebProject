<?php
    session_start();
    if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
    
    //if (isset($_SESSION['username'])){
      //  header("Location: log2.php");
    //}
    
?>
<!DOCTYPE html>
<html xml:lang="pl-pl" lang="pl-pl" dir="ltr">
<head>
		<title>Logowanie</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/form.css">
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
    
    
    
    
    
    
    
    
    <div class="content">
				<div class="container_12">
					<div class="grid_4">
						<h3>Dolacz do nas</h3>
						<ul class="list1 color1">
							<li>Kursy programowania w wielu jÄzykach</li>
							<li>NajwiÄksza baza kursÃ³w w Polsce</li>
							<li>Profesjonalni mentorzy</li>
							<li>Wiedza w zasiÄgu rÄki</li>
						</ul>
                                                <a href="index-2.php" class="btn">Zarejestruj siÄ</a>
					</div>
					<div class="grid_4" id="account">
    
    
    
    
    

  <div>
    <div id="account">
      <div>
          <h3>Logowanie</h3>
        <form action="" method="post" id="form">
          <table>
            <tr>
              <td><label for="login_input">Login</label></td>
                <td><input type="text" id="login" name="login" value="<?php echo ((isset($_POST["login"]))?htmlspecialchars($_POST["login"]):""); ?>"></td>
            </tr>
            <tr>
              <td><label for="haslo_input">HasÅo</label></td>
              <td><input type="password" id="haslo" name="haslo"></td>
            </tr>

          </table>
          <input type="submit" name="zaloguj" value="Zaloguj" class="btn">
        </form>
      </div>
    </div>
  </div>
</div>
                                    <div class="clear"></div>
    
    <?php
        include_once 'Kursy.php';
        if (filter_input(INPUT_POST, "zaloguj")) {
            Kursy::zaloguj();
        }
        
        ?>
                                </div></div></div>
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