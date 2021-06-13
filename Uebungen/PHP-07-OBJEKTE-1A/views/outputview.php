<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Objects</title>
</head>
<body>
<div class="container">
    <h1>Objects</h1>
    <div class="jumbotron">
    <?php
    foreach($person as $output)
    {
        echo "Name: " . $output->getName();
        echo "  Secondname: " . $output->getSecondname();
        echo "  Birthplace: " . $output->getBirthplace();
        echo "  Age: " . $output->getAge();
        echo "  Note: " . $output->getNote();
        echo "  Personenanzahl: " . $output->getPersonenAnzahl();
        echo "<br>";
    }

    ?>
    </div>
</div>
</body>
</html>