/* Custom jQuery */

$(document).ready( function() {
	
	//form variables
	var loginE = $('#loginEmail');
	var loginP = $('#loginPass');
	var loginBtn = $('#loginBtn');
	var regF = $('#regFirst');
	var regL = $('#regLast');
	var regE = $('#regEmail');
	var regP1 = $('#regPass1');
	var regP2 = $('#regPass2');
	var regBtn = $('#regBtn');
	var invE = $('#invEmail');
	var invBtn = $('#invBtn');
	var info = $('#info');
	var type;
	
	//validate fields
	loginE.keyup(function() { loginEmail(); });

	loginBtn.click(function() {
		login();
		
	});
	invBtn.click(function() {
		invite();
	});
	​
	$("#profile-imgage img").draggable({
	    stop: function(ev, ui) {
	        var hel = ui.helper, pos = ui.position;
	        //horizontal
	        var h = -(hel.outerHeight() - $(hel).parent().outerHeight());
	        if (pos.top >= 0) {
	            hel.animate({ top: 0 });
	        } else if (pos.top <= h) {
	            hel.animate({ top: h });
	        }
	        // vertical
	        var v = -(hel.outerWidth() - $(hel).parent().outerWidth());
	        if (pos.left >= 0) {
	            hel.animate({ left: 0 });
	        } else if (pos.left <= v) {
	            hel.animate({ left: v });
	        }
	    }
	});​
	
	//validate functions
	function validateEmail() {
		$.post('requests/val.php', {email:regE.val()}, function(data) {
			if(data == "failed:exist"){
				// user exists
			}else if(data == "failed:invalid"){
				// email is not a valid format
			}else if(data == "valid"){
				// the email is valid and no-one is using it
			}
		});
	}
	function validateName() {
		if(regF.val().length < 2){ /first name is too short/ }else{ /first name is okay/ };
		if(regL.val().length < 2){ /last name is too short/ }else{ /last name is okay/ };
	}
	function validateP1() {
		
	}
	function validateP2() {
		
	}
	function loginEmail() {
		$.post('request/user.php', {email:loginE.val()}, function(data) {
			if(data == "not_exists"){
				//no user exists with this email address
			}else if(data == "is_this_you"){
				//show user the profile confirmation thingy
			}
		});
	}
	
	//functions
	function login() {
		alert('We are working on this! Please stay calm! :)');
	}
	
	function register() {
		alert('We are working on this! Please stay calm! :)');
	}
	
	function invite() {
		alert('We are working on this! Please stay calm! :)');
	}
	
});