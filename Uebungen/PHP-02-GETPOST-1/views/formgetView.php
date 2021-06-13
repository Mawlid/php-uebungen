<!DOCTYPE html>
<html>
   <body>
   <form action = "<?php __ROOT__ .'/index.php' ?>" method="get"> <!-- ohne method ist get standard -->
       Name: <input type="text" name="name"><br>
       E-mail: <input type="text" name="email"><br>
       <input type="submit">
   </form>

   <br>
   <a href="<?php echo __MRGDIR__;?>">Home</a>
   </body>
</html>

