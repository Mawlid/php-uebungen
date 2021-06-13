<!DOCTYPE html>
<html>
   <body>
   <form action = "<?php __ROOT__ .'/index.php' ?>" method="post"> <!-- ohne method ist get standard -->
       <input id="man" name="geschlecht" value="männlich" type="radio">
       männlich
       <input id="woman" name="geschlecht" value="weiblich" type="radio">
       weiblich
       <br>
       Ich akzeptiere die AGBs <input id="check" name="agbs" value="Ja" type="checkbox">
       <br>
       <input type="submit">
   </form>

   <br>
   <a href="<?php echo __MRGDIR__;?>">Home</a>
   </body>
</html>

