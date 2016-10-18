<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:14
 */


$available_action=['quest', 'main', 'get_mess', 'post_mess',
    'admin', 'login','registration', 'catalog',
    'basket','products', 'add_product_to_cart'];

if($_SERVER['REQUEST_URI']!='/'){
    $url = parse_url( $_SERVER['REQUEST_URI']);
    $future_action=explode('/', $url['path']);
    $str=array_filter($future_action);
    $action=$str[1];
    if(isset($str[2]) && is_numeric($str[2])){
            $id=$str[2];
        }else{
            $action2=null;
        }
    if(!in_array($action,$available_action)){
        $action=null;
        $sub_action=null;
    }
}
else{
    $action='main';
}
if($action=='/quest') {
    if ($_SESSION['user'] != 1 && $_SESSION['admin']!= 1) {
        header('location: /login');
        exit();
        }
    }elseif($action=='admin'){
        if($_SESSION['admin']!=1){
            header('location: /login');
            exit();
        }

}
