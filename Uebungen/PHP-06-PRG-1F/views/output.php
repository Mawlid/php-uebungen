<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
<form action="index.php" method="post">

    <?php echo $_SESSION["output"]; ?>


    Domaincookie:
    <?php if(isset($_COOKIE["letzername"]))
    {
        echo $_COOKIE["letztername"];
    }

        ?>

    <br>
    <a href="<?php echo "index.php";?>">Home</a>
</form>
    </div>
</div>
</body>
</html>