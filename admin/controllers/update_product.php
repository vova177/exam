<?php
if($action=="update_product" && isset($_GET['update_product'])){
    $update_prod['title']=isset($_POST['title'])? $_POST['title'] : null;
    $update_prod['description']=isset($_POST['description'])? $_POST['description'] : null;
    $update_prod['price']=isset($_POST['price'])? $_POST['price'] : null;
    if(!in_array(null, $update_prod)){
        update_product($db, $_GET['update_product'], $update_prod);
    }
        view('products/update_product');
}