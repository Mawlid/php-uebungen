<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>PRG 1F</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
<form action="index.php" method="post">

    <div class="form-group">
        <label for="Spitzname" id="LAspitzname">Spitzname: <?php echo $FLMname; ?></label><input type="text" name="Spitzname" id="Spitzname"><br>
    </div>
    <div class="form-group">
        <label for="Lieblingsurlaubsland" id="LAliebliengsurlaubsland">Lieblingsurlaubsland: <?php echo $FLMland; ?></label><input type="text" name="Lieblingsurlaubsland" id="Lieblingsurlaubsland"><br>
    </div>
    <div class="form-group">
        <label for="Email" id="LAmail">E-Mail: <?php echo $FLMemail; ?></label><input type="text" name="Email" id="Email"><br>
    </div>

    <script type="text/javascript">

        var SpiName = "<?php echo $FLCname; ?>";
        var LiebLand = "<?php echo $FlCland; ?>";
        var Email = "<?php echo $FLCemail; ?>";

        document.getElementById("LASpitzname").style.backgroundColor = SpiName;
        document.getElementById("LALieblingsurlaubsland").style.backgroundColor = LiebLand;
        document.getElementById("LAEmail").style.backgroundColor = Email;

        if (SpiName == "red")
        {
            document.getElementById("Spitzname").value = "<?php echo $name; ?>";
        }
        if (LiebLand == "red")
        {
            document.getElementById("Lieblingsurlaubsland").value = "<?php echo $land; ?>";

        }
        if (Email == "red")
        {
            document.getElementById("Email").value = "<?php echo $email; ?>";
        }



    </script>


    <button type="submit" class="btn btn-primary" name="submit" value="Abschicken">submit</button>
    <button type="submit" class="btn btn-primary" name="clear" value="Löschen">clear</button>

</form>
</div>
</div>
</body>
</html>