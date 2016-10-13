<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 08.10.16
 * Time: 9:37
 */

if(isset($_COOKIE['user'])) {
   $check_data=get_users($db);
      foreach($check_data as $value){
        if ($value['role'] == 'admin') {
            $admin_cookie = $value['password'] . $value['login'];
        }
        if ($value['role'] == 'customer') {
            $customer_cookie = $value['password'] . $value['login'];
        }
        if ($_COOKIE['user'] == sha1($admin_cookie . $address['key'])) {
            //  echo'you admin';
            $_SESSION['admin'] = 1;
        } else{
            $_SESSION['admin'] = 0;
        } if ($_COOKIE['user'] == sha1($customer_cookie . $address['key'])) {
            $_SESSION['customer'] = 1;
        }else{
              $_SESSION['customer'] = 0;
          }
    }
}