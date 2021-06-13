<?php

$persons[1] = new Person("Thomas Thurner",17,"blau");

$persons[1]->setNickname("Tomi");

$persons[1]->setKommentar("Yeah");

$persons[2] = new Person("Chlor Brunner",10,"blau");

$persons[2]->setNickname("Chlori");

$persons[2]->setKommentar("Yeah");
$persons[2]->addKommentar("Man");


$employees[1] = new Employee("Peter Huber", 22,"grün");

$persons[2]->doAge();  // Aufruf der Methode doAge() aus Person
$employees[1]->doAge(); // Aufruf der Methode doAge() aus Student
$employees[1]->setKommentar("Cool");
$employees[1]->addKommentar("Student");
$employees[1]->setNickname("Hubi");
$employees[1]->dowork(2);

require_once("views/thurner_outputView.php");