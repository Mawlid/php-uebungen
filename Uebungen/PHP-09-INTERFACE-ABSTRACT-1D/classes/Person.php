<?php

abstract class apersons
{
    protected abstract function __construct($username, $password, $email);
    // protected abstract function getUsername();
}
class Person extends apersons
{
    protected $username;
    protected $password;
    protected $email;

    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

}