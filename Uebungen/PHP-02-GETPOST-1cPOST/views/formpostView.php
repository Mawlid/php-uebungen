<!DOCTYPE html>
<html>
   <body>
   <form action = "<?php __ROOT__ .'/index.php' ?>" method="post"> <!-- ohne method ist get standard -->
       NAME1: <input id="name1" name="name[]" type="text">
       PW1: <input id="pw1" name="pw[]" type="text">
       <br>

       NAME2: <input id="name2" name="name[]" type="text">
       PW2: <input id="pw2" name="pw[]" type="text">
       <br>

       NAME3: <input id="name3" name="name[]" type="text">
       PW3: <input id="pw3" name="pw[]" type="text">
       <br>

       NAME4: <input id="name4" name="name[]" type="text">
       PW4: <input id="pw4" name="pw[]" type="text">
       <br>

       NAME5: <input id="name1" name="name[]" type="text">
       PW5: <input id="pw5" name="pw[]" type="text">
       <br>

       <input type="submit">
   </form>

   <br>
   <!-- <a href="<?php echo __MRGDIR__;?>">Home</a> -->
   </body>
</html>

