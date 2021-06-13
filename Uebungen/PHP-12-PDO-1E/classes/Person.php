<?php

abstract class Person
{
    protected $usertype;

    abstract public function __construct(string $username, $password, $email);

    public function getUsertype()
    {
        return $this->usertype;
    }
}
?>