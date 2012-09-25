<?php

// This file holds all code for Database connections, Functions, etc...

class DB extends PDO {
	
	// variables
	public $driver;
	public $host;
	public $dbname;
	public $user;
	public $pass;
	
	public function __construct() {
		
		## database settings
		$this->driver = DB_DRIVER;
		$this->host = DB_HOST;
		$this->dbname = DB_NAME;
		$this->user = DB_USER;
		$this->pass = DB_PASS;
		
		## database connect
		$dsn = $this->driver . ':dbname=' . $this->dbname . ';host=' . $this->host;
		
 	 	## if can't connect throw exception
		try {
			parent::__construct( $dsn, $this->user, $this->pass );
		} catch (PDOException $e) {
			throw new PDOException($e);
		}
		
	}
	
	/*
	public static function add_user($vars) {
		$check = $db->query("SELECT id,user,email FROM users WHERE email='{$vars['email']}'");
		$result = $db->fetch(PDO::FETCH_ASSOC);
		echo $result;
	}
	
	public static function del_user($guid) {
		try {
			$query = $db->query("DELETE FROM bc_user_entity WHERE guid='{$guid}'");
			$results = $db->fetch(PDO::FETCH_ASSOC);
		}catch{
			$err = $e->exception();
		}
	}
	
	public static function reg_user($vars) {
		
	}
	
	functions not needed for now
	leave them commented for future use
	*/
}

?>