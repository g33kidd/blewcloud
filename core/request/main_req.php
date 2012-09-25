<?php
require_once('/../global.php');

// This file contains all the main site JSON, AJAX, and other Request Types.

class Request {
	
	public static function login_req($vars) {
		global $db;
		$email = $vars['email'];
		$pass = $vars['pass'];
		
		if(empty($email)||empty($pass)){
			echo "empty_fields";
		}else{
			
			$query = $db->query("SELECT guid, first, username, password, salt, email FROM bc_users_entity WHERE 'username'='{$email}' OR 'email'='{$email}'");
			echo $count = $query->rowCount();
		}
	}
	
	public static function register_req($vars) {
		global $db;
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
			
			$query = $db->query("SELECT email FROM bc_users_entity WHERE email='{$email}' OR username='{$email}'");
			$count = $query->rowCount();
			
			if($count != "0") {
				echo "already_exists";
			}else{
				$code = rand(0,8);
				$pass = User::hashPass('sha512', $pass);
				// add dob and make timestamp
				
				$reg = $db->query("INSERT INTO bc_users_entity (guid, first, last, name, username, password, email, code) VALUES ('','{$first}','{$last}','{$name}','','','{$email}','')");
			}
		}
		
	}
	
}

?>