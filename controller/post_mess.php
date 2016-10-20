<?php
if( $action == "post_mess" ) {

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $messages = isset($_POST['message']) ? $_POST['message'] : null;
    if ($name && $email && $messages) {
        $arr_data = [$name, $email, $messages];
        $isValid = validate($arr_data);
        if ($isValid) {
            write_file($arr_data, JSON_FILE);
            setcookie('name', $name, time() + 3600);
            setcookie('email', $email, time() + 3600);
        }
    }
}