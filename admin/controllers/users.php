<?php
if($action=='users'){
    $new_user['name']=isset($_POST['name'])? $_POST['name'] : null;
    $new_user['role']=isset($_POST['role'])? $_POST['role'] : null;
    $new_user['email']=isset($_POST['email'])? $_POST['email'] : null;
    $new_user['password']=isset($_POST['password'])? $_POST['password'] : null;
    $new_user['login']=isset($_POST['login'])? $_POST['login'] : null;
    $new_user['last_activity']=date('Y-m-d H:i:s');
    if(!in_array(null, $new_user)){
        add_user($db, $new_user);
    }
    if(isset($_GET['delete_user'])){
        delete_user_byID($db, $_GET['delete_user']);
        header('location: /admin/users');
    }
     $users=out_users($db);
     view('users/users', $users);
 }

