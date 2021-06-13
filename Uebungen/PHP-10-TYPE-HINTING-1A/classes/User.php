<?php

class User
{
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email){
        $this->$username = $username;
        $this->$password = $password;
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }
    public function setUsername($value){
        $this->username = $value;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($value){
        $this->password = $value;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($value){
        $this->email = $value;
    }

}