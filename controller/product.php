<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 13.10.16
 * Time: 18:04
 */

if(isset($id) && $action=="products"){

   $mass=get_products_by_id($db, $id);
    view('review_product', $mass);

}