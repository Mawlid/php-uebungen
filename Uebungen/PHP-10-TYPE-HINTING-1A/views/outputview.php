<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Type Hinting A</title>
</head>
<body>
<div class="container">
    <h1 class="h1">Type Hinting A</h1>
        <div class="jumbotron">
        <h2>Errors</h2>
        <?php
            foreach ($errors as $error){
                echo $error;
            }
        ?>
        <h2>Users</h2>
            <table class="table table-striped">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Usertype</th>
            </tr>
                <?php
                foreach ($users->members as $keyperson => $outputperson)
                echo "<tr>";
                echo "<th scope=\"row\">". $keyperson . "</th>";
                echo "<td>" . $outputperson->getUsername() . "</td>";
                echo "<td>" . $outputperson->getPassword() . "</td>";
                echo "<td>" . $outputperson->getEmail() . "</td>";
                echo "<td>" . $outputperson->getUsertype() . "</td>";
                echo "</tr>";
                ?>
            </table>
        </div>
</div>
</body>
</html>