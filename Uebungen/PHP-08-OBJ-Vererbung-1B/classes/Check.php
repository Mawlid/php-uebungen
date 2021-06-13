<?php

class Check
{
    private $usergroup;
    private $username;
    private $password;

    public function __construct($usergroup,$username,$password)
    {
        $this->usergroup = $usergroup;
        $this->username = $username;
        $this->password = $password;
    }

    public function Errorusergroup()
    {
        $usergroup = $this->usergroup;
        if($usergroup != "Admin" && $usergroup != "Registered" && $usergroup != "Author" && $usergroup != "Manager")
        {
            return false;
        }
        else
            return true;
    }

    public function Errorusername()
    {
        $username = $this->username;

        if(strlen(trim($username)) == 0)
        {
            return false;
        }
        if(strlen($username) < 5)
        {
            return false;
        }
        if(preg_match("~[0-9]~",$username != 0))
        {
            return false;
        }
        return true;
    }
    public function Errorpassword()
    {
        $password = $this->password;

        if(strlen(trim($password)) == 0)
        {
            return false;
        }
        if(strlen($password) < 4)
        {
            return false;
        }
        if(preg_match("~#~",$password) != 1)
        {
            return false;
        }
        return true;
    }
}