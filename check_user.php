<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 08.10.16
 * Time: 9:37
 */

if(isset($_COOKIE['user_id'])) {
    $user_id=md5($_COOKIE['user_id']);
   if(check_users($db, $user_id)){
       $_SESSION['user']=1;
   }else{
       $_SESSION['user']=0;
   }
}