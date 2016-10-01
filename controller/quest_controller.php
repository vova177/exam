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

    $array=["name"=>$name,"email"=>$email,"message"=>$message];

    $valid=validate($array);
     if($valid==true) {
         write_file($array, FILE_VAY);
     }
    $arr=read_file(FILE_VAY);

    $message=$array['message'];

    setcookie($array['name'], $array['email'],time() + 5 * 3600, "/");

    if($check) {
        send_mail($message, $address);
    }
    view('quest',['arr'=>$arr]);
}
