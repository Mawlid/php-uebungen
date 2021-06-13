<?php
interface iperson{
    public function getUsername();
    public function setUsertype($usertype);
}
class Person{
    public $username;
    public $email;
    public $password;
    
    public function getUsername(){
        return $username;
    }
    public function getEmail(){
        return $email;
    }

    public function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password,PASSWORD_DEFAULT);

    }
}

?>