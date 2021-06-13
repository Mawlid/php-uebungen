<!DOCTYPE html>
<html>
   <body>
   <form action = "<?php __ROOT__ .'/index.php' ?>" method="post"> <!-- ohne method ist get standard -->

       Name: <input id="man" name="name" type="text">
       <br>
       <select name="Obst">
       <option value="Apfel">Apfel</option>
       <option value="Birne">Birne</option>
       <option value="Melone">Melone</option>
       <option value="Bannane">Bannane</option>
       </select>
       <br>
       <input type="submit">
   </form>
   </body>
</html>

