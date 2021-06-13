<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
// create a log channel
$log = new Logger('seas');
$log->pushHandler(new StreamHandler('legende.log', Logger::WARNING));

$rnum1 = rand(2, 8);
$rnum2 = rand(2, 8);
$rectangle = new Rectangle($rnum1, $rnum2);
$circle = new Circle($rnum1);
$log->error(serialize($rectangle));
$log->addEmergency(serialize($circle));

$rectangle_area = $rectangle->calcArea();
$circle_area = $circle->calcArea();

require_once ("views/outputview.php");