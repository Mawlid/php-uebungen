<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="hidden" name="hiddenshit">
    <label <?php
    if(!$corname){
        echo "style=\"color:red\"";
    } ?>>Name: </label><input type="text" name="name" id="name">
    <label <?php
    if(!$coremail){
        echo "style=\"color:red\"";
    } ?>>E-Mail: </label><input type="text" name="email" id="email">
    <script>
        nameInput = document.getElementById("name");
        <?php
        if($corname)
        {
            echo "nameInput.value = \"$name\"";
        }
        ?>
    </script>
    <script>
        emailInput = document.getElementById("email");
        <?php
        if($coremail)
        {
            echo "emailInput.value = \"$email\"";
        }
        ?>
    </script>
    <input type="submit" value="enter">
</form>
</body>
</html>