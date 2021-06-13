<?php
if(isset($_POST["name"]) && isset($POST["email"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    if(!$name == "" && strlen($name) >= 2 && !preg_match('~[0-9]~', trim($name))) {
        if(!$email == "" && strlen($email) >= 6 && preg_match('~@~', trim($email)) == 1)
        {
            $corname = true;
            $coremail = true;
            require_once ("views/outputview.php");
        }
        else
        {
            $corname = true;
            $coremail = false;
        }
    }
    else{
        if(!$email == "" && strlen($email) >= 6 && preg_match('~@~', trim($email)) == 1)
        {
            $corname = false;
            $coremail = true;
            require_once ("views/formview.php");
        }
        else{
            $corname = false;
            $coremail = false;
        }
    }
}
else
{
    $corname = true;
    $coremail = true;
    require_once ("views/formview.php");
}





