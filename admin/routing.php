<?php
$available_action=['users', 'update-user', 'categories','update-category',
    'products', 'update-product', 'auto-complete' ];

if($_SERVER['REQUEST_URI']!='/admin/'){
    $url = parse_url( $_SERVER['REQUEST_URI']);
    $future_action=explode('/', $url['path']);
    $str=array_filter($future_action);
    $action=$str[2];
    if(isset($str[3]) && is_numeric($str[3])){
            $id=$str[3];
        }
    if(!in_array($action,$available_action)){
        $action=null;
        $sub_action=null;
    }
}
else{
    $action='categories';
}

