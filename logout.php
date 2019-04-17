<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
$_SESSION["currentPage"] = 'index.php';
// Redirect to login page
header("location: index.php");
header("location: index.php");
exit;

?>