<?php
// http://localhost:9999/PHP-02-BasicApp-1GET/index.php?id=3

if (isset($_POST["name"]))
{
        require_once __DIR__ . "/../views/outputView.php";
        return;
}
else
{
require_once __DIR__ . "/../views/formpostView.php";
}




