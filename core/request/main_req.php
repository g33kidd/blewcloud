<?php

// This file contains all the main site JSON, AJAX, and other Request Types.

class Request {
	
	public static function login_req($vars) {
		$email = $vars['email'];
		$pass = $vars['pass'];
		
		
	}
	
	public static function register_req($vars) {
		$first = $vars['first'];
		$last = $vars['last'];
		$name = $vars['name'];
		$email = $vars['email'];
		$pass = $vars['pass'];
		$dob = $vars['dob'];
		
	}
	
}

?>