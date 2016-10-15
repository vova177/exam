<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 08.10.16
 * Time: 9:37
 */

if(isset($_COOKIE['user'])) {
       $data=get_users($db);
   // var_dump($data);
      foreach($data as $value){
        if ($value['role'] == 'admin') {
            $admin_cookie = $value['password'] . $value['login'];
        }
        if ($value['role'] == 'customer') {
            $customer_cookie = $value['password'] . $value['login'];
        }
        if ($_COOKIE['user'] == $admin_cookie) {
             // echo'you admin';
            $_SESSION['admin'] = 1;
        } else{
            $_SESSION['admin'] = 0;
        } if ($_COOKIE['user'] == $customer_cookie) {
           // echo'user';
            $_SESSION['customer'] = 1;
        }else{
              $_SESSION['customer'] = 0;
          }
    }
  //var_dump($_COOKIE['user']);
}