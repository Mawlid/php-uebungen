<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Type-Hinting-1B</title>
</head>
<body>
<?php if(!empty ($_SESSION['userloggedin'])){ ?>
    <div id="userloggedin" class="well">
        Current User logged in is
        <?php echo $_SESSION['userloggedin'] ?>;
    </div>
<?php } else{ ?>
    <div id="userloggedoff" class="well">
        Nobody is logged in
    </div>
<?php } ?>
<h1>Ausgabeview </h1>
<table class="table">
    <tr style="font-weight: bold;">
        <td> Username </td>
        <td> Email </td>
        <td> Password </td>
        <td> Usertype </td>
    </tr>

    <?php
    if(isset($_SESSION['objects'])){
        $userarray = $_SESSION['objects'];
        foreach($userarray as $user){
            $user = unserialize($user);?>
            <tr>
                <td>
                    <?php echo $user->username ?>
                </td>
                <td>
                    <?php echo $user->email ?>
                </td>
                <td>
                    <?php echo $user->password ?>
                </td>
                <td>
                    <?php echo $user->usertype ;
                    ?>
                </td>

            </tr>


        <?php }
        //unset($_SESSION['formvalues']['showOutput']);
    }
    ?>
    <tr>
        <td>
            <a href="<?php echo 'index.php' ?>">HOME </a>
        </td>
    </tr>






</table>
</body>
</html>