<?php

function get_users($db){
    $select=$db->query("SELECT * FROM `users`");
    $arr=$select->fetchAll();
    return $arr;
}

function write_user($db, $login, $password, $name, $email, $role, $last_activity){
    $select = $db->prepare("SELECT * FROM `users` WHERE `login`=? AND `password`=?  AND `email`=?");
    $repeat_users = $select->execute(array($login, $password, $email));
    if(empty($repeat_users)) {
        $insert = $db->prepare("INSERT INTO users(`name`, `role`, `email`, `password`, `login`, `last_activity`)
                                                   VALUES(:name, :role, :email, :password, :login, :last_activity)");
        $insert->execute(array('name' => $name, 'role' => $role, 'email' => $email,
            'password' => md5($password), 'login' => md5($login), 'last_activity' => $last_activity));
    }
}

function check_users($db, $password, $login, $email){
   $select=$db->prepare("SELECT * FROM `users` WHERE  `password`=? AND (`login`=? OR `email`=?)");
    $valid_user=$select->execute(array($password,$login,$email));
    if(!empty($valid_user)){
        return true;
    }else{
        return false;
    }
}