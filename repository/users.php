<?php
function add_user($db, $login, $password, $name, $email, $role, $last_activity){
    $select = $db->query("SELECT * FROM `users` WHERE `login`='{$login}'  OR `email`='{$email}'");
    $repeat_users = $select->fetchAll();
    if(empty($repeat_users)) {
        $insert = $db->prepare("INSERT INTO users(`name`, `role`, `email`, `password`, `login`, `last_activity`)
                                                   VALUES(:name, :role, :email, :password, :login, :last_activity)");
        $insert->execute(array('name' => $name, 'role' => $role, 'email' => $email,
            'password' => md5($password), 'login' => $login, 'last_activity' => $last_activity));
    }
}
function login_users($db, $password, $login, $email){
   $select=$db->query("SELECT * FROM `users` WHERE  (`password`='{$password}' AND `login`='{$login}')
                               OR (`password`='{$password}' AND `email`='{$email}')");
    $valid_user=$select->fetchAll();
    return $valid_user;
}
function check_users($db, $cookie){
    $select=$db->query("SELECT * FROM `users` WHERE `id`='{$cookie}'");
    $valid_user=$select->fetchAll();
    if(!empty($valid_user)){
        return true;
    }else{
        return false;
    }
}