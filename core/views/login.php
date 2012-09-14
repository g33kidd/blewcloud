<div class="container">
	<div class="well">
		<h1>Login to your account</h1>
		<p><a href="register" class="btn" title="Register here!" >Don't have an account? Try Registering!</a></p>
	</div>
	<div id="login-info" class="alert hidden">
  		<strong>Warning!</strong> Best check yo self, some fields are missing or incorrect.
	</div>
	<div class="form-horizontal">
		<div class="control-group" id="emailInput">
			<label class="control-label" for="email">Email Address</label>
			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-envelope"></i></span>
					<input type="text" id="email-frm" placeholder="Email"><span id="email-helpText" class="help-inline"></span>
				</div>
			</div>
		</div>
		<div class="control-group" id="passwordInput">
			<label class="control-label" for="pass">Password</label>
			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-lock"></i></span>
					<input type="password" id="pass-frm" placeholder="Password"><span id="pass-helpText" class="help-inline"></span>
				</div>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button id="login-frm" class="btn" type="submit">Login</button>
			</div>
		</div>
	</div>
