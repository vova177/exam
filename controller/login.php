<?php
if($action=="login"){
    $login=isset($_POST['name'])? $_POST['name']:null;
    $password=isset($_POST['password'])? $_POST['password'] : null;
    $remember_me=isset($_POST['remember']) ? $_POST['remember'] : null;
    $role=['USER'=>'customer', 'ADMIN'=>'admin'];
    if($login && $password){
        $check_password=md5($password);
        $check_login=$login;
        $check_email=$login;
        $valid_user=login_users($db, $check_password,$check_login,$check_email);
        if(!empty($valid_user)){
            if ($remember_me) {
                $cookie = $valid_user[0]['id'];
                setcookie('user_id', md5($cookie), time() + 2 * 3600);
            }else {
                if ($valid_user[0]['role'] == $role['USER']) {
                    $_SESSION['user'] = 1;
                    header('location: /quest');
                } else {
                    $_SESSION['user'] = 0;
                }
                if ($valid_user[0]['role'] == $role['ADMIN']) {
                    $_SESSION['admin'] = 1;
                    header('location: /admin');
                } else {
                    $_SESSION['admin'] = 0;
                }
            }
        }
    }
    view('login');
}