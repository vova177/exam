<?php
if($action=='users'){
    if(isset($_POST['form']) && !in_array(null,$_POST['form'])){
        $new_user=$_POST['form'];
        $new_user['last_activity']=date('Y-m-d H:i:s');
        add_user($db, $new_user);
    }
    if(isset($_GET['delete_user'])){
        delete_user_byID($db, $_GET['delete_user']);
        header('location: /admin/users');
        exit();
    }
     $users=out_users($db);
     view('users/users', $users);
 }

