<?php
session_start();
// This file contains all Global:
// Variables, Classes, Functions, Methods, Etc...

/// Main Classes
## Site Variables
require_once('config/vars.php');
## Development Class
require_once('class/dev_class.php');
## Main Site Class
require_once('class/main_class.php');
## Database Class and Connect to DB
require_once('db/db_class.php');
## Routing Class
require_once('class/route_class.php');

# Initiates database connection found in core/db/db_class.php
$db = new DB;

## API Class
// Commented out for now until finished.
// require_once('class/api_class.php');

?>