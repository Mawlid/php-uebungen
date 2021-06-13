<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                  <li><a href="index.php?menu=register"><span class="glyphicon glyphicon-user"></span> Register </a></li>

            <?php if (!empty($_COOKIE['user'])){ ?>
                <li><a href="index.php?menu=logout"><span class="glyphicon glyphicon-log-out"></span> Logout: <?php echo $_COOKIE['user']?></a></li>
            <?php }
            else { ?>

                  <li class="active"><a href="index.php?menu=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php } ?>
                </ul>
          </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <h1 style="text-align: center;">Login</h1>
            <form class="well form-horizontal" action="index.php" method="post">

                <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="username" placeholder="Username" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="password" placeholder="Password" class="form-control" type="password">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" name="login" class="btn btn-warning">Login<span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </form>
    </div>
</div>
</body>
</html>