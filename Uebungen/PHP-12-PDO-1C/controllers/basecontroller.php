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
    $statement = $pdobjects->query("SELECT * FROM user where ID > 2 order by rand() LIMIT 1");
    $row = $statement->fetch();
    if(!$statement)
    {
        $errors[] = $pdobjects->errorInfo();
    }
    else
    {
        $userchange = array();
        $userchange['ID'] = $row['ID'];
        $search = '/\d+/';
        $userchange['Email'] = preg_replace($search, 'gains'. rand(1000, 9999), $row['Email']);

        $statement = $pdobjects->prepare("UPDATE user SET Email = :Email WHERE ID = :ID");
        $statement->execute($userchange);
        $statement = $pdobjects->query('SELECT * FROM user');
    }
}
require_once ("views/outputview.php");





