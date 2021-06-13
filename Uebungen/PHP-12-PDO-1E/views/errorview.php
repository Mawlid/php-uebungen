<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Errors</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="jumbotron">
    <h2>Errors</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Error</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($errors as $key => $error) {
            echo "<tr>";
            echo "<th scope=\"row\">". $key . "</th>";
            echo "<td>" . $error . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>