<?php
// http://localhost:9999/PHP-02-BasicApp-1GET/index.php?id=3

if (isset($_GET['agbs']))
{
    if (isset($_GET["geschlecht"]))
    {require_once __DIR__ . "/../views/outputView.php";
        return;
    }
    else
    {
        require_once __DIR__ . "/../views/formgetView.php";
    }
}
else
{
require_once __DIR__ . "/../views/formgetView.php";
}



