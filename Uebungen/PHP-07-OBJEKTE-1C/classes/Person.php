<?php

class Person
{
    private $firstName;
    private $secondName;
    private $username;
    private $password;

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getSecondName()
    {
        return $this->secondName;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}