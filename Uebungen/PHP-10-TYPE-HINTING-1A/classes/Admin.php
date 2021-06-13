<?php

class Admin extends User {

    public $usertype;
    public function __construct($username, $password, $email){
        parent:: __construct($username, $password, $email);
        $this->usertype = "Admin";
    }

    public function getUsertype(): string{
        return $this->usertype;
    }
}