<?php
    class Persons{
        public $members;
        public function __costruct(){
            $this->members = array();           
        }
        public function addMember(Person $person){
            $this->members[] = serialize($person);
            
        }
    }
?>