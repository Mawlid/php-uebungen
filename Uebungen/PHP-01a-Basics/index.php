<?php
// Use Controller

if (strpos($_SERVER['HTTP_COOKIE'], 'XDEBUG_SESSION=') !== false)
{
    define("MRGXDEBUG",TRUE); ob_end_flush(); ob_implicit_flush(true);
}
else
{
    define("MRGXDEBUG",FALSE);
}

define('__ROOT__', dirname(__FILE__));  // holt sich das Verzeichnis der aufrufenden Datei
require_once(__ROOT__.'/controllers/controller1.php');