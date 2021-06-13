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
if (isset($_POST["name"]))
{
    $name = $_POST["name"];
    if(is_numeric($name))
    {
        $POSTERROR = TRUE;
    }
    else
    {
        $POSTERROR = FALSE;
    }

}

if (isset($_SESSION['name'])){
    $_SESSION['name'] = [];
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
    $name = $_SESSION['name'];

// Counter um 1 erhöhen und wieder in die Variable schreiben
    $counter++;
    $_SESSION['counter'] = $counter;
if (isset($_POST["nameinput"]))
{
    $name[] = $_POST["nameinput"];
    $_SESSION["name"] = $name;
}

    require_once(__BASEDIR__ .'/views/outputview.php');
}



