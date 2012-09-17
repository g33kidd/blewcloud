<?php

// Main header.php file

?>

<!-- Start Header -->
<!DOCTYPE html>
<html>
	<head>
        <title></title>
        
        <!-- Meta -->
        <? Develop::site_offline(SITE_OFFLINE); ?>
        <style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
    	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css">
    </head>
    
    <body>
    
    	<div class="navbar navbar-inverse navbar-fixed-top">
        	<div class="navbar-inner">
            	<div class="container">
                	<a class=" btn btn-navbar">
                    	<span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/blewcloud">Blewcloud</a>
                    <?php
                    if(Main::is_loggedin() == 1) {
                    	
                    	?>
                    	
                    	<div class="nav-collapse collapse">
	                    	<ul class="nav">
	                        	<li><a href="#home">Home</a></li>
	                            <li><a href="#contact">What's new?</a></li>
	                        </ul>
	                        <div class="btn-group pull-right">
	                        	<a class="btn btn-info" href="#"><i class="icon-user icon-white"></i> <? User::get_name(); ?></a>
	                        	<a class="btn btn-info" href="#" data-toggle="dropdown"><span class="caret"></span></a>
	                        	<ul class="dropdown-menu">
	                        		<li><a href="user"><i class="icon-eye-open"></i> View Profile</a></li>
	                        	</ul>
	                        	
	                        	
	                        </div>
	                    </div>
	                    
						<?
						
                    }else{
                    	
                    	?>
                    	
                    	<div class="nav-collapse collapse">
	                    	<ul class="nav">
	                        	<li><a href="#about">About</a></li>
	                            <li><a href="#contact">Contact Us</a></li>
	                            <li class="dropdown">
	                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs Available <b class="caret"></b></a>
	                                <ul class="dropdown-menu">
	                                	<li><a href="#designer">Web Designer/Graphics</a></li>
	                                    <li><a href="#designer">PHP/MySQL Development</a></li>
	                                    <li><a href="#designer">Front-End Development</a></li>
	                                    <li><a href="#designer">Database Management</a></li>
	                                </ul>
	                            </li>
	                        </ul>
	                        <div class="navbar-form pull-right">
	                        	<input id="email" class="span2" type="text" placeholder="Email">
	                           	<input id="pass" class="span2" type="password" placeholder="Password">
	                            <button id="login" class="btn" type="submit">Login</button>
	                            <a href="register" role="button" class="btn">Register</a>
	                        </div>
	                    </div>
	                    
                    	<?
                    	
                    }
                    ?>
                </div>
            </div>
        </div>
<!-- End Header -->