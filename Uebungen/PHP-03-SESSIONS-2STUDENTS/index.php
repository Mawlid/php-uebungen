<?php
session_start();
define('__BASEDIR__', __DIR__);
if ($_SERVER['PHP_SELF'] ==  "7index.php")
    define('__BASEURI__', "");
else
    define('__BASEURI__', dirname(strtok($_SERVER['PHP_SELF'], '?')));

$POSTERROR = FALSE;

$color = "RED";

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
require_once(__BASEDIR__ .'/controllers/controller1.php');