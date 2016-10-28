<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 11.10.16
 * Time: 19:21
 */

function get_categories($db){
    $select1 = $db->query("SELECT * FROM `categories`");
    $mas = $select1->fetchAll();
    return $mas;
}
function update_category($db, $id, $new_category){
    $select=$db->query("UPDATE `categories` SET  `title`='{$new_category}' WHERE `id`='{$id}'");
    return $select;
}
function add_category($db, $category){
    $insert=$db->prepare("INSERT INTO categories(title) VALUES(:title)");
    $insert->execute(array('title'=>$category));
}
function delete_category($db, $id){
    $select=$db->query("DELETE FROM `categories` WHERE `id`='{$id}'");
    return $select;
}
