<?php

// This file contains global site variables.
// Mostly for different site configurations.

# Site Variables
# site_mode should be set to 'development' or 'public'
# site_offline is bool 1 or 0
# site_version never changes until master Repo is pushed.
define('SITE_MODE', 'development');
define('SITE_VERSION', '1.0.0 Beta');
define('SITE_OFFLINE', '0');

# Database Variables
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'blewcloud');
define('DB_USER', 'root');
define('DB_PASS', '');

?>