<?php
function add_user($db, $data){
    $select = $db->query("SELECT * FROM `users` WHERE `login`='{$data['login']}'  OR `email`='{$data['email']}'");
    $repeat_users = $select->fetchAll();
    if(empty($repeat_users)) {
        $insert = $db->prepare("INSERT INTO users(`name`, `role`, `email`, `password`, `login`, `last_activity`, `geonameID`, `age`)
           VALUES(:name, :role, :email, :password, :login, :last_activity, :geonameID, :age)");
        $insert->execute(array('name' => $data['name'], 'role' => $data['role'], 'email' => $data['email'],
            'password' => md5($data['password']), 'login' => $data['login'], 'last_activity' => $data['last_activity'],
              'geonameID'=>0, 'age'=>2));
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
function out_users($db){
    $select=$db->query("SELECT * FROM `users` LIMIT 100");
    $users=$select->fetchAll();
    return $users;
}
function delete_user_byID($db, $id){
    $select=$db->query("DELETE FROM `users` WHERE '{$id}'=`id`");
    return $select;
}
function out_user_byID($db, $id){
    $select=$db->query("SELECT * FROM `users` WHERE '{$id}'=`id`");
    $user=$select->fetchAll();
    return  $user;
}
function update_user_byID($db, $id, $data){
    $select=$db->query("UPDATE `users` SET `name`='{$data['name']}', 
          `role`='{$data['role']}', `email`='{$data['email']}' WHERE `id`='{$id}'");
    return $select;
}
