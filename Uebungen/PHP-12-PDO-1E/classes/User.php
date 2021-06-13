<?php
interface iUser
{
    public static function logout();
}
class User extends Person implements iUser
{
    private $username;
    private $password;
    private $email;

    public function getUsername() : string
    {
        return $this->username;
    }
    public function getPassword() : string
    {
        return $this->password;
    }
    public function getEmail () : string
    {
        return $this->email;
    }
    public function setUsertype(string $usertype)
    {
        $this->usertype = $usertype;
    }


    public function __construct(string $username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }
    public static function logout()
    {
        setcookie("user","",0,"","localhost");
        unset($_COOKIE);
    }
}