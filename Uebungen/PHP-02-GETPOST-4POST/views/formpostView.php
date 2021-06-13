<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Addieren</title>
</head>
   <body>
   <form action = "<?php echo __BASEURI__ .'/index.php' ?>" method="post">
       <label for="name">Zahl 1: </label>
       <input type="text" name="zahl1" id="z1"><br>
       <label for="name">Zahl 2: </label>
       <input type="text" name="zahl2" id="z1"><br>
       <?php
       if ($POSTERROR) { ?>
           <div style="color:<?php echo $color ?>;">Müssen 2 Zahlen sein </div>
       <?php }
       ?>
       <input type="submit">
   </form>
   <a href="<?php echo __BASEURI__;?>">Home</a>
   </body>
</html>

