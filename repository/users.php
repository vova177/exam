<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 11.10.16
 * Time: 19:20
 */

function get_users($db){
    $select = $db->query('SELECT * FROM `users`');
    return $arr = $select->fetchAll();
}