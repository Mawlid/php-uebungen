<?php
$counter=1;
$_SESSION['counter'];
if($_SESSION['counter'] != null)
{

    $counter = $_SESSION['counter'];
    $counter++;
}
    $_SESSION['counter']=$counter;

 echo $_SESSION['counter'];


require_once __DIR__ . "/../views/view1.php";




