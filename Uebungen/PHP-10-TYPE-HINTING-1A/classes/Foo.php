<?php

class Foo
{
    private $username;
    private $password;
    private $email;
    private $usertype;

    public function __construct($username, $password, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->usertype = "Foo"; }
}