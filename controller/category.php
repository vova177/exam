<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 10.10.16
 * Time: 20:10
 */


if(isset($id) && $action=="catalog"){
   // echo $id;
    $cat_prod=category_products($db);
       $need_prod=get_products_by_category_id($db, $id);
    //var_dump($need_prod);
    view('products', $need_prod);

}else if($action=="catalog"){

    $mas=get_categories($db);

    view('category', $mas);

}