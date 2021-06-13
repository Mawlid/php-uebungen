<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Addieren zweier Zahlen</title>
</head>
<body>

<?php
$number1 = $_POST["zahl1"];
$number2 = $_POST["zahl2"];
echo $number1 + $number2;
?>

<br>
<a href="<?php echo __BASEURI__;?>">Home</a>
</body>
</html>