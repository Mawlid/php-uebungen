<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO 1A</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>PDO 1D</h1>
    <?php if ($statement) { ?>
    <div class="jumbotron">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>Usertype</td>
                </tr>
            </thead>
            <?php
            $c=1;
            while( $row = $statement->fetch())
            {
                echo "<tr>";
                echo "<th scope=\"row\">". $c++ . "</th>";
                echo "<td>" . $row["Username"] . "</td>";
                echo "<td>" . $row["Password"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                $usertype = "null";
                switch ($row["Usertype"])
                {
                    case 1:
                        $usertype = "Admin";
                        break;
                    case 2:
                        $usertype = "Registered";
                        break;
                    case 3:
                        $usertype = "Editor";
                        break;
                    default:
                        $usertype = $row["Usertype"];
                }
                echo "<td>" . $usertype . "</td>";
                echo "<tr>";
            }
            ?>
        </table>
    </div>
    <?php }  ?>
    <div class="jumbotron">
        <h2>Errors</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Error</th>
            </tr>
            </thead>
            <?php
            foreach($errors as $key => $error) {
                echo "<tr>";
                echo "<th scope=\"row\">". $key . "</th>";
                echo "<td>" . $error . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>