<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Objekte 1B</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <form action="index.php" method="post">
        <div class="form-group">
            <?php
            if ($thurnerERRORfname) { ?>

            <div style="color:<?php echo $color ?>;">
                <label for="Firstname">Firstname: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
            </div>
            <input type="text" class="form-control" name="Firstname" id="Firstname" value="<?php echo $_POST['Firstname']?>"><br>
            <?php }
            else if (empty($_POST)) { ?>
                <label for="Firstname">Firstname: </label>
                <input type="text" class="form-control" name="Firstname" id="Firstname"><br>
            <?php } else
            {    echo "Firstname: " . $_POST['Firstname'];
                ?>
                <br/>
            <?php } ?>
        </div>
        <div class="form-group">
            <?php
            if ($thurnerERRORsname) { ?>
                <div style="color:<?php echo $color ?>;">s
                    <label for="Secondname">Secondname: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
                </div>
                <input type="text" class="form-control" name="Secondname" id="Secondname" value="<?php echo $_POST['Secondname']?>"><br>
            <?php }
            else if (empty($_POST)) { ?>
                <label for="Secondname">secondname: </label>
                <input type="text" class="form-control" name="Secondname" id="Secondname"><br>
            <?php } else
            {    echo "Secondname: " . $_POST['Secondname'];
                ?>
                <br/>
            <?php } ?>
        </div>
        <div class="form-group">
            <?php
            if ($thurnerERRORage) { ?>
                <div style="color:<?php echo $color ?>;">
                    <label for="Age">Age: Enthält ander Zeichen als zahlen</label>
                </div>
                <input type="text" class="form-control" name="Age" id="Age" value="<?php echo $_POST['Age']?>"><br>
                <?php }
                else if (empty($_POST)) { ?>
                    <label for="Age">age : </label>
                    <input type="text" class="form-control" name="Age" id="Age"><br>
                <?php } else
                {    echo "Age: " . $_POST['Age'];
                    ?>
                    <br/>
                <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="Abschicken">submit</button>
        </form>
    </div>
</div>
</body>
</html>
