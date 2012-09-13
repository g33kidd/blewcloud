/* Custom jQuery */

$(document).ready( function() {
	
	$('#login').click(function() {
		var type = "login";
		var email = $('#email').attr('value');
		var pass = $('#pass').attr('value');
		$.post('core/requests.php', {type:type, email:email, pass:pass}, function(data) {
			alert(data);
		});
	});
	
	$('#register').click(function() {
		var type = "register";
		var pass = $('#pass').attr('value');
		var pass = $('#pass').attr('value');
		var pass = $('#pass').attr('value');
		var pass = $('#pass').attr('value');
		var pass = $('#pass').attr('value');
		var pass = $('#pass').attr('value');
	});
	
});