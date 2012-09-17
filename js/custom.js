/* Custom jQuery */

$(document).ready( function() {
	
	$('#login').click(function() {
		var type = "login";
		var email = $('#email').attr('value');
		var pass = $('#pass').attr('value');
		if(email==""||pass==""){
			
		}else{
			$.post('core/requests.php', {type:type, email:email, pass:pass}, function(data) {
				alert(data);
			});
		}
		
	});
	
	$('#login-frm').click(function() {
		var type = "login-frm";
		var email = $('#email-frm').attr('value');
		var pass = $('#pass-frm').attr('value');
		if(email==""||pass==""){
			$('#login-info').attr('class', 'alert');
			if(email==""){ $('#emailInput').addClass('error');}else{ $('#emailInput').addClass('success');}
			if(pass==""){ $('#passwordInput').addClass('error');}else{ $('#passwordInput').addClass('success');}
		}else{
			
		}
		$.post('core/requests.php', {type:type, email:email, pass:pass}, function(data) {
			
		});
	});
	
	$('#register').click(function() {
		var type = "register";
		var first = $('#first').attr('value');
		var last = $('#last').attr('value');
		var email = $('#email').attr('value');
		var dob = $('#dob').attr('value');
		var pass = $('#regpass').attr('value');
		if(first==""||last==""||email==""||dob==""||pass==""){
			$('#reg-info').attr('class', 'alert');
			if(first==""){ $('#firstNameInput').addClass('error');}else{ $('#firstNameInput').addClass('success');}
			if(last==""){ $('#lastNameInput').addClass('error');}else{ $('#lastNameInput').addClass('success');}
			if(dob==""){ $('#dobSelect').addClass('error');}else{ $('#dobSelect').addClass('success');}
			if(email==""){ $('#emailInput').addClass('error');}else{ $('#emailInput').addClass('success');}
			if(pass==""){ $('#passwordInput').addClass('error');}else{ $('#passwordInput').addClass('success');}
		}else{
			$.post('core/requests.php', {type:type, first:first, last:last, dob:dob, email:email, pass:pass}, function(data) {
				if(data=="empty_fields"){
					
				}else{
					
				}
				alert(data);
			});
		}
	});
	
});