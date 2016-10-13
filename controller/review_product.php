<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 13.10.16
 * Time: 18:04
 */

if(isset($id) && $action=="products"){

    $arr_prod=category_products($db, 'products');
    $mass=review_product($id, $arr_prod);
    view('review_product', $mass);

}