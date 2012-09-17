<?php
require_once('global.php');
// This file contains all the main site JSON, AJAX, and other Request Types.
$db = new DB;
class Request {
	
	public static function login_req($vars) {
		$email = $vars['email'];
		$pass = $vars['pass'];
		
		if(empty($email)||empty($pass)){
			echo "empty_fields";
		}else{
			
		}
	}
	
	public static function register_req($vars) {
		$first = $vars['first'];
		$last = $vars['last'];
		$email = $vars['email'];
		$pass = $vars['pass'];
		$dob = $vars['dob'];
		
		if(empty($first)||empty($last)||empty($email)||empty($dob)||empty($pass)){
			echo "empty_fields";
		}else{
			$first = strtolower(ucfirst($first));
			$last = strtolower(ucfirst($last));
			$name = "{$first} {$last}";
			
			//$query = $db->query("SELECT email FROM users WHERE email='{$email}'");
			
			//$reg = $db->prepare('INSERT INTO users (first, last, name, email, pass) VALUES ()');
			//$reg->execute(array());
		}
		
	}
	
}

?>