<?php
$errors = array();
$pdobjects = null;
$statement = null;

try
{
    $pdobjects = new PDO('mysql:host=localhost;dbname=users', 'users', 'wald4932');
}
catch (PDOException $exception)
{
    $errors[] = $exception->getMessage();
}

if($pdobjects)
{
    $statement = $pdobjects->query("SELECT * FROM user");
    if(!$statement)
    {
        $errors[] = $pdobjects->errorInfo();
    }
}
require_once ("views/outputview.php");





