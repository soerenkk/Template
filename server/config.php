<?php
//prevent caching
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
//server side configuration
ini_set("display_errors", "1");
ini_set("display_startup_errors ", "1");
error_reporting(E_ALL);
session_start();
?>
