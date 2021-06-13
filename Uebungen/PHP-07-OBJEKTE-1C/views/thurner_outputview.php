<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Objekte 1C</title>
</head>
<body>

<table>
    <tr>
        <th>#</th>
        <th>username</th>
        <th>password</th>
    </tr>
    <?php
    $personList = $_SESSION["post"];
    for($i = 0; $i < count($personList); $i++)
    {
        $person = $personList[$i];
        $number = $i + 1;
        $username = $person->getUsername();
        $password = $person->getPassword();
        echo "<tr><td>$number</td><td>$username</td><td>$password</td></tr>";
    }
    ?>
</table><br>

</body>
</html>
