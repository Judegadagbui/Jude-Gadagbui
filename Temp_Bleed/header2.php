<?php
	session_start();
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
        <title>Bleed University |Student Database</title>
		<link rel="shortcut icon" href="images/favicon.ico" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<header id="header">
				<a href="index.php"><h1>bleed</h1></a>
				<nav id="nav">
					<?php
					if(isset($_SESSION['hid'])) {
					
					echo'
					<ul>

						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="search.php">Access</a></li> 
						<li><form action="includes/logout.php" method= "post">
						<button class="button special" type="submit" name="submit">Log Out</button>
						</form></li>
					</ul>';
					} else {
						echo'<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="login.php" class="button special">Login</a></li>
					</ul>';
					}
					?>
				</nav>
			</header>
