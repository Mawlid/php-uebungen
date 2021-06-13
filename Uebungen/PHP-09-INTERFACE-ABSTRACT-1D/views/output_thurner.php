<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interface-Abstract-1D</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <div class="well form-horizontal">
<table>
        <tr>
            <th>Username</th>
            <th>Usergroup</th>
            <th>Password</th>
            <th>E-mail</th>
        </tr>

        <?php
        echo "<tr>";
        foreach($_SESSION["users"] as $object){
            echo "<h4>" . unserialize($object) . "</h4>";
        }
        unset($_SESSION["post"]);
        echo "</tr>";
        ?>

        </table>
        Letzter gültiger Name: <?php echo $myDomainCookieValue; ?><br>

    </div>
    </div>
</div>
</body>
</html>