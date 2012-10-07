<?php

// Main header.php file
Develop::site_offline(SITE_OFFLINE);
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>Dynamic Title - Home</title>
		
		<link rel="stylesheet" href="css/core.css" type="text/css">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/controls.css" type="text/css">
		<link rel="stylesheet" href="css/grid.css" type="text/css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	</head>
	
		<!-- start headbar -->
		<? if(Main::is_loggedin()){ ?>
			
		<? }else{ ?>
			
		<? } ?>
		<!-- end headbar -->