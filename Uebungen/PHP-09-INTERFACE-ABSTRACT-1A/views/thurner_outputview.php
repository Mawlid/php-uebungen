<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Vererbung-1A</title>
</head>
<body>
<div class="container">
    <h1>Interface-Abstract</h1>
    <img src="media/logo2.svg">
<div class="jumbotron">
    <h2>Personen</h2>
    <?php
    foreach($persons as $outputperson) {
        echo "Name: " . $outputperson->getName();
        echo " |Farbe: " . $outputperson->getFavcolor();
        echo " |Alter: " . $outputperson->getAge();
        echo " |Spitzname: " . $outputperson->getNickname();
        echo " |Kommentar: " . $outputperson->kommentar;
        echo " |AnzahlPersonen: " . $outputperson->getAnzahlPersonen();
        echo " |AnzahlPersonenPublic: " . $outputperson::$anzahl_personenpublic;
        echo "<br>";
    }
    ?>
</div>
<div class="jumbotron">
    <h2>Studenten</h2>
    <?php
    foreach($employees as $outputemployees) {
        echo "Name: " . $outputemployees->getName();
        echo " |Farbe: " . $outputemployees->getFavcolor();
        echo " |Alter: " . $outputemployees->getAge();
        echo " |Spitzname: " . $outputemployees->getNickname();
        echo " |Lernstunden: " . $outputemployees->getHoursworked();
        echo " |Semester: " . $outputemployees->getYears();
        echo " |Kommentar: " . $outputemployees->kommentar;
        echo " |AnzahlPersonen: " . $outputemployees->getAnzahlPersonen();
        echo " |AnzahlPersonenPublic: " . $outputperson::$anzahl_personenpublic;
        echo "<br>";
    }
    ?>
</div>
<div class="jumbotron">
    <?php
    if ($persons[2] instanceof Person) {  // Feststellen des Typs mit instanceof
        echo '$persons[2] instanceof Person - this is a Person';
        echo '<br>';
    }
    if ($employees[1] instanceof Employee) {
        echo '$students[1] instanceof Student - this is a Student';
        echo '<br>';
    }
    if ($employees[1] instanceof Person) {
        echo '$students[1] instanceof Person - this is also a Person';
        echo '<br>';
    }
    if ($persons[2] instanceof Employee) {
        echo '$persons[2] instanceof Student - true';
        echo '<br>';
    }
    else
    {
        echo '$persons[2] instanceof Student - false - this will never be true';
        echo '<br>';
    }
    ?>
</div>
</div>

</body>
</html>