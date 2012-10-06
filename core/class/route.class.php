<?php

// This file contains all Site Routing Functions

class Route {
	
	public static function get_uri() {
		$uri = explode("/", $_SERVER["REQUEST_URI"]);
		return $uri[2];
	}
	
	public static function something() {
		$uri = self::get_uri();
		if($uri == ""){ $uri = "index"; }
		
		if(Main::is_loggedin()){
			$inc = "core/views/home.php";
			$inc2 = "core/views/" . $uri . ".php";
		}else{
			$inc = "core/views/" . $uri . ".php";
			$inc2 = "core/views/index.php";
		}
		
		switch($uri) {
			case "register": include($inc); break;
			case "login": include($inc); break;
			case "index": include($inc); break;
			case "user": include($inc2); break;
			case "friends": include($inc2); break;
			case "notifications": include($inc2); break;
			case "requests": include($inc2); break;
			case "settings": include($inc2); break;
		}
		
	}
	
}

?>