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
        parent::__construct($username, $password, $email);
        $this->usergroup = $usergroup;

    }

}