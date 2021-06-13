<?php
if (isset($_POST["name"]))
{
    $test1 = strlen(trim($_POST["name"]));
    $test2 = strlen(trim($_POST["email"]));
if (strlen(trim($_POST["name"])) == 0 || (strlen(trim($_POST["email"])))  == 0)
    $POSTERROR = TRUE;
}
if (empty($_POST) OR $POSTERROR)
{
    require_once(__BASEDIR__ .'/views/formpostView.php');
}
else
{
    require_once(__BASEDIR__ .'/views/outputView.php');
}



