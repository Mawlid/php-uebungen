<?php

if(empty($_SESSION["userlist"]))
{
    $_SESSION["userlist"] = serialize(new Userlist());
}
$userlist = new Userlist();

if(!empty($_SESSION["POST"])) {
    if (isset($_SESSION["POST"]["delete"])) {
        if (!empty($_SESSION["POST"]["username"])) {
            $username = $_SESSION["POST"]["username"];
            $password = " ";
            $email = " ";

            try {
                $user = new User($username, $password, $email);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            if ($userlist->delete($user)) {
                $_SESSION["delete"] = true;
                unset($_SESSION["POST"]);
                require_once ("views/listview.php");

            } else {
                $_SESSION["delete"] = false;
                unset($_SESSION["POST"]);
                require_once ("views/deleteview.php");

            }
        } else {
            $_SESSION["delete"] = false;
            unset($_SESSION["POST"]);
            require_once ("views/deleteview.php");

        }
    }
}
else
{
    //unset($_SESSION["POST"]);
    require_once("views/deleteview.php");

}