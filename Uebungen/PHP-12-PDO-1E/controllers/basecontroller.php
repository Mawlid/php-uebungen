<?php
Model::connect();

if(!empty($_POST)){
    require_once ("controllers/prg.php");
}
else if(!empty($_SESSION["POST"])){
    if(isset($_SESSION["POST"]["register"])){
        require_once("controllers/registercontroller.php");
    }
    else if(isset($_SESSION["POST"]["login"])){
        require_once("controllers/logincontroller.php");
    }
    else if(isset($_SESSION["POST"]["delete"])){
        require_once("controllers/deletecontroller.php");
    }
}

else if(isset($_GET["menu"])){
    switch (htmlspecialchars($_GET["menu"]))
    {
        case "home":
            require_once ("views/homeview.php");
        break;

        case "register":
            require_once ("controllers/registercontroller.php");
        break;

        case "login":
            require_once ("controllers/logincontroller.php");
        break;
        case "list":
            require_once ("controllers/listcontroller.php");
        break;
        case "logout":
            require_once ("controllers/logoutcontroller.php");
        break;
        case "delete":
            require_once ("controllers/deletecontroller.php");
        break;
        default:
            require_once ("views/homeview.php");
    }
}
else
    require_once ("views/homeview.php");