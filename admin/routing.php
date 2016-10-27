<?php
$available_action=['users', 'categories', 'update', 'delete', 'create',
    'select_category', 'select_products'];

if($_SERVER['REQUEST_URI']!='/admin/'){
    $url = parse_url( $_SERVER['REQUEST_URI']);
    $future_action=explode('/', $url['path']);
    $str=array_filter($future_action);
    $action=$str[2];
    if(isset($str[3])){
            $action2=$str[3];
        }
    if(!in_array($action,$available_action)){
        $action=null;
        $sub_action=null;
    }
}
else{
    $action='main';
}

