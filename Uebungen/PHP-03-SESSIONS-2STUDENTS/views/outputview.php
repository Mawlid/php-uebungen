<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rechner</title>
</head>
<body>
<?php

foreach ($_SESSION["name"] as $name):
        echo $name. "<br>";
endforeach;


?>
<?php
if(isset($_SESSION) && !(empty($_SESSION))) { ?>   <!-- Gibt es eine Session und gibt es dort Variablen?  -->
    <br>
    Die Seite wurde <?php echo $_SESSION["counter"]; ?> mal aufgerufen.
<?php } ?>

<br>
<a href="<?php echo __BASEURI__;?>">Home</a>
</body>
</html>