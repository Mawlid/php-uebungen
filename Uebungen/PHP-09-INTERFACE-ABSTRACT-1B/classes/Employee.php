<?php

class Employee extends Person {

    private $workinghours;
    private $years;

    public function __construct($name, $age, $favcolor) {
        parent::__construct($name, $age, $favcolor);
        $this->hourslearned = 0; }

    public function dowork($hours) {
        $this->workinghours += $hours;
    }

    public function doAge() {
        parent::doAge();
        $this->years += 2; }

    /**
     * @return int
     */
    public function getHoursworked(): int
    {
        return $this->workinghours;
    }

    /**
     * @return mixed
     */
    public function getYears()
    {
        return $this->years;
    }


}