<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 10.10.16
 * Time: 20:10
 */


if(isset($id) && $action=="catalog"){
   // echo $id;
    $cat_prod=category_products($db, 'products');
       $need_prod=need_products($cat_prod, $id);
    view('product', $need_prod);

}else if($action=="catalog"){

    $mas=get_categories('categories',$db);

    view('catalog', $mas);

}