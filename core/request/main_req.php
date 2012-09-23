<?php
require_once('../global.php');

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
			
			$pass = hash('sha512', $pass);
			$dob = 
			
			$query = $db->query("SELECT email FROM bc_users_entity WHERE email='{$email}'");
			$count = $query->rowCount();
			
			if($count != "0") {
				echo "already_exists";
			}else{
				$array = array(
					'guid' => "",
					'first' => $first,
					'last' => $last,
					'name' => $name,
					
				);
				$reg = $db->query("INSERT INTO bc_users_entity (guid, first, last, name, username, password, salt, email, code) VALUES (?, ?, ?, ?)", $array);
			}
			
			
			// $reg = $db->prepare('INSERT INTO users (first, last, name, email, pass) VALUES ()');
			// $reg->execute(array());
		}
		
	}
	
}

$vars = array(
	'first' => "Joshua",
	'last' => "kidd",
	'dob' => "848275200",
	'email' => "kiddj2015@gmail.com",
	'pass' => "JoshuaK123"
);
Request::login_req($vars);

?>