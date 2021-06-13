<?php
class Administrator extends Person implements iperson {
    public $usertype;
    public function getUsername(){
        return $this->$username;
    }
    public function setUsertype($usertype){
       $this->usertype = $usertype;
    }    
}
?>