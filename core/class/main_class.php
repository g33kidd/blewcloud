<?php

// This file contains all Site Functions:
// Users, Databases, Posts, Friends, Actions, etc...
// Please comment each function, and make sure the MODE of the function is set correctly if Required. - Currently no MODE required.
// When modes become available, there will be option for developers mode or public mode for a function/action.

class Main {

	public static function is_loggedin() {
		if(isset($_SESSION['user'])){
			return 1;
		}else{
			return 0;
		}
	}
	
}

?>