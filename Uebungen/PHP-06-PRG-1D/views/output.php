<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- http://www.w3schools.com/css/css_rwd_viewport.asp -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Vorname und Name und Email</title>
</head>
<body>
<div class="container"> <!-- http://getbootstrap.com/css/ -->
    <div class="jumbotron">
        Welcome <?php echo $firstname . " " . $name; ?><br>
        Your email address is: <?php echo $email; ?><br>
        <br>
        Letzter gültiger Name: <?php echo $DomainCookieValue; ?><br>

    </div>
    <div class="list-group">
        <a class="list-group-item" href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; HOME</a>
    </div>
</div>
</body>
</html>