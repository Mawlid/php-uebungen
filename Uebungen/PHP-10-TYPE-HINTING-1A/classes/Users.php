<?php

class Users
{
    public $members = array();
    public $name;
    public function __costruct($name){
        $this->name = $name;
    }
    public function addMember($user){
        $this->members[] = serialize($user);

    }
}