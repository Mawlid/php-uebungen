<?php

$seconds = 20;
$pfad1 = "/PHP-04-COOKIES-1a";
$pfad2 = "/unterverzeichnis";
$domain1 = 'localhost';
$domain2 = '.htl-villach.at';

setcookie('COOKIE_WITH_VALUE', 'Cookie-Value');
setcookie('PERMANENT_COOKIE', 'Perm-Cookie-Value (1 woche)', time() + 24*60*60*7);
setcookie('TIME_BASED_COOKIE', 'Time-based-Cookie-Value ' . $seconds, time() + $seconds);
setcookie('PATH_COOKIE1', 'Path1-Cookie-Value ' . $pfad1, time() + 60*60, $pfad1);
setcookie('PATH_COOKIE2', 'Path2-Cookie-Value ' . $pfad2, time() + 60*60, $pfad2);
setcookie('DOMAIN_COOKIE1', 'Domain1-Cookie-Value ' . $domain1, time() + 60*60, '', $domain1);
setcookie('DOMAIN_COOKIE2', 'Domain2-Cookie-Value ' . $domain2, time() + 60*60, '', $domain2);
setcookie('COLOR', '#cccccc', time() + $seconds);

require_once ("../views/cookieview.php");
