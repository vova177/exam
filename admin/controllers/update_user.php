<?php
if($action=="update_user" && isset($_GET['update_user'])){
    $get_user=out_user_byID($db, $_GET['update_user']);
    $update_data['name']=isset($_POST['new_name'])? $_POST['new_name'] : null;
    $update_data['role']=isset($_POST['new_role'])? $_POST['new_role'] : null;
    $update_data['email']=isset($_POST['new_email'])? $_POST['new_email'] : null;
    if(!in_array(null, $update_data)){
        update_user_byID($db, $_GET['update_user'], $update_data);
        $get_user=out_user_byID($db, $_GET['update_user']);
    }
        view('users/update_user', $get_user);
}

