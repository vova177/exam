<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 07.10.16
 * Time: 15:21
 */
if($action=="login"){

    $post_name=isset($_POST['name'])? $_POST['name']:null;
    $post_password=isset($_POST['password'])? $_POST['password'] : null;
    $role=isset($_POST['admin'])? 'admin' : 'customer';
    //var_dump($role);
    //var_dump(sha1('qwe'));
    if($post_name && $post_password){
        try{
            $db = new PDO('mysql:host=localhost; dbname=QEST', 'root', 'euflfq');
            $select = $db->query('SELECT * FROM `users`');
            $users = $select->fetchAll(PDO::FETCH_ASSOC);

            for($i=0; $i< count($users); $i++) {

                if ($users[$i]['password'] == sha1($post_password.$address['key']) && $users[$i]['login'] ==  sha1($post_name.$address['key']) && $users[$i]['role']==$role) {
                    $cookie=$users[$i]['password'].$users[$i]['login'].$address['key'];
                    setcookie('user', sha1($cookie), time() +2*3600);
                    if($role=='admin'){
                        view('admin');
                        exit();
                    }elseif($role=='customer'){
                        view('quest');
                        exit();
                    }
                      // echo'ok';
                }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    view('exit');
}