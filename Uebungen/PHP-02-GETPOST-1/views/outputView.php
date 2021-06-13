<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User</title>
</head>
<body>


Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

<br>
<a href="<?php echo __MRGDIR__;?>">Home</a>
</body>
</html>