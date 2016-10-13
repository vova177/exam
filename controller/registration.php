<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 07.10.16
 * Time: 15:38
 */
if($action=="registration") {

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $login = isset($_POST['login']) ? $_POST['login'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $last_activity = date('Y-m-d H:i:s');
    try{
        $db = new PDO('mysql:host=localhost; dbname=QEST', 'root', 'euflfq');
        $insert = $db->prepare("INSERT INTO users(`name`, `role`, `email`, `password`, `login`, `last_activity`)
                                              VALUES(:name, :role, :email, :password, :login, :last_activity)");
        $insert->execute(array('name' => 'vova', 'role' => 'admin', 'email' => '1kaapa@.ukr.net',
            'password' => sha1('123'.$address['key']), 'login' => sha1('admin'.$address['key']), 'last_activity' => $last_activity));
    }catch (PDOException $e){
        echo $e->getMessage();
    }

    if ($name && $login && $email && $password) {
        $role = 'customer';
        $arr = [$name, $role, $email, $password, $login, $last_activity];
        $columns_table = ['name', 'role', 'email', 'password', 'login', 'last_activity'];
        if (valid_registration($arr)) {
            try {
                $db = new PDO('mysql:host=localhost; dbname=QEST', 'root', 'euflfq');
                $select = $db->query('SELECT * FROM `users`');
                $users = $select->fetchAll(PDO::FETCH_ASSOC);
                for($i=0; $i< count($users); $i++) {
                    if ($users[$i]['email'] == $arr[2] || $users[$i]['password'] == sha1($arr[3].$address['key']) || $users[$i]['login'] == sha1($arr[4].$address['key'])) {
                        view('registration');
                        exit();
                    }
                }
                     $insert = $db->prepare("INSERT INTO users(`name`, `role`, `email`, `password`, `login`, `last_activity`)
                                              VALUES(:name, :role, :email, :password, :login, :last_activity)");
                     $insert->execute(array('name' => $arr[0], 'role' => $arr[1], 'email' => $arr[2],
                                              'password' => sha1($arr[3].$address['key']), 'login' => sha1($arr[4].$address['key']), 'last_activity' => $arr[5]));
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    view('registration');
}