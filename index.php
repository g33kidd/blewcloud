<?php
	## Require the Classes, Variables, Connect to DB, etc...
	require_once('core/global.php');
	
	## Site Mode? Set this in core/config/vars.php
	## Should be set to 'development' or 'public'
	Develop::site_mode(SITE_MODE);
	Develop::test_session(SITE_MODE);
?>
<?php include "core/views/header.php"; ?>
<!-- Start Body -->
<?php

## Routing files, can be found in core/class/route_class.php
Route::something();

?>

<!-- End Body -->
<?php include "core/views/footer.php"; ?>