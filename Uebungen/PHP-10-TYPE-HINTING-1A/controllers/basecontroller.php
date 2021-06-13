<?php

$errors = array();
$users = new Users("Muxn");
$users->addMember(new Admin("Thomas",password_hash("myp@ssw0rd", PASSWORD_DEFAULT), "yee@mahnmal.com"));
$users->addMember(new Registered("Fritzi",password_hash("mypassword", PASSWORD_DEFAULT), "fritzi@geil.com"));

try
{
    $users->addMember(new Foo("fooloo", password_hash("P@ssw0rd", PASSWORD_DEFAULT), "foo@loo.com"));
}
catch (TypeError $errors)
{
    $erros[] = $errors->getMessage();
}

require_once ("views/outputview.php");