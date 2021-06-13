<?php

class Check
{
    private $username;
    private $password;
    private $passwordconfirm;
    private $email;

    public function __construct($username,$password,$passwordconfirm,$email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->passwordconfirm = $passwordconfirm;
        $this->email = $email;
    }
    public function usernameOK()
    {
        $username = $this->username;

        if (strlen(trim($username)) == 0) {
            return false;
        }
        if (strlen($username) < 4) {
            return false;
        }
        if (preg_match("~[0-9]~", $username != 0)) {
            return false;
        }
        return true;
    }
    public function passwordOK()
    {
        $password = $this->password;
        $passwordconfirm = $this->passwordconfirm;

        if(strlen(trim($password)) == 0)
        {
            return false;
        }
        if(strlen($password) < 4)
        {
            return false;
        }

        if($password != $passwordconfirm)
        {
            return false;
        }
        /*if(preg_match("~#~",$password) != 1)
        {
            return false;
        }
        */
        return true;

    }
    public function emailOK()
    {
        $email = $this->email;

        if(strlen(trim($email)) == 0)
        {
            return false;
        }
        if (strlen(trim($email)) <= 6 OR (preg_match('~@~', trim($email)) != 1) )
        {
            return false;
        }
        return true;
    }
}