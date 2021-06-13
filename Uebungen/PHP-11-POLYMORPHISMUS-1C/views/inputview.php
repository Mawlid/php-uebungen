<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- http://www.w3schools.com/css/css_rwd_viewport.asp -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="bootstrap/css/awesome-bootstrap-checkbox.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/language/de_DE.js"></script>


    <title>Type-Hinting-1C</title>
</head>

<body>
<?php
if(isset($_SESSION['exists'])){
    if($_SESSION['exists']){
        ?>
        <script>
            alert("Username oder Email existiert bereits");
        </script>
        <?php
        unset($_SESSION['exists']);
    }
}
if(isset($_SESSION['loginsucces'])){
    if($_SESSION['loginsucces']){
        ?>
        <script>
            alert("Login erfolgreich")
        </script>
    <?php
    }
    else{
    unset($_SESSION['userloggedin']);
    ?>
        <script>
            alert("Login fehlgeschlagen")
        </script>
        <?php
    }
    unset($_SESSION['loginsucces']);
}

?>
<div class="container">

    <?php if(!empty ($_SESSION['userloggedin'])){ ?>
        <div id="userloggedin" class="well">
            Current User logged in is <?php echo $_SESSION['userloggedin'] ?>;
        </div>
    <?php } else {?>
        <div id="userloggedoff" class="well">
            Nobody logged is logged in
        </div>

    <?php }?>
    <h3>Register</h3>
    <form class="well form-horizontal" action="<?php echo htmlspecialchars('index.php') ?>" method="post" id="contact_form">
        <input type="hidden" name="registerfield">


        <div class="form-group">
            <label class="col-md-4 control-label" for="username">Benutzername: </label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="username" placeholder="Benutzername" class="form-control" type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Passwort</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name="password" placeholder="Passwort" class="form-control" type="password">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Passwort Bestätigung</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name="confirmPassword" placeholder="Passwort Bestätigung" class="form-control" type="password">
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" placeholder="E-Mail Addresse" class="form-control" type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Usertype</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <select class="form-control" name="usertype">
                        <option value="Administrator">Administrator</option>
                        <option value="User" selected> User</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Success message
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
-->
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button>
            </div>

        </div>
        </fieldset>
    </form>
    <form class="well form-horizontal" action="<?php echo htmlspecialchars('index.php') ?>" method="post">
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <input type="submit" name="clear" value="clear" class="btn btn-warning">
            </div>
        </div>
        <!--
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <input type="submit" name="showOutput" value="show" class="btn btn-warning">
          </div>
        </div>-->
    </form>

    <!-- LOGIN -->
    <h3>Login</h3>



    <form class="well form-horizontal" action="<?php echo htmlspecialchars('index.php') ?>" method="post">
        <input type="hidden" name="loginfield" value="login">
        <div class="form-group">
            <label class="col-md-4 control-label" for="username">Benutzername: </label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="username" placeholder="Benutzername" class="form-control" type="text">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Passwort</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name="password" placeholder="Passwort" class="form-control" type="password">
                </div>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-warning">Login <span class="glyphicon glyphicon-send"></span></button>
            </div>
        </div>

    </form>
</div>
</div>

<!-- /.container -->

<script>
    $(document).ready(function() {
        $('#contact_form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            // http://formvalidation.io/validators
            // http://bootstrapvalidator.votintsev.ru/getting-started/
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    validators: {
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: 'Der Benutzername muß zwischen %s and %s Zeichen lang sein.'
                        },
                        notEmpty: {
                            message: 'Der Benutzername darf nicht leer sein.'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: 'Der Benutzername darf nur aus Buchstaben und Nummern bestehen.'
                        },
                        different: {
                            field: 'password',
                            message: 'The Benutzername and das Passwort darf nicht gleich sein.'
                        }
                    }
                },
                password: {
                    validators: {
                        stringLength: {
                            min: 2,
                            message: 'Bitte mehr als %s Zeichen eingeben'
                        },
                        notEmpty: {
                            message: 'Bitte geben sie ein Passwort ein'
                        },
                        different: {
                            field: 'username',
                            message: 'The Benutzername and das Passwort darf nicht gleich sein.'
                        },
                        identical: {
                            field: 'confirmPassword',
                            message: 'The Passwort muss zweimal gleich eingegeben werden.'
                        }
                    }
                },
                confirmPassword: {
                    validators: {
                        stringLength: {
                            min: 2,
                            message: 'Bitte mehr als %s Zeichen eingeben'
                        },
                        notEmpty: {
                            message: 'Bitte geben sie ein Passwort ein'
                        },
                        identical: {
                            field: 'password',
                            message: 'The Passwort muss zweimal gleich eingegeben werden.'
                        }
                    }
                },
                email: {
                    validators: {
                        emailAddress: {
                            message: 'Das ist keine gültige E-Mail Adresse'
                        },
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Das ist keine gültige E-Mail Adresse'
                        }
                    }
                }
            }
        })

    });
</script>
</body>

</html>