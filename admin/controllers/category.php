<?php
if($action=="categories"){
    $categories=get_categories($db);
    view('categories', $categories);
}
if($action=="select_products" && isset($_GET['category_id'])){
    $products=get_products_by_category_id($db, $_GET['category_id']);
    view('products', $products);
}
