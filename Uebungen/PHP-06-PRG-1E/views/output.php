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
        Lieblingsschauspieler: <?php echo $lieblingsschauspieler; ?> <br>
        Lieblingsfilm: <?php echo $lieblingsfilm; ?> <br>
        Lieblingserie: <?php echo $lieblingserie; ?> <br>
        Telefonnummer: <?php echo $telefonnummer; ?> <br>
        Letzte eingegeben Lieblingserie : <?php echo $myDomainCookieValue; ?><br>
    </div>
    <div class="list-group">
        <a class="list-group-item" href="<?php echo "index.php"?>"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; HOME</a>
    </div>
</body>
</html>