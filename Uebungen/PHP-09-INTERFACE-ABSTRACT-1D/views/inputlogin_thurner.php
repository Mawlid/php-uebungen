<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="bootstrap/css/awesome-bootstrap-checkbox.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="boostrap/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="boostrap/js/language/de_DE.js"></script>
    <title>Interface-Abstract-1D</title>
</head>
<body>
<div class="container">

    <form class="well form-horizontal" action="<?php echo htmlspecialchars('index.php') ?>" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>Registrierungs Formular</legend>
            <img alt="FunWithPHP-Logo" src="media/logo2.svg">

            <!-- Text input-->
            <div class="well well-sm" style="background-color: white" >
            <h1 style="text-align: center;">LOGIN</h1>

            <div class="form-group">
                <label class="col-md-4 control-label" for="username">Benutzername: </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="username" placeholder="Benutzername" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Passwort</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="password" placeholder="Passwort" class="form-control"  type="password">
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
                    <button type="submit" class="btn btn-warning" >Login <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                <button type="submit" class="btn btn-warning" name="Clear" value="löschen">Clear <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>
            </div>
        </fieldset>
    </form>
</div>
</div><!-- /.container -->
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

            }
        })

    });
</script>
</body>
</html>