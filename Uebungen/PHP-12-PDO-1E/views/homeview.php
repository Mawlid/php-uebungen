<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
      <div class="container-fluid">
            <div class="navbar-header">
                  <a class="navbar-brand" href="#">PLF-3</a>
                </div>
            <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php?menu=home">Home</a></li>
                  <li><a href="index.php?menu=list">List</a></li>
                  <li><a href="index.php?menu=delete">Delete</a></li>
                </ul>
            <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php?menu=register"><span class="glyphicon glyphicon-user"></span> Register </a></li>

            <?php if (!empty($_COOKIE['user'])){ ?>
                    <li><a href="index.php?menu=logout"><span class="glyphicon glyphicon-log-out"></span> Logout: <?php echo $_COOKIE['user']?></a></li>
            <?php }
            else { ?>
                    <li><a href = "index.php?menu=login" ><span class="glyphicon glyphicon-log-in" ></span > Login</a ></li >
            <?php }  ?>
                </ul>
          </div>
</nav>
<div class="container">
    <div class="jumbotron">
    <h1>Home</h1>
        <img src="media/logo2.svg">

    </div>
</div>
</body>
</html>