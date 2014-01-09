<?php

/**
 * These are the database login details
 */  
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "root");    // The database username. 
define("PASSWORD", "root");    // The database password. 
define("DATABASE", "shopandsell");    // The database name.
 
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
 
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!

$db_hostname = 'localhost';
$db_database = 'shopandsell';
$db_username = 'root';
$db_password = 'root';

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database)
or die("Unable to select database: " . mysql_error());


?>
