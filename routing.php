<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:14
 */


$available_action=['quest', 'main'];

if($_SERVER['REQUEST_URI']!='/'){
    $future_action=explode('/', $_SERVER['REQUEST_URI']);
    $str=array_filter($future_action);
     //var_dump($str);

    $action=$str[1];
    if(isset($str[2])){
        $sub_action=$str[2];
       // echo'$sub_action';
    }
    if(!in_array($action,$available_action)){
        $action=null;
        $sub_action=null;
    }
}
else{
    $action='main';
}
