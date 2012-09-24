<?php

// This file contains most Site Backend Functions:
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