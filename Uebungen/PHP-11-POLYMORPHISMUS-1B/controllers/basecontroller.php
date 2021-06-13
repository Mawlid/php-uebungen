<?php
spl_autoload_register(function ($class_name) {
    include ('classes/' .$class_name . '.php');
});


if(!isset($_COOKIE['ClearCookie'])){
    setcookie('ClearCookie', 'ExpiresIn60Days', time() + 60*60*24*6);
    session_destroy();
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_SESSION['formvalues'] = $_POST;
    if(isset($_SESSION['formvalues']['clear'])){
        session_destroy();
    }
    header('Location:index.php');

}

else if(isset($_SESSION['formvalues']))
{

    $objects = array();
    if(! isset($_SESSION['objects'])){
        $_SESSION['objects'] = $objects;
    }
    $objects = $_SESSION['objects'];


    if(isset($_SESSION['formvalues']['registerfield'])){


        $exists = FALSE;

        foreach($objects as $user ){
            $user = unserialize($user);
            if($user->username == $_SESSION['formvalues']['username'] or $user->password == $_SESSION['formvalues']['email'] ){
                $exists = TRUE;
            }
            $_SESSION['exists'] = $exists;

        }
        if(!$exists){
            $person;

            if($_SESSION['formvalues']['usertype'] == "Administrator")
            {
                $admin = new Administrator($_SESSION['formvalues']['username'], $_SESSION['formvalues']['email'],$_SESSION['formvalues']['password']);
                $admin->setUsertype("Administrator");
                $person = $admin;

            }

            else if($_SESSION['formvalues']['usertype'] == "User")
            {
                $user = new User($_SESSION['formvalues']['username'], $_SESSION['formvalues']['email'],$_SESSION['formvalues']['password']);
                $user->setUsertype("USER");
                $person = $user;

            }

            try{
                $persons = new Persons();
                if(isset($_SESSION['objects'])){
                    $persons->members = $_SESSION['objects'];
                }
                $persons->addMember($person);
                $_SESSION['objects'] = $persons->members;
            }
            catch(TypeError $e){
                $_SESSION['errors'] = $e->getMessage();
            }
            finally{
                unset($_SESSION['formvalues']);
                require_once('views/outputview.php');
            }


        }
        else{
            require_once('views/inputview.php');

        }
    }
    else if(isset($_SESSION['formvalues']['loginfield'])){
        if(!empty($objects)){
            foreach($objects as $user){
                $user = unserialize($user);
                $userlogin = $_SESSION['formvalues']['username'];
                if($user->username == $userlogin){
                    $hash = $user->password;
                    $password = $_SESSION['formvalues']['password'];
                    unset($_SESSION['formvalues']);
                    if (password_verify($password, $hash)) {
                        $_SESSION['userloggedin'] = $user->username;
                        $_SESSION['loginsucces'] = true;
                        setcookie($user->username . 'LoginCookie', "You are logged in", time()+ 60*30);
                    } else {
                        $_SESSION['loginsucces'] = false;
                    }

                }
            }

        }
        else{
            $_SESSION['loginsucces'] = false;
        }
        unset($_SESSION['formvalues']);
        header('Location:index.php');

    }
}

else
{
    require_once('views/inputview.php');
}

?>
