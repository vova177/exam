<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 07.10.16
 * Time: 15:21
 */
if($action=="login"){

    $login=isset($_POST['name'])? $_POST['name']:null;
    $password=isset($_POST['password'])? $_POST['password'] : null;

    if($login && $password){
        $check_password=md5($password);
        $check_login=md5($login);
        $check_email=$login;
        $valid_user=login_users($db, $check_password,$check_login,$check_email);
        if(!empty($valid_user)){
            $cookie=$valid_user['id'];
            setcookie('user_id', md5($cookie), time() +2*3600);

        }
    }
    view('login');
}