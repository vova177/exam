<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 10.10.16
 * Time: 20:10
 */


if(isset($id) && $action=="catalog"){

       $need_prod=get_products_by_category_id($db, $id);
    view('products', $need_prod);

}else if($action=="catalog"){

    $mas=get_categories($db);

    view('category', $mas);

}