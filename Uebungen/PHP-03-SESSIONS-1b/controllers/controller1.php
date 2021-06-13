<?php
if(isset($_POST['Clear'])){

// Unset all of the session variables.
    $_SESSION = array();


    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

// destroy  session.
    session_destroy();

// redirect to the index page
    header("Location: index.php");
}
if (isset($_POST["zahl1"]) || isset($_POST["zahl2"]))
{
    $number1 = $_POST["zahl1"];
    $number2 = $_POST["zahl2"];
    if(is_numeric($number1) && is_numeric($number2))
    {
        $POSTERROR = FALSE;
    }
    else
    {
        $POSTERROR = TRUE;
    }

}

if (empty($_POST) OR $POSTERROR)
{
    require_once(__BASEDIR__ .'/views/formpostview.php');
}
else
{
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    }
// Counter von Session der Variable $counter zuweisen
    $counter = $_SESSION['counter'];

// Counter um 1 erhöhen und wieder in die Variable schreiben
    $counter++;
    $_SESSION['counter'] = $counter;

    require_once(__BASEDIR__ .'/views/outputview.php');
}



