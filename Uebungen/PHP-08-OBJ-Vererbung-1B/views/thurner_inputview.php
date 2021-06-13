<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Objekte 1C</title>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <form action="index.php" method="post" >
            <div class="form-group">
                <?php
                if ($ERRORgroups) { ?>

                    <div style="color:<?php echo $color ?>;">
                        <label for="Usergourp">Usergroup: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
                    </div>
                    <input type="text" class="form-control" name="Usergroup" id="Usergroup" value="<?php echo $_POST['Usergroup']?>"><br>
                <?php }
                else if (empty($_POST)) { ?>
                    <label for="Usergroup">Usergroup: </label>
                    <input type="text" class="form-control" name="Usergroup" id="Usergroup"><br>
                <?php } else
                {    echo "Usergroup: " . $_POST['Usergroup'];
                    ?>
                    <br/>
                <?php } ?>
            </div>
            <div class="form-group">
                <?php
                if ($ERRORusername) { ?>

                    <div style="color:<?php echo $color ?>;">
                        <label for="Username">Username: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
                    </div>
                    <input type="text" class="form-control" name="Username" id="Username" value="<?php echo $_POST['Username']?>"><br>
                <?php }
                else if (empty($_POST)) { ?>
                    <label for="Username">Username: </label>
                    <input type="text" class="form-control" name="Username" id="Username"><br>
                <?php } else
                {    echo "Username: " . $_POST['Username'];
                    ?>
                    <br/>
                <?php } ?>
            </div>
            <div class="form-group">
                <?php
                if ($ERRORpassword) { ?>
                <div class="form-group">
                    <div style="color:<?php echo $color ?>;">
                        <label for="Password">password: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
                    </div>
                    <input type="text" class="form-control" name="Password" id="Password" value="<?php echo $_POST['Password']?>"><br>
                    <?php }
                    else if (empty($_POST)) { ?>
                        <label for="Password">password: </label>
                        <input type="Password" class="form-control" name="Password" id="Password"><br>
                    <?php } else
                    {    echo "Password: " . $_POST['Password'];
                        ?>
                        <br/>

                    <?php } ?>
                    <button type="submit" class="btn btn-primary" name="Submit" value="Abschicken">Submit</button>
                    <button type="submit" class="btn btn-primary" name="Clear" value="Löschen">Clear</button>
                    </div>
        </form>
    </div>
</div>
</form>

</body>
</html>