<?php
if($action=="update-user" && isset($_GET['update_user'])){
    $get_user=out_user_byID($db, $_GET['update_user']);
    if(isset($_POST['form']) && !in_array(null,$_POST['form'])){
        $update_user=$_POST['form'];
        update_user_byID($db, $_GET['update_user'], $update_user);
        $get_user=out_user_byID($db, $_GET['update_user']);
    }
        view('users/update_user', $get_user);
}

