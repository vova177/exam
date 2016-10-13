<?php



function get_products_by_category_id($db, $id){
     $select=$db->query("SELECT * FROM `products` WHERE `category_id`=$id");
      $mass=$select->fetchAll();
    return $mass;
}
function get_products_by_id($db, $id){
    $select=$db->query("SELECT * FROM `products` WHERE `id`=$id");
    $mass=$select->fetchAll();
    return $mass;
}


