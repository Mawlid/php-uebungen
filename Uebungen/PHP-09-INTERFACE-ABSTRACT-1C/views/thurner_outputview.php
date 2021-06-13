<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Interface-Abstract-1C</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <div class="class="well form-horizontal">
    <img src="media/logo2.svg">
    <table class="table table-striped">
    <tr>
        <th>Username</th>
        <th>Usergroup</th>
        <th>Password</th>
        <th>E-mail</th>
    </tr>

    <?php
    foreach($persons as $einzelperson)
    {
        echo "<tr>";
        echo "<td>". $einzelperson->getUsername() . "</td>";
        echo "<td>". $einzelperson->getUsergroup() . "</td>";
        echo "<td>". $einzelperson->getPassword() . "</td>";
        echo "<td>". $einzelperson->getEmail() . "</td>";
        echo "</tr>";
    }
    ?>

    </table>
        Letzter gültiger Name: <?php echo $myDomainCookieValue; ?><br>

        <div class="form-group">
            <button type="submit" class="btn btn-warning" name="Clear" value="löschen">Clear</button>
        </div>
</div>
</div>
</div>
</body>
</html>





