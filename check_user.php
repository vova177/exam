<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 08.10.16
 * Time: 9:37
 */

if($_COOKIE['user']){
    try{
        $db=new PDO('mysql:hosts=localhost; dbname=QEST', 'root', 'euflfq');
        $select=$db->query('SELECT * FROM `users`');
        $arr=$select->fetchAll(PDO::FETCH_ASSOC);
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]['role']=='admin'){
                $admin_cookie=$arr[$i]['password'].$arr[$i]['login'];
            }
            if($arr[$i]['role']=='customer'){
                $customer_cookie=$arr[$i]['password'].$arr[$i]['login'];
            }
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
     if($_COOKIE['user']==sha1($admin_cookie.$address['key'])) {
         //  echo'you admin';
         $_SESSION['admin'] = 1;
     }else{
         $_SESSION['admin']=0;
     }
     if($_COOKIE['user']==sha1($customer_cookie.$address['key'])){
         $_SESSION['customer']=1;
     }else{
         $_SESSION['customer']=0;
     }
     //var_dump($_SESSION);
}