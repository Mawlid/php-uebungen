<?php
session_start();
$color = "rgb(255, 221, 0)";
$lschauspielerERROR = false;
$lfilmERROR = false;
$lserieERROR = false;
$telefonnumerERROR = false;
$domain = "localhost";
$myDomainCookieValue = "";

if(isset($_POST['clear'])) {
    $_SESSION = array();
    session_destroy();
    $_POST = array();
    setcookie("LetzteEingegebeneLieblingserie", "", 1);
    require_once("views/input.php");
}

if(empty(!$_POST))
{
    if(strlen(trim($_POST["lieblingsschauspieler"])) <= 4 OR (preg_match('~[0-9]~', trim($_POST["lieblingsschauspieler"])) > 0) )
        $lschauspielerERROR = true;
    if(strlen(trim($_POST["lieblingsfilm"])) <= 4 OR (preg_match('~[0-9]~', trim($_POST["lieblingsfilm"])) > 0) )
        $lfilmERROR = true;
    if(strlen(trim($_POST["lieblingserie"])) <= 4 OR (preg_match('~[0-9]~', trim($_POST["lieblingserie"])) > 0) )
        $lserieERROR = true;
    if(!is_numeric($_POST["telefonnummer"]))
        $telefonnumerERROR = true;

    if($lschauspielerERROR OR $lfilmERROR OR $lserieERROR OR $telefonnumerERROR)
    {

        require_once ("views/input.php");
    }
    else
    {
        $_SESSION['post'] = $_POST;
        header('Location:index.php');
        return;
    }

}
else
{
    if (isset($_SESSION['post']))
    {
        $lieblingsschauspieler = $_SESSION['post']['lieblingsschauspieler'];
        $lieblingsfilm = $_SESSION['post']["lieblingsfilm"];
        $lieblingserie = $_SESSION['post']['lieblingserie'];
        $telefonnummer = $_SESSION['post']["telefonnummer"];
        unset($_SESSION['post']);
        setcookie('LetzteEingegebeneLieblingserie', $lieblingserie, time() + 60 * 4,'', $domain);
        if (isset($_COOKIE['LetzteEingegebeneLieblingserie'])){
            $myDomainCookieValue = $_COOKIE['LetzteEingegebeneLieblingserie'];
        }
        require_once('views/output.php');

    }
    else
    {
        require_once ("views/input.php");
    }
}