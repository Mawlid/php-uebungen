<?php
 if(isset($_POST["clear"]))
 {
     session_destroy();
 }
 if(!empty($_SESSION["input"]))
 {
     if(isset($_POST["input"]))
     {
         $inputs = array();
         foreach($_SESSION["input"] as $input)
         {
             $inputs[] = $input;
         }
         $inputs[] = $_POST["input"];
         $_SESSION["input"] = $inputs;
         header("Location:index.php");
         return;
     }
     else
     {
         require_once ("views/view.php");
     }

 }
 else if(isset($_POST["input"]))
 {
     $inputs[] = $_POST["input"];
     $_SESSION["input"] = $inputs;
     header("Location:index.php");
     return;
 }
 else
 {
     require_once ("views/view.php");
 }