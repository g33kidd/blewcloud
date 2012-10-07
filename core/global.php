<?php
session_start();
// This file contains all Global:
// Variables, Classes, Functions, Methods, Etc...

/// Main Classes
## Site Variables
require_once('config/vars.php');
## Development Class
require_once('class/dev.class.php');
## Main Site Class
require_once('class/main.class.php');
## User Class
require_once('class/user.class.php');
## Database Class and Connect to DB
require_once('db/db.class.php');
## Routing Class
require_once('class/route.class.php');

# Initiates database connection found in core/db/db.class.php
$db = new DB;

## API Class
// Commented out for now until finished.
// require_once('class/api.class.php');

?>