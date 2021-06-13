<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <meta name="viewport"
             content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="chrome=1">
       <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
       <title>Rechner</title>
   </head>
    <body>
    <div class="container">
        <form action = "<?php echo __BASEURI__ .'/index.php' ?>" method="post">
            <label for="name">Zahl 1: </label>
            <input type="text" name="zahl1" id="zahl1"><br>
            <label for="name">Zahl 2: </label>
            <input type="text" name="zahl2" id="zahl2"><br>
            <?php
            if ($POSTERROR) { ?>
                <div style="color:<?php echo $color ?>;">ist keine Nummer </div>
            <?php }
            ?>
            <input type="submit">
            <input type="submit" name="Clear" value="Clear">
        </form>
    <a href="<?php echo __BASEURI__;?>">Home</a>
    </div>
   </body>
</html>

