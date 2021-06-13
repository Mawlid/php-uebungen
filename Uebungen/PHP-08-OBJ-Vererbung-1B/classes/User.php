<?php

class User extends Person
{
    private $usergroup;


    public function getUsergroup()
    {
        return $this->usergroup;
    }

    public function __construct($usergroup)
    {
        parent::__construct($usergroup);
        $this->usergroup = $usergroup;
    }
}