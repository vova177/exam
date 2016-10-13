<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 11.10.16
 * Time: 19:21
 */


function need_products($mass=[], $id){
    foreach($mass as $value){
        if($value['category_id']==$id){
            $need_product[]=$value;
        }
    }
    return $need_product;
}

function review_product($id, $mass=[]){
        foreach($mass as $value){
            if($value['id']==$id) {
                $view_prod[] = $value;
            }
        }
        return $view_prod;
}
