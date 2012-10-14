<body>
		<!--[if IE]>
		  <script type="text/javascript">
		    (function() { window.location.href = 'http://localhost/blewcloudDesign/unsupported.php'})();
		  </script>
		<![endif]-->
		<!-- Welcome Login/Register page -->
		<div class="site">
			<div class="ui-headbar">
				<div class="head-container center">
					<!-- Left Side of Headerbar -->
					<div class="logo left"></div>
					<!-- Right Side of Headerbar -->
					<div class="user right">
						<div class="img"></div>
						<div class="menu">
							
						</div>
					</div>
				</div>
			</div>
			<div class="ui-body">
				<div class="container center">
					<div class="profile center">
						
						<div class="profile-head">
							<div class="image left" id="profile-image"><img src="https://lh6.googleusercontent.com/-KqRYt7sNUPc/UC2CyopLGLI/AAAAAAAACvM/HJnX5qwcOYc/s845/20120813_142238.jpg"></div>
							
							<div class="info-basic left">
								<div class="name">Joshua Kidd</div>
								<div class="item">
									<div class="head-item">Tagline</div>
									<div class="tag">young entrepreneur, computer programmer, high school student</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="profile-page">
							<?php

							$user = Route::get_uri();
							echo $user;
							
							?>
						</div>
						
					</div>
				</div>
			</div>
		</div>