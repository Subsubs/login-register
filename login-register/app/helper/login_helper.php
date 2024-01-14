<?php

spl_autoload_register('route_into_controller');

if (isset($_POST['loginTrigger']) === true) {
    $data = [
        "uname" => $_POST['username'],
        "pass" => $_POST['password']
    ];
    $callback = new Login();
    $callback->login($data);
}

function route_into_controller()
{
    include_once "../controller/func_login.php";
}
