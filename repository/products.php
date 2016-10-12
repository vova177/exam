<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 11.10.16
 * Time: 19:21
 */

function get_products($db, $table_name){
    $select2 = $db->query("SELECT * FROM $table_name");
    $mass_product = $select2->fetchAll(PDO::FETCH_ASSOC);
    return $mass_product;
}

function need_products($mass=[], $id){
    foreach($mass as $value){
        if($value['category_id']==$id){
            $need_product[]=$value['title'];
        }
    }
    return $need_product;
}
