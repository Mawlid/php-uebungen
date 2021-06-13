<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRG</title>
</head>
<body>
<form method="post" action="<?php echo "index.php" ?>">
    <label <?php
    if(!$nameOK)
    {
        echo "style=\"color:red\"";
    } ?>>Name: </label><input type="text" id="name" name="name"><br>
    <label <?php
    if(!$emailOK)
    {
        echo "style=\"color:red\"";
    }
    ?>>Email: </label><input type="text" id="email" name="email"><br>

    <input type="submit">
</body>
</html>