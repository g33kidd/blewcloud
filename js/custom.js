/* Custom jQuery */

$(document).ready( function() {
	
	var email = $('#inputEmail');
		var pass = $('#inputPass');
	
	$('#loginbutton').click(function() {
		Login();
	});
	
	function Login() {
		var type = "login";
		$.post('core/request/requests.php', { user:user.val(), pass:pass.val(), type:type }, function(data) {
			if(data == "failed:not_exist"){
				console.log(data);
			}else if(data == "failed:pass"){
				console.log(data);
			}else if(data == "success"){
				console.log(data);
			}else{
				console.log(data);
				return false;
			}
		});
	}
	
	
});