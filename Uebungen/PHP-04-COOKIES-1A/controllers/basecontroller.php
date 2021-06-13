<?php

if (empty($_GET))
{
    require_once ("views/menuview.php");
}

else {
    $myCookie = "Cookie is not set";
    $mySecondsCookie = "Cookie is not set";
    $myPermanentCookie = "Cookie is not set";
    $myPathCookie = "Cookie is not set";
    $mySecondPathCookie = "Cookie is not set";
    $myDomainCookie = "Cookie is not set";
    $mySecondDomainCookie = "Cookie is not set";

    switch ($_GET["menu"]) {
        case "setcookie";
            require_once("controllers/setcookie.php");
            break;
        case "checkcookie";
            require_once("controllers/checkcookie.php");
            break;
        case "clearcookie";
            require_once("controllers/clearcookies.php");
            break;
        default:
            echo "Fucked up Menu";
    }
}