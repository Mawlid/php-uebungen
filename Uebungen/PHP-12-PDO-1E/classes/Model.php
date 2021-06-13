<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Model{
    public static $pdo;

    public static function connect() {
        try
        {
            self::$pdo = new PDO('mysql:host=localhost;dbname=users', 'users', 'wald4932');

        }
        catch (PDOException $e)
        {
            $log = new Logger("Schwonz");
            $log->pushHandler(new StreamHandler('Yee.log', Logger::WARNING));


            $errors[] = $e->getMessage();
            $log->error("Database Error". $e->getMessage());
            require_once("views/errorview.php");
            die();
        }
    }

    public function getAllUsers() :array {
        $values = self::$pdo->query("SELECT * from user");

        $users = array();

        while ($row = $values->fetch())
        {
            $username = $row["Username"];
            $password = $row["Password"];
            $usertype = $row["Usertype"];
            $email = $row["Email"];

            $user = new User($username,$password,$email);
            $user->setUsertype($usertype);

            $users[] = $user;

        }

        return $users;
    }
    public function addUser(User $user)
    {

            $Username = $user->getUsername();
            $Password = $user->getPassword();
            $Email = $user->getEmail();
            $Usertype = $user->getUsertype();
        switch ($Usertype){
            case "Administrator":
                $Usertype = "1";
                break;
            case "User":
                $Usertype = "2";
                break;
        }



        $stmt = self::$pdo->prepare("INSERT INTO user (Username,Password,Email,Usertype) VALUES (\"$Username\", \"$Password\", \"$Email\", \"$Usertype\")");

        //self::$pdo->bindParam(":username",$username);
        $stmt->execute();
    }

    public function select()
    {
        $result=self::$pdo->query("SELECT * FROM user");
        return $result;
    }

    public static function Delete(User $user)
    {
        $Username = $user->getUsername();

        $stmt = self::$pdo->prepare("DELETE FROM user WHERE username = \"$Username\"");
        $stmt->execute();
    }
}