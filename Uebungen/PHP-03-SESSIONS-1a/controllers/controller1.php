<?php

// if we have no 'counter' in $_SESSION, create a new one
if (!isset($_SESSION['counter']))
{
    $_SESSION['counter'] = 0;
}

$counter = $_SESSION['counter'];

// Erhöhe den counte um 1 und schreibe in wieder in die Session Variable
$counter ++;
$_SESSION['counter'] = $counter;

require_once __DIR__ . "/../views/view1.php";




