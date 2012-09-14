<?php
require_once('request/main_req.php');
// This file will check for requests and execute the proper function in core/request/main_req.php
// Edit to fit the proper OOP environment if Possible

if(isset($_POST['type'])) {
	
	$type = $_POST['type'];
	$vars = array();
	
	Switch($type) {
		case "login":
			
			$var = $type;
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			
			$vars = array(
				'type' => $type,
				'email' => $email,
				'pass' => $pass
			);
			
			Request::login_req($vars);
			
		break;
		case "login-frm":
			
			$var = $type;
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			
			$vars = array(
				'type' => $type,
				'email' => $email,
				'pass' => $pass
			);
			
			Request::login_req($vars);
			
		break;
		case "register":
			
			$var = $type;
			$first = $_POST['first'];
			$last = $_POST['last'];
			$dob = $_POST['dob'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			
			$vars = array(
				'type' => $type,
				'first' => $first,
				'last' => $last,
				'dob' => $dob,
				'email' => $email,
				'pass' => $pass
			);
			
			Request::register_req($vars);
			
		break;
	}
	
}

?>