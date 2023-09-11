<?php
session_start();
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "berries_cosmetics";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


 // define global constants
 define ('ROOT_PATH', realpath(dirname(__FILE__)));


Function destroySession(){
    $_SESSION = array();
    if (session_id() !="" || isset($_COOKIE[session_name()]))
    setcookie(session_name(),'',time()-2592000, '/');
}

Function sanitizeString($var){
global $db;
$var = strip_tags($var);
$var = htmlentities($var);
$var = stripslashes($var);
return $db->real_escape_string($var);
}
