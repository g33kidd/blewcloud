<?php

// This file contains all of the Required Functions for backend code such as Security, Modes, Preview of Features, etc...

class Develop {
	
	
	public static function site_mode($mode) {
		switch($mode) { 
			case "development": error_reporting(E_ALL); break;
			case "public": error_reporting(0); break;
		}
	}
	
	public static function site_offline($online) {
		switch($online) {
			case 1: header("Location: offline.php"); break;
			case 0: echo "<meta name='site_info' content='site_is_online'>"; break;
		}
	}
	
	// More Functions go down here, just for site Maintanence Functions, Developer Functions, etc... ^^
	
}

?>