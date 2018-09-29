<?php

error_reporting(1);
/*ini_set("session.use_only_cookies", "off");
ini_set("session.use_only_cookies", "0");
ini_set("session.use_only_cookies", 0);
session_start();
*/

ini_set("date.timezone", "Asia/Calcutta");

include("dbconfig.php");

/*
header('Cache-control: private'); // IE 6 FIX
// always modified 
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
// HTTP/1.1 
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
// HTTP/1.0 
header('Pragma: no-cache');
*/


?>