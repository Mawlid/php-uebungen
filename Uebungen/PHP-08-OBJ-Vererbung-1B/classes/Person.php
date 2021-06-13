<?php

class Person
{
    private $username;
    private $password;


    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }
}