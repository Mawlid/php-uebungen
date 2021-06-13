<?php

class Person
{
    private $firstname;
    private $secondname;
    public $note;
    protected $age;
    protected $birthplace;

    private static $anzahlpersonen = 0;
    public static $anzahlpersonenpublic = 0;

    function __construct($firstname, $secondname, $age)
    {
        $this->firstname = $firstname;
        $this->secondname = $secondname;
        $this->age = $age;
        self::$anzahlpersonen++;
        self::$anzahlpersonenpublic++;
    }

    public function doAge()
    {
        $this->age++;
    }

    public static function getPersonenAnzahl(): int
    {
        return self::$anzahlpersonen;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }

    public function addnote($note){
        $this->note = $this->note . "," . $note;
    }

    public function getName()
    {
        return $this->firstname;
    }

    public function getSecondname()
    {
        return $this->secondname;
    }

    public function setSecondname($secondname)
    {
        $this->secondname = $secondname;
    }

    public function getAge()
    { return $this->age; }

    public function setAge($age)
    {if ($age >= 0) {
        $this->age = $age; }
    }

    public function Createaddress($secondname)
    {
        return $secondname . ".com";
    }


}

