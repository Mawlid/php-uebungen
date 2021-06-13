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
<h1>Cookie Demo</h1>

<table>

    <th>
        <tr  style="color: blue; font-weight: bold;">
            <td>Cookie Name</td>
            <td>Cookie Value</td>
        </tr>
    </th>

    <tbody>
    <tr>
        <td>Cookie with Value (Session Cookie):</td>
        <td><?php echo $myCookie ?></td>
    </tr>
    <tr>
        <td>Permanent Cookie:</td>
        <td><?php echo $mySecondsCookie ?></td>
    </tr>
    <tr>
        <td>Sekunden Cookie:</td>
        <td><?php echo $myPermanentCookie ?></td>
    </tr>
    <tr>
        <td>Path Cookie1:</td>
        <td><?php echo $myPathCookie ?></td>
    </tr>
    <tr>
        <td>Path Cookie2:</td>
        <td><?php echo $mySecondPathCookie ?></td>
    </tr>
    <tr>
        <td>Domain Cookie1:</td>
        <td><?php echo $myDomainCookie ?></td>
    </tr>
    <tr>
        <td>Domain Cookie2:</td>
        <td><?php echo $mySecondDomainCookie ?></td>
    </tr>
    </tbody>
</table>
<br>
<a href="<?php echo '../index.php'?>">Home</a>
<a href="<?php echo '../controllers/setcookie.php?menu=setcookie'?>">set cookies</a>
<a href="<?php echo '../controllers/checkcookie.php?menu=checkcookie'?>">check cookies</a>
<a href="<?php echo '../controllers/clearcookie.php?menu=clearcookie'?>">clear cookies</a>
</body>
</html>