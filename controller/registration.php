<?php
if($action=="registration") {
    if (isset($_POST['form'])) {
        $new_user=$_POST['form'];
        $new_user['last_activity']= date('Y-m-d H:i:s');
        $new_user['role']="customer";
        add_user($db, $new_user);
    }
    view('registration');
}