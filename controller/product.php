<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 11.10.16
 * Time: 12:10
 */

//$rr_catalog=['food', ''];
    if ($action == "books") {
        view('food');
        $select2 = $db->query('SELECT * FROM `products`');
        $mas_prod = $select2->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($mas_prod); $i++) {
            if ($mas_prod[$i]['category_id'] == 1) {
                echo $mas_prod[$i]['title'];
            }
        }//elseif($action == "")
}