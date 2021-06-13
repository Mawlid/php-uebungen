<?php
// initialize display variables


// check our cookies

if (isset($_COOKIE['BASIC_COOKIE'])) {
    $myCookie = $_COOKIE['BASIC_COOKIE'];
}


if (isset($_COOKIE['COOKIE_WITH_VALUE'])) {
    $mySecondsCookie = $_COOKIE['COOKIE_WITH_VALUE'];
}


if (isset($_COOKIE['PERMANENT_COOKIE'])) {
    $myPermanentCookie = $_COOKIE['PERMANENT_COOKIE'];
}


if (isset($_COOKIE['TIME_BASED_COOKIE'])) {
    $myPathCookie = $_COOKIE['TIME_BASED_COOKIE'];
}


if (isset($_COOKIE['PATH_COOKIE1'])) {
    $mySecondPathCookie = $_COOKIE['PATH_COOKIE1'];
}

if (isset($_COOKIE['PATH_COOKIE2'])) {
    $myPathCookie2Value = $_COOKIE['PATH_COOKIE2'];
}

if (isset($_COOKIE['DOMAIN_COOKIE1'])) {
    $myDomainCookie = $_COOKIE['DOMAIN_COOKIE1'];
}

if (isset($_COOKIE['DOMAIN_COOKIE2'])) {
    $mySecondDomainCookie = $_COOKIE['DOMAIN_COOKIE2'];
}


require_once ("../views/cookieview.php");
?>
