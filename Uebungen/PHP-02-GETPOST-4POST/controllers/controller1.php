<?php
if (isset($_POST["zahl1"]) || isset($POST["zahl2"]))
{
    $number1 = $_POST["zahl1"];
    $number2 = $_POST["zahl2"];
    if (is_numeric($number1) && is_numeric($number2))
    {
        $POSTERROR = False;
    }
    else
    {
        $POSTERROR = True;
    }
}
if (empty($_POST) OR $POSTERROR)
{
    require_once(__BASEDIR__ .'/views/formpostView.php');
}
else
{
    require_once(__BASEDIR__ .'/views/outputView.php');
}
