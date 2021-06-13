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

$randnum1 = rand(1000, 9000);
$randnum2 = rand(1000, 9000);
$newuser = array();
$newuser['Username'] = 'user' . $randnum1;
$newuser['Password'] = password_hash('user' . $randnum1 .$randnum2, PASSWORD_DEFAULT);
$newuser['Email'] = 'user' . $randnum1 . '@htl-villach.at';
$newuser['Usertype'] = rand(1, 3);;
$statement = $pdobjects->prepare("INSERT INTO user (Username, Password, Email, Usertype )
    VALUES (:Username, :Password, :Email, :Usertype)");
$statement->execute($newuser);

if($pdobjects)
{

    $stmt = $pdobjects->query('SELECT * FROM user WHERE ID > 2 ORDER BY RAND() LIMIT 1');
    $row = $statement->fetch();
    if(!$stmt)
    {
        $errors[] = $pdobjects->errorInfo();
    }


    $statement = $pdobjects->query("SELECT * FROM user");
    if(!$statement)
    {
        $errors[] = $pdobjects->errorInfo();
    }

}
require_once ("views/outputview.php");





