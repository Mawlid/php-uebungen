<?php
$thurnerERRORfname = "";
$thurnerERRORsname = "";
$thurnerERRORage = "";



if(!empty($_POST))
{
    if(preg_match('~[0-9]~', trim($_POST["Firstname"])) || strlen($_POST["Firstname"]) < 4)
        $thurnerERRORfname = True;
    if(preg_match('~[0-9]~', trim($_POST["Secondname"])) || strlen($_POST["Secondname"]) < 4)
        $thurnerERRORsname = True;
    if(strlen(trim($_POST["Age"])) <= 4 OR (preg_match('~[a-zA-Z]~', trim($_POST["Age"])) > 0) )
        $thurnerERRORage = True;
    if($thurnerERRORfname != "" || $thurnerERRORsname != "" || $thurnerERRORage != "" )
    {
        require_once ("views/inputview.php");
    }
    else
    {
        $_SESSION["post"] = $_POST;
        header("location:index.php");
        return;

    }
}
else
{
    if(isset($_SESSION["post"]))
    {
        $thurner_firstname = $_SESSION["post"]["Firstname"];
        $thurner_secondname = $_SESSION["post"]["Secondname"];
        $thurner_age = $_SESSION["post"]["Age"];

        $person[1] = new Person($thurner_firstname, $thurner_secondname, $thurner_age);
        $person[1]->setAge($thurner_age);
        $person[1]->Createaddress($thurner_secondname);

        unset($_SESSION["post"]);
        require_once ("views/outputview.php");
    }
    else
    {
        require_once ("views/inputview.php");
    }
}

