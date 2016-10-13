<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:27
 */

if($action=="quest"){


    $name=isset($_POST['name']) ? $_POST['name'] : null;
    $email=isset($_POST['email']) ? $_POST['email'] : null;
    $message=isset($_POST['message']) ? $_POST['message'] : null;
    $check=isset($_POST['check']) ? $_POST['check'] : null;
        if($name && $email && $message) {
            setcookie("name", $name, time() + 5 * 3600, "/");
            setcookie("email", $email, time() + 5 * 3600, "/");
            if ($check) {
                send_mail($message, $address);
            }
        }
    $messages = read_file(JSON_FILE);
    var_dump(json_encode( [ 'data'=>$messages]));

    view('quest');
}
