<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <input type="hidden" name="userbrowser" id="userbrowser">
    <p>Name: <input type="text" name="name" id="name"></p>
    <p>Email: <input type="text" name="email" id="email"></p>
    <input type="submit" value="enter">

</form>
<script type="text/javascript">
    document.getElementById("userbrowser").value = navigator.appName + " " + navigator.appCodeName  + " " + navigator.appVersion  + " auf: " + navigator.platform ;
</script>
</body>
</html>