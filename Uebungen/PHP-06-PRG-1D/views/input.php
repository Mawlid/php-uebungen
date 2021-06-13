<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- http://www.w3schools.com/css/css_rwd_viewport.asp -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Name_und_Email Formular</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h2>Vorname, Name und E-Mail</h2>
        <form action = "<?php echo 'index.php' ?>" method="post">
            <div class="form-group">
                <?php
                if ($firstnameERROR) { ?>

                    <div style="color:<?php echo $color ?>;">
                        <label for="firstname">Vorname: (zu kurz <= 2 oder leer oder enthält Zahlen)</label> <!-- bezieht sich auf die id -->
                    </div>
                    <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $_POST['firstname']?>"><br>
                <?php }
                else if (empty($_POST)) { ?>
                    <label for="firstname">Vorname: </label> <!-- bezieht sich auf die id -->
                    <input type="text" class="form-control" name="firstname" id="firstname"><br>
                <?php } else
                {    echo "Vorname: " . $_POST['firstname'];
                    ?>
                    <br/>
                    <input type="hidden" class="form-control" name="firstname" id="firstname" value="<?php echo $_POST['firstname']?>"><br>

                <?php } ?>
            </div>
            <div class="form-group">
                <?php
                if ($nameERROR) { ?>
                <div class="form-group">
                    <div style="color:<?php echo $color ?>;">
                        <label for="name">Name: (zu kurz <= 2 oder leer oder enthält Zahlen)</label> <!-- bezieht sich auf die id -->
                    </div>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $_POST['name']?>"><br>
                    <?php }
                    else if (empty($_POST)) { ?>
                        <label for="name">Name: </label> <!-- bezieht sich auf die id -->
                        <input type="text" class="form-control" name="name" id="name"><br>
                    <?php } else
                    {    echo "Name: " . $_POST['name'];
                        ?>
                        <br/>
                        <input type="hidden" name="name" id="name" value="<?php echo $_POST['name']?>"><br>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <?php
                    if ($emailERROR) { ?>
                        <div style="color:<?php echo $color ?>;">
                            <label for="email">E-Mail: </label> <!-- bezieht sich auf die id -->
                        </div>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $_POST['email']?>"><br>
                    <?php }
                    else if (empty($_POST)) { ?>
                        <label for="email">E-Mail: </label> <!-- bezieht sich auf die id -->
                        <input type="text" class="form-control" name="email" id="email"><br>
                    <?php } else
                    {    echo "E-Mail: " . $_POST['email'];
                        ?>
                        <br/>
                        <input type="hidden" name="email" id="email" value="<?php echo $_POST['email']?>"><br>
                    <?php }

                    ?>

                    <button type="submit" class="btn btn-primary" name="submit" value="Abschicken">Submit</button>
                    <button type="submit" class="btn btn-primary" name="clear" value="Löschen">Clear</button>
        </form>
    </div>
    <div class="list-group">
        <a class="list-group-item" href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; HOME</a>
    </div>
</div>
</body>
</html>

