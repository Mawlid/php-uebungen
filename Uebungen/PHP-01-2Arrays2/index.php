<?php
define('__ROOT__', __DIR__);  // holt sich das Verzeichnis der aufrufenden Datei


if (isset($_SERVER['HTTP_COOKIE']))
    if (strpos($_SERVER['HTTP_COOKIE'], 'XDEBUG_SESSION=') !== false)
    {
        ini_set('max_execution_time', 300); // 300 seconds = 5 minutes
                                            // Sets the value of a configuration option
        ini_set('display_errors', 'On');
        error_reporting(E_ALL | E_STRICT);
        define("MRGXDEBUG",TRUE);
        ob_end_flush();                     // Leert (sendet) den Ausgabepuffer
        ob_implicit_flush(true);
    }
else
    { define("MRGXDEBUG",FALSE); }

require_once(__ROOT__ . '/controllers/controller1.php'); // Die require_once entspricht im Wesentlichen der Funktion require.
                                                        // PHP prüft hier allerdings ob die gewünschte Datei bereits eingebunden wurde und wird sie in diesem Fall nicht ein weiteres mal einbinden.

