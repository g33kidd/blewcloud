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
			case 1: header("Location: offline"); break;
			case 0: return; break;
		}
	}
	
	public static function test_session($mode) {
		switch($mode) {
			case "development":
				$_SESSION['user'] = 1;
				$_SESSION['test'] = true;
				return true;
			break;
			case "production":
				return false;
			break;
		}
	}
	
	public function global_site_message() {
		
	}
	// More Functions go down here, just for site Maintanence Functions, Developer Functions, etc... ^^
}

?>