<?php
function get_products_by_category_id($db, $id){
     $select=$db->query("SELECT * FROM `products` WHERE `category_id`='{$id}'");
      $mass=$select->fetchAll();
    return $mass;
}
function get_products_by_id($db, $id){
    $select=$db->query("SELECT * FROM `products` WHERE `id`='{$id}'");
    $mass=$select->fetchAll();
    return $mass;
}
//function order_product($db,)
function get_products($db, $id){
    $str=implode(",", $id);
    $select=$db->query("SELECT * FROM `products` WHERE `id` IN ($str)");
    $mass=$select->fetchAll();
    return $mass;
}
function out_products($db){
    $select=$db->query("SELECT * FROM `products`");
    $products=$select->fetchAll();
    return $products;
}
function delete_products($db, $id){
    $select=$db->query("DELETE FROM `products` WHERE `id`='{$id}'");
    return $select;
}
function update_product($db, $id, $update_prod){
    $select=$db->query("UPDATE `products` SET `title`='{$update_prod['title']}', 
      `description`='{$update_prod['description']}', `price`='{$update_prod['price']}' WHERE `id`='{$id}'");
    return $select;
}
function add_product($db, $new_product){
    $insert=$db->prepare("INSERT INTO products(`title`, `description`, `price`, `category_id`) 
                                         VALUES(:title, :description, :price, :category_id)");
   $insert->execute(array('title'=>$new_product['title'], 'description'=>$new_product['description'],
                                'price'=>$new_product['price'], 'category_id'=>$new_product['category_id']));
}
