<?php
session_start();

spl_autoload_register(function ($class_name) {
    include ('classes/' .$class_name . '.php');
});


require_once ("controllers/basecontroller.php");