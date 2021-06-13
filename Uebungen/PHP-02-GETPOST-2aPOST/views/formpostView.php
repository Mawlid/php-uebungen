<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Name_und_Email Formular</title>
</head>
   <body>
   <form action = "<?php echo __BASEURI__ .'/index.php' ?>" method="post">
       <label for="name">Name: </label> <!-- bezieht sich auf die id -->
       <input type="text" name="name" id="name"><br>
       <label for="name">E-mail: </label> <!-- bezieht sich auf die id -->
       <input type="email" name="email" id="email"><br>
       <?php
       if ($POSTERROR) { ?>
           <div style="color:<?php echo $color ?>;"> Name oder E-Mail fehlt </div>
       <?php }

       ?>
       <input type="submit">
   </form>
   <a href="<?php echo __BASEURI__;?>">Home</a>
   </body>
</html>

