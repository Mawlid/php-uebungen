<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Lieblingsschauspieler, Lieblingsfilm, Lieblingserie und Telefonnummer </title>
</head>
<body>
<div class="container"> <!-- http://getbootstrap.com/css/ -->
    <div class="jumbotron">
        <h2>Lieblingsschauspieler, Lieblingsfilm, Lieblingserie und Telefonnummer </h2>
        <form action="index.php" method="post" >
            <div class="form-group">
                <?php
                if ($lschauspielerERROR) { ?>

                    <div style="color:<?php echo $color ?>;">
                        <label for="lieblingsschauspieler">Lieblingsschauspieler: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
                    </div>
                    <input type="text" class="form-control" name="lieblingsschauspieler" id="lieblingsschauspieler" value="<?php echo $_POST['lieblingsschauspieler']?>"><br>
                <?php }
                else if (empty($_POST)) { ?>
                    <label for="lieblingsschauspieler">Lieblingsschauspieler: </label>
                    <input type="text" class="form-control" name="lieblingsschauspieler" id="lieblingsschauspieler"><br>
                <?php } else
                {    echo "lieblingsschauspieler: " . $_POST['lieblingsschauspieler'];
                    ?>
                    <br/>
                    <input type="hidden" class="form-control" name="lieblingsschauspieler" id="lieblingsschauspieler" value="<?php echo $_POST['lieblingsschauspieler']?>"><br>

                <?php } ?>
            </div>
            <div class="form-group">
                <?php
                if ($lfilmERROR) { ?>
                <div class="form-group">
                    <div style="color:<?php echo $color ?>;">
                        <label for="lieblingsfilm">Lieblingsfilm: (zu kurz <= 4 oder leer oder enthält Zahlen)</label> <!-- bezieht sich auf die id -->
                    </div>
                    <input type="text" class="form-control" name="lieblingsfilm" id="lieblingsfilm" value="<?php echo $_POST['lieblingsfilm']?>"><br>
                    <?php }
                    else if (empty($_POST)) { ?>
                        <label for="lieblingsfilm">Lieblingsfilm: </label>
                        <input type="text" class="form-control" name="lieblingsfilm" id="Lieblingsfilm"><br>
                    <?php } else
                    {    echo "lieblingsfilm: " . $_POST['lieblingsfilm'];
                        ?>
                        <br/>
                        <input type="hidden" name="lieblingsfilm" id="lieblingsfilm" value="<?php echo $_POST['lieblingsfilm']?>"><br>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <?php
                    if ($lserieERROR) { ?>
                        <div style="color:<?php echo $color ?>;">
                            <label for="lieblingserie">Lieblingserie: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
                        </div>
                        <input type="text" class="form-control" name="lieblingserie" id="lieblingserie" value="<?php echo $_POST['lieblingserie']?>"><br>
                    <?php }
                    else if (empty($_POST)) { ?>
                        <label for="lieblingserie">Lieblingserie: </label>
                        <input type="text" class="form-control" name="lieblingserie" id="lieblingserie"><br>
                    <?php } else
                    {    echo "lieblingserie: " . $_POST['ieblingserie'];
                        ?>
                        <br/>
                        <input type="hidden" name="lieblingserie" id="lieblingserie" value="<?php echo $_POST['ieblingserie']?>"><br>
                    <?php }

                    ?>
                </div>
                <div class="form-group">
                    <?php
                    if ($telefonnumerERROR) { ?>
                    <div class="form-group">
                        <div style="color:<?php echo $color ?>;">
                            <label for="telefonnummer">Telefonnummer: (enthält Buchstaben)</label>
                        </div>
                        <input type="text" class="form-control" name="telefonnummer" id="telefonnummer" value="<?php echo $_POST['telefonnummer']?>"><br>
                        <?php }
                        else if (empty($_POST)) { ?>
                            <label for="telefonnummer">Telefonnummer : </label>
                            <input type="text" class="form-control" name="telefonnummer" id="telefonnummer"><br>
                        <?php } else
                        {    echo "telefonnummer: " . $_POST['telefonnummer'];
                            ?>
                            <br/>
                            <input type="hidden" name="telefonnummer" id="telefonnummer" value="<?php echo $_POST['telefonnummer']?>"><br>
                        <?php } ?>

                        <button type="submit" class="btn btn-primary" name="submit" value="Abschicken">Submit</button>
                        <button type="submit" class="btn btn-primary" name="clear" value="Löschen">Clear</button>
        </form>
    </div>
    <div class="list-group">
        <a class="list-group-item" href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; HOME</a>
    </div>
</div></body>
</html>

