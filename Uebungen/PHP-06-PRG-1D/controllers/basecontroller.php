<?php
session_start();
$firstnameERROR = FALSE;
$nameERROR = FALSE;
$emailERROR = FALSE;
$domain = 'localhost';
$color = "red";
$DomainCookieValue = "";

if(isset($_POST['clear'])) {
    $_SESSION = array();
    session_destroy();
    $_POST = array();
    setcookie("LetztgueltigerName", "", 1);
    require_once ("views/input.php");
}
else
{
    if (!empty($_POST))
    {
        if (MRGXDEBUG) $test = preg_match('~[0-9]~', trim($_POST["firstname"]));

        if (strlen(trim($_POST["firstname"])) <= 2 OR (preg_match('~[0-9]~', trim($_POST["firstname"])) > 0) )
            $firstnameERROR = TRUE;
        if (strlen(trim($_POST["name"])) <= 2 OR (preg_match('~[0-9]~', trim($_POST["name"])) > 0) )
            $nameERROR = TRUE;
        if (strlen(trim($_POST["email"])) <= 6 OR (preg_match('~@~', trim($_POST["email"])) != 1) )
            $emailERROR = TRUE;
        if ($firstnameERROR OR $nameERROR OR $emailERROR)
        {
            require_once ("views/input.php");
        }
        else
        {
            $_SESSION['post'] = $_POST;
            header("Location:index.php");
            die();
        }
    }
    else
    {
        if (isset($_SESSION['post']))
        {
            $firstname = $_SESSION['post']['firstname'];
            $name = $_SESSION['post']['name'];
            $email = $_SESSION['post']['email'];
            unset($_SESSION['post']);
            setcookie('LetztgueltigerName', $firstname . " " . $name, time() + 60*4, '', $domain);
            if (isset($_COOKIE['LetztgueltigerName'])) {
                $DomainCookieValue = $_COOKIE['LetztgueltigerName'];
            }
            require_once("views/output.php");
        }
        else
        {
            require_once("views/input.php");
        }

    }
}










