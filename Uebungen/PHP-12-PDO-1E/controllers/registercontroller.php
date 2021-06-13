<?php
$corrUsername = true;
$corrEmail = true;
$corrPassword = true;
$color = "red";

if(empty($_SESSION["userlist"]))
{
    $_SESSION["userlist"] = serialize(new Userlist());
}
$userlist = new Userlist();
if(!empty($_SESSION["POST"]))
{
    if (isset($_SESSION["POST"]["register"]))
    {
        if (!empty($_SESSION["POST"]["username"]) && !empty($_SESSION["POST"]["password"]) && !empty($_SESSION["POST"]["email"]) && !empty($_SESSION["POST"]["usertype"]))
        {
            $username = $_SESSION["POST"]["username"];
            $password = $_SESSION["POST"]["password"];
            $passwordconfim = $_SESSION["POST"]["corrpassword"];
            $email = $_SESSION["POST"]["email"];
            $usertype = $_SESSION["POST"]["usertype"];

            $inputCheck = new Check($username, $password, $passwordconfim, $email);
            $corrUsername = $inputCheck->usernameOK();
            $corrEmail = $inputCheck->emailOK();
            $corrPassword = $inputCheck->passwordOK();
            // Überprüfung
            if ($corrUsername AND $corrEmail AND $corrPassword) {
                $user = new User($username, password_hash($password, PASSWORD_DEFAULT), $email);
                $user->setUsertype($usertype);

                if ($userlist->addUser($user))
                {
                    // user added
                    unset($_SESSION["POST"]);
                    $_SESSION["userlist"] = serialize($userlist);
                    require_once("views/listview.php");
                    //header("Refresh:5");
                }
                else
                {
                    // Fehler wenn User schon exestiert
                    $_SESSION['UserExist'] = true;
                    unset($_SESSION["POST"]);
                    require_once("views/registerview.php");
                }
            }
            else
            {
                require_once("views/registerview.php");
            }



        }
        else
        {
            //wenn Session gestzt is (username,email,...)
            unset($_SESSION["POST"]);
            require_once("views/registerviev.php");
        }
    }
}
else
{
    unset($_SESSION["POST"]);
    require_once("views/registerview.php");

}