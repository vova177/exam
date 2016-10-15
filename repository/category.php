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
