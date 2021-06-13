<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
      <div class="container-fluid">
            <div class="navbar-header">
                  <a class="navbar-brand" href="#">PLF-3</a>
                </div>
            <ul class="nav navbar-nav">
                  <li><a href="index.php?menu=home">Home</a></li>
                  <li><a href="index.php?menu=list">List</a></li>
                  <li><a href="index.php?menu=delete">Delete</a></li>
                </ul>
            <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="index.php?menu=register"><span class="glyphicon glyphicon-user"></span> Register </a></li>

            <?php if (!empty($_COOKIE['user'])){ ?>
                <li><a href="index.php?menu=logout"><span class="glyphicon glyphicon-log-out"></span> Logout: <?php echo $_COOKIE['user']?></a></li>
            <?php }
            else { ?>

                  <li><a href="index.php?menu=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php } ?>    
                </ul>
          </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <form action="index.php" method="post" >
            <div class="form-group">
                <?php
                if (!$corrUsername) { ?>

                    <div style="color:<?php echo $color ?>;">
                        <label for="username">Username: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
                    </div>
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $_SESSION['POST']['username']?>"><br>
                <?php }
                else if (empty($_SESSION['POST']['username'])) { ?>
                    <label for="username">Username: </label>
                    <input type="text" class="form-control" name="username" id="username"><br>
                <?php } else
                {    echo "username: " . $_SESSION['POST']['username'];
                    ?>
                    <br/>
                    <input type="hidden" class="form-control" name="username" id="username" value="<?php echo $_SESSION['POST']['username']?>"><br>

                <?php } ?>
            </div>
            <div class="form-group">
                <?php
                if (!$corrPassword) { ?>
                    <div style="color:<?php echo $color ?>">
                        <label for="password">Password: (zu kurz <= 4 oder leer oder enthält Zahlen)</label>
                    </div>
                    <input type="text" class="form-control" name="password" id="password" value="<?php echo $_SESSION['POST']['password']?>"><br>
                    <?php }
                    else if (empty($_SESSION['POST']['password'])) { ?>
                        <label for="password">Password: </label>
                        <input type="password" class="form-control" name="password" id="password"><br>
                    <?php } else
                    {    echo "password: " . $_SESSION['POST']['password'];
                        ?>
                        <br/>
                        <input type="hidden" name="password" id="password" value="<?php echo $_SESSION['POST']['password']?>"><br>
                <?php } ?>
            </div>

            <div class="form-group">

                    <label for="corrpassword">Confirm Password: </label>
                    <input type="text" class="form-control" name="corrpassword" id="corrpassword"><br>


            </div>

            <div class="form-group">
                <?php
                if (!$corrEmail) { ?>

                    <div style="color:<?php echo $color ?>;">
                        <label for="email">email: (zu kurz <= 4 oder leer oder enthält kein @)</label>
                    </div>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $_SESSION['POST']['email']?>"><br>
                <?php }
                else if (empty($_SESSION['POST']['email'])) { ?>
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" name="email" id="email"><br>
                <?php } else
                {    echo "email: " . $_SESSION['POST']['password'];
                    ?>
                    <br/>
                    <input type="hidden" class="form-control" name="email" id="email" value="<?php echo $_SESSION['POST']['email']?>"><br>

                <?php } ?>
            </div>

            <div class="form-group">
                <label>Usertype:</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <select class="form-control" name="usertype">
                            <option value="Administrator">Administrator</option>
                            <option value="User" selected> User</option>
                        </select>
                    </div>

            </div>
            <br>
            <div class="form-group">
                        <button type="submit" name="register" class="btn btn-warning">Register<span class="glyphicon glyphicon-send"></span></button>

            </div>
        </form>
    </div>
</div>
</body>
</html>