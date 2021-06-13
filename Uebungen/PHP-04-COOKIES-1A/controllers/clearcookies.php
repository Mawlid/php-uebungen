<?php

foreach($_COOKIE as $key => $value) {
    setcookie($key, "", 1);
}

require_once ("../views/cookieview.php");
?>