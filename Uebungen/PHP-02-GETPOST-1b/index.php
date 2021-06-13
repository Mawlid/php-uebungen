<?php
define('__ROOT__', __DIR__);  // holt sich das Verzeichnis der aufrufenden Datei
define('__MRGDIR__', strtok($_SERVER['REQUEST_URI'], '?')); //Zerlegt einen String ab dem Trennzeichen. In diesem Fall werden

if (isset($_SERVER['HTTP_COOKIE']))
if (strpos($_SERVER['HTTP_COOKIE'], 'XDEBUG_SESSION=') !== false)
{
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
define("MRGXDEBUG",TRUE);
ob_end_flush();
ob_implicit_flush(true);
}

else
{
define("MRGXDEBUG",FALSE);
}

require_once(__ROOT__ .'/controllers/controller1.php');