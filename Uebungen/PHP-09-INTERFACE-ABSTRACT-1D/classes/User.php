<?php

class User extends Person
{
    protected $usergroup;

    public function getUsergroup()
    {
        return $this->usergroup;
    }

    public function __construct($username, $usergroup, $password, $email)
    {
        $this->name = $username;
        $this->usergroup = $usergroup;
        $this->pwHash = password_hash($password,PASSWORD_DEFAULT);
        $this->email = $email;
        parent::__construct($username, $password, $email);

    }

}