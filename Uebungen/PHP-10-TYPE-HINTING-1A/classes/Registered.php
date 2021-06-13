<?php

class Registered extends User {
    public $usertype;
    public function __construct($username, $password, $email){
        parent:: __construct($username, $password, $email);
        $this->usertype = "Registered";
    }

    public function getUsertype(): string
    {
        return $this->usertype;
    }
}