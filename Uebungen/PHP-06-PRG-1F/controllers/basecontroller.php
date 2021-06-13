<?php
session_start();
$FLCname = "white";
$FLCland = "white";
$FLCemail = "white";

$FLMname = "";
$FLMland = "";
$FLMemail = "";

$domainCookieValue = "";
$domain = "localhost";

if(isset($_POST["clear"]))
{
    $_SESSION = array();
    session_destroy();
    $_POST = array();
    setcookie("Letztername", "", 1);
    require_once ("views/input.php");
    return;
}
else
{
    if(!empty($_POST))
    {
        $name = $_POST["Spitzname"];
        $land = $_POST["Lieblingsurlaubsland"];
        $email = $_POST["Email"];

        if(preg_match('~[0-9]~', trim($_POST["Spitzname"])))
        {
            $FLCname = "red";
            $FLMname = "Numbers are not allowed";
        }
        if(strlen($_POST["Spitzname"]) < 4)
        {
            $FLCname = "red";
            $FLMname = "Too short";
        }

        if(preg_match('~[0-9]~', trim($_POST["Lieblingsurlaubsland"])))
        {
            $FLCland = "red";
            $FLMland = "Numbers are not allowed";
        }
        if(strlen($_POST["Lieblingsurlaubsland"]) < 4)
        {
            $FLCland = "red";
            $FLMland = "Too short";
        }

        if(preg_match('~@~', trim($_POST["Email"])) != 1)
        {
            $FLClemail = "red";
            $FLMlemail = "There must be an @ in the input";
        }
        if(strlen($_POST["Email"]) < 7)
        {
            $FLCemail = "red";
            $FLMemail = "Too short";
        }

        if($FLCname == "red" or $FLCland == "red" or $FLCemail == "red")
        {
            require_once ("views/input.php");
        }
        else
        {
            $_SESSION["post"] = $_POST;
            header("location:index.php");
            return;
        }

    }
    else
    {
        if(isset($_SESSION["post"]))
        {
            $Spitzname = $_SESSION["post"]["Spitzname"];
            $Lieblingsurlaubsland = $_SESSION["post"]["Lieblingsurlaubsland"];
            $Email = $_SESSION["post"]["Email"];
            unset($_SESSION["post"]);
            setcookie("letztername", $Spitzname, time() + 60 * 17,"",$domain);
            if(isset($_COOKIE["letztername"]))
            {
                $domainCookieValue = $_COOKIE["letztername"];
            }

            $output = "Spitzname: ".$Spitzname."    Lieblingsurlaubsland: ".$Lieblingsurlaubsland."     E-mail: ".$Email;
            $_SESSION["output"] = $output;
            require_once ("views/output.php");

        }
        else
        {
            require_once ("views/input.php");
        }
    }
}

