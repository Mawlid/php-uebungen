<?php
// http://localhost:9999/PHP-02-BasicApp-1GET/index.php?id=3

if (isset($_POST['agbs']))
{
    if (isset($_POST["geschlecht"]))
    {require_once __DIR__ . "/../views/outputView.php";
        return;
    }
    else
    {
        require_once __DIR__ . "/../views/formpostView.php";
    }
}
else
{
require_once __DIR__ . "/../views/formpostView.php";
}



