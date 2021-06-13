<?php
define('__BASEDIR__', __DIR__);  // holt sich das Verzeichnis der aufrufenden Datei für z.B. require
// z.B. D:\dat\mgdat\Documents\schule\htl\2016-2017-ueb\3AHIT_SEW\gitsew\muster\PHP-02-GETPOST-2aPOST
if ($_SERVER['PHP_SELF'] == "/index.php")   // für den Einsatz in html (css, forms, ...) z.B. /PHP-02-GETPOST-2aPOST
    define('__BASEURI__', "");
else
    define('__BASEURI__', dirname(strtok($_SERVER['PHP_SELF'], '?')));
//Zerlegt einen String ab dem Trennzeichen. In diesem Fall wird der relative Pfad zum Serverstartpfad angegeben.
// dirname — Gibt den Pfad des übergeordneten Verzeichnisses zurück  -- http://php.net/manual/de/function.dirname.php --
// bei REQUEST URI wird bleibt der Dateiname bzw. mit dirname wird zuviel abgeschnitten.


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

require_once(__BASEDIR__ .'/controllers/controller1.php'); // lädt den Controller