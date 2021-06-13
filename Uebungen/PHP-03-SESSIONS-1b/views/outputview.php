<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Name_und_Email</title>
</head>
<body>
<?php
$nummer1 = $_POST["zahl1"];
$nummer2 = $_POST["zahl2"];

echo $nummer1 + $nummer2;
?>
<?php
if(isset($_SESSION) && !(empty($_SESSION))) { ?>   <!-- Gibt es eine Session und gibt es dort Variablen?  -->
    Die Seite wurde <?php echo $_SESSION["counter"]; ?> mal aufgerufen.
<?php } ?>

<br>
<a href="<?php echo __BASEURI__;?>">Home</a>
</body>
</html>