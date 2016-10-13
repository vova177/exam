<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 11.10.16
 * Time: 19:21
 */

function get_categories($table_name, $db)
{
    $select1 = $db->query("SELECT * FROM `$table_name`");

    $mas = $select1->fetchAll(PDO::FETCH_ASSOC);

    return $mas;

}
function category_products($db, $table_name){
    $select2 = $db->query("SELECT * FROM $table_name");
    $mass_product = $select2->fetchAll(PDO::FETCH_ASSOC);
    return $mass_product;
}