<?php

$person[1] = new Person("Thomas",17,"Austria");
$person[1]->setSecondname("Thurner");
$person[1]->setNote("Yee");

$person[2] = new Person("Carlos",13,"Austria");
$person[2]->setSecondname("Schwanzgesicht");
$person[2]->setNote("wub");
$person[2]->addnote("wub");
$person[2]->doAge();

require_once ("views/outputview.php");