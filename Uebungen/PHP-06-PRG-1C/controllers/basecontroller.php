<?php

if(isset($_SESSION["prg"]))
{
    //second time after redirection
    $array = $_SESSION["prg"];
    $name = $array[0];
    $email = $array[1];
    if(!$name == "" && strlen($name) >= 2 && !preg_match('~[0-9]~', trim($name)))
    {
        if(!$email == "" && strlen($email) >= 6 && preg_match('~@~', trim($email)) == 1)
        {
            $nameOK = true;
            $emailOK = true;
            require_once("views/output.php");
        }
        else
        {
            $emailOK = false;
            $nameOK = true;
            require_once("views/input.php");
        }

    }
    else
    {
        if(!$email == "" && strlen($email) >= 6 && preg_match('~@~', trim($email)) == 1)
        {
            $nameOK = false;
            $emailOK = true;
            require_once("views/input.php");
        }
        else
        {
            $nameOK = false;
            $emailOK = false;
            require_once("views/input.php");
        }
    }
}
else
{
    if(isset($_POST["name"]) && isset($_POST["email"])) {
        $input = array();

        $input[] = $_POST["name"];
        $input[] = $_POST["email"];

        $_SESSION["prg"] = $input;
        header("Location:index.php");
        return;
    }
    else
    {
        $nameOK = true;
        $emailOK = true;
        require_once("views/input.php");
    }
}
