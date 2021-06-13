<?php
if(!empty($_POST))
{
    $_SESSION["POST"] = $_POST;
    header("Location:index.php",true,303);
    die();
}