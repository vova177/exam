<?php
if($action=="registration") {

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $login = isset($_POST['login']) ? $_POST['login'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $last_activity = date('Y-m-d H:i:s');
    if ($name && $login && $email && $password) {
        $role="customer";
        add_user($db, $login, $password, $name, $email, $role, $last_activity);
    }
    view('registration');
}