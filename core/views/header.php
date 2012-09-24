<?php

// Main header.php file
Develop::site_offline(SITE_OFFLINE);
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Blewcloud - Home</title>
		<link rel="stylesheet" href="css/core.css" type="text/css" media="screen">
	</head>
	<body>
		<!-- start headbar -->
		<div class="headbar">
			<div class="container">
				<a href="#"><div class="logo left"></div></a>
				<div class="clear-no"></div>
				<? if(!Main::is_loggedin()){ ?>
				<div class="navbar">
					
					<div class="navLinks">
						<a href="index.php" class="item">Home</a>
						<a href="about.php" class="item">About</a>
						<a href="team.php" class="item">Team</a>
						<a href="features.php" class="item">Features</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="user">
					<div class="item login">Login</div>
					<div class="item register">Register</div>
				</div>
				<? }else{ ?>
				<div class="navbar">
					
					<div class="navLinks">
						<a href="index.php" class="item">Stream</a>
						<a href="about.php" class="item">Friends</a>
						<a href="team.php" class="item">Notifs</a>
						<a href="features.php" class="item">Apps</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="user">
					<div class="item login">Profile</div>
					<div class="item register">Logout</div>
				</div>
				<? } ?>
				
			</div>
		</div>
		<!-- end headbar -->