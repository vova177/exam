<?php
if($action=='users'){
     $users=out_users($db);
     view('users', $users);
 }
if($action=='users' && isset($_GET['delete_user'])){
    delete_user_byID($db, $_GET['delete_user']);
    $users=out_users($db);
    header('location: /admin/users');
}
if($action=='users' && isset($_GET['update_user'])){

    header('location: /admin/users');
}