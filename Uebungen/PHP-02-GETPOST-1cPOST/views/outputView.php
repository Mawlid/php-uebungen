<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
</head>
<body>

<?php

    $name = $_POST['name']; //speichert den eingegebenen Namen in eine Variable
    $pw = $_POST['pw']; //speichert das eingegebenen Passwort in eine Variable

    foreach ($name as $key => $n) :
        echo "Username: " .$n . "Password: " .$pw[$key]."<br>";
        endforeach;
?>


<br>
<a href="<?php echo __MRGDIR__;?>">Home</a>
</body>
</html>