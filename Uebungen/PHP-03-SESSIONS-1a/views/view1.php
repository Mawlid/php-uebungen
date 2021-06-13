<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <meta name="viewport"
             content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="chrome=1">
       <link rel="stylesheet" href="../bootstrap/bootstrap.css">
       <title>Counter</title>
   </head>
    <body>
        <h1>Counter</h1>
        <br>
        <?php
        if (isset($_SESSION) && !(empty($_SESSION))) { ?>
        Diese Seite wurde <?php echo $counter; ?> mal aufgerufen.
        <?php } ?>
        <br>
    <a href="<?php echo __BASEURI__;?>">Home</a>

   </body>
</html>

