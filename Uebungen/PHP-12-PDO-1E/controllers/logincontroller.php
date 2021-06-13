<?php

$userlist = new Userlist();

if(!empty($_SESSION["POST"])) {
    if (isset($_SESSION["POST"]["login"])) {
        if (!empty($_SESSION["POST"]["username"]) && !empty($_SESSION["POST"]["password"])) {
            $username = $_SESSION["POST"]["username"];
            $password = $_SESSION["POST"]["password"];
            $email = " ";

            try {
                $user = new User($username, $password, $email);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            if ($userlist->login($user, $password)) {
                // login successful
                //unset($_SESSION["POST"]);
                if (empty($_COOKIE["user"])) {
                    if ($user->getUsertype() == "admin") {
                        setcookie("user", "$username", time() + 60 * 60 * 24, "", "localhost");
                        $password = password_hash($user->getPassword(), PASSWORD_DEFAULT);
                        setcookie("password", "$password", time() + 60 * 60 * 24, "", "localhost");

                    } else {
                        setcookie("user", "$username", time() + 60 * 60 * 24 * 7, "", "localhost");
                        $password = password_hash($user->getPassword(), PASSWORD_DEFAULT);
                        setcookie("password", "$password", time() + 60 * 60 * 24, "", "localhost");
                    }
                    $_SESSION['loginsucces'] = true;
                    header("Location:index.php");
                    die();
                } else {
                    unset($_SESSION["POST"]);
                    require_once("views/listview.php");
                }
            } else {
                // login failed
                $_SESSION['loginsucces'] = false;
                unset($_SESSION["POST"]);
                require_once("views/loginview.php");

            }
        } else {
            // login failed
            $_SESSION['loginsucces'] = false;
            unset($_SESSION["POST"]);
            require_once("views/loginview.php");

        }
    }
}
else
{
    //unset($_SESSION["POST"]);
    require_once("views/loginview.php");

}