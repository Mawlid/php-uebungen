<?php
session_start();

$domain = 'localhost';
$myDomainCookieValue = "";

if(isset($_POST['Clear'])) {
    $_SESSION = array();
    session_destroy();
    $_POST = array();
    setcookie("LetztgueltigerName", "", 1);

    require_once("views/thurner_inputview.php");
}

if (!isset($_SESSION['notfirst']))
{
    $_SESSION = array();
    session_destroy();
    $_POST = array();
    session_start();
    $_SESSION['notfirst'] = true;
}


else {
    if (!empty($_POST))
    {
        $_SESSION["post"] = $_POST;
        header("Location:index.php");
        return;
    }
    else
    {
        if (isset($_SESSION["post"]))
        {
            if (isset($_SESSION['user']))
                $persons = unserialize($_SESSION['user']);
            else
            {
                $_SESSION['user'] = array();
            }

            $username = $_SESSION["post"]["username"];
            $usergroup = $_SESSION["post"]["usergroup"];
            $password = $_SESSION["post"]["password"];
            $email = $_SESSION["post"]["email"];
            $persons[] = new User($username, $usergroup, $password, $email);
            unset($_SESSION["post"]);
            $_SESSION['user'] = serialize($persons);
            end($persons);
            $mykey = key($persons);
            setcookie('LetztgueltigerName', $persons[$mykey]->getUsername(), time() + 60*59, '', $domain);
            if (isset($_COOKIE['LetztgueltigerName'])) {
                $myDomainCookieValue = $_COOKIE['LetztgueltigerName'];
            }
            require_once("views/thurner_outputview.php");
        }
        else
        {
            require_once("views/thurner_inputview.php");
        }
    }
}

