<?php

$ERRORusername = false;
$ERRORpassword = false;
$color = "red";


if(!empty($_POST))
{
    $password = $_POST['Password'];
    $username = $_POST['Username'];
    $inputCheck = new Check($username, $password);
    $Errorusername = $inputCheck->Errorusername();
    $Errorpassword = $inputCheck->Errorpassword();


    if ($Errorusername OR $Errorpassword) {

        require_once ("views/thurner_inputview.php");
    } else {
        $_SESSION['post'] = $_POST;
        header('Location:index.php');
        return;
    }

}
else
{
    if(isset($_SESSION["post"]))
    {
        $Username = $_SESSION['post']['Username'];
        $Password = $_SESSION['post']["Password"];
        $Person = new Person($Username, $Password);

        $personList = $_SESSION["post"];
        $personList[] = $Person;

        $_SESSION["post"] = $personList;
        unset($_SESSION["input"]);
        require_once("views/thurner_outputView.php");
    }
    else
    {
        require_once ("views/thurner_inputview.php");
    }
}