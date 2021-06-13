<<?php
session_start();

$domain = 'localhost';
$myDomainCookieValue = "";

if(isset($_POST['Clear'])) {
    $_SESSION = array();
    session_destroy();
    $_POST = array();
    setcookie("LetztgueltigerName", "", 1);

    require_once("views/inputregister_thurner.php");
}

if(!empty($_POST)){
    $_SESSION["post"] = $_POST;
    header("Location:index.php");
    return;
}
if(isset($_SESSION["post"])){
    $_SESSION["users"][$_SESSION["post"]["username"]] = serialize(new User($_SESSION["post"]["username"], $_SESSION["post"]["usergroup"],$_SESSION["post"]["password"],$_SESSION["post"]["email"]));
    setcookie('LetztgueltigerName', $_SESSION["post"]["username"]->getUsername(), time() + 60*59, '', $domain);
    if (isset($_COOKIE['LetztgueltigerName'])) {
        $myDomainCookieValue = $_COOKIE['LetztgueltigerName'];
    }
    require_once("views/output_thurner.php");
}
else
{
    require_once ("views/inputregister_thurner.php");
}





