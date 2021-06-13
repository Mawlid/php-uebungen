<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User</title>
</head>
<body>

<?php
    echo "Name: " .$_GET["name"];
    echo "<br>";
    echo "Lieblingsobst: " .$_GET["Obst"];
?>

<br>
<a href="<?php echo __MRGDIR__;?>">Home</a>
</body>
</html>