<?php
/*
*	User Class contains all functions for the user
*	and the UI for the User. Including grabbing user information
*	@todo add salt function
*	@todo modify hashPass() function to be more secure
*	@todo add privacy to getUserInfo() function
*/
class User {
	
	public static function hashPass($ha, $pass) {
		// make function more secure before release
		// should also add a salt function
		if($pass == "") {
			return false;
		}else{
			$pass = hash($ha, $pass);
			return $pass;
		}
	}
	
	public static function getUIinfo($guid) {
		global $db;
		if($guid==""){
			return false;
		}else{
			$uinfo = $db->query("SELECT first, last, name, username, email FROM bc_user_entity WHERE guid='{$guid}'");
			$user = $uinfo->fetch(PDO::FETCH_ASSOC);
			return $user;
		}
	}
	
	public static function getUserInfo($guid) {
		// maybe add privacy options???
		global $db;
		if(isset($_SESSION['guid'])){
			$info = $db->query("SELECT * FROM bc_userinfo_entity WHERE guid='{$guid}'");
			$userInfo = $db->fetch(PDO::FETCH_ASSOC);
			return $userInfo;
		}
	}
	
	public static function login($vars) {
		global $db;
		if(!empty($vars)){
			$login = $vars['email'];
			$pass = $vars['pass'];
		}
	}
	
}

?>