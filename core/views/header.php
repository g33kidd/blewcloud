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
						<a href="index" class="item">Home</a>
						<a href="about" class="item">About</a>
						<a href="team" class="item">Team</a>
						<a href="features" class="item">Features</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="user">
					<a class="item login">Login</a>
					<a class="item register">Register</a>
				</div>
				<? }else{ ?>
				<div class="navbar">
					
					<div class="navLinks">
						<a href="home" class="item">Stream</a>
						<a href="friends" class="item">Friends</a>
						<a href="notifications" class="item">Notifs</a>
						<a href="user" class="item">Apps</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="user">
					<a href="user" class="item login">Profile</a>
					<a href="logout" class="item register">Logout</a>
				</div>
				<? } ?>
				
			</div>
		</div>
		<!-- end headbar -->