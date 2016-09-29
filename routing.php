<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:14
 */


if($_SERVER['REQUEST_URI']!='/'){
    $future_action=explode('/', $_SERVER['REQUEST_URI']);
    $str=array_filter($future_action);
     //var_dump($str);

    $action=$str[1];
    if(isset($str[2])){
        $sub_action=$str[2];
       // echo'$sub_action';
    }
}else{
    $action='main.Page';
}
