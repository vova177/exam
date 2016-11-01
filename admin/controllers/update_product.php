<?php
if($action=="update-product" && isset($_GET['update_product'])){
    $get_products=get_products_by_id($db, $_GET['update_product']);
    if(isset($_POST['form']) && !in_array(null,$_POST['form'])){
        $update_prod=$_POST['form'];
        update_product($db, $_GET['update_product'], $update_prod);
        $get_products=get_products_by_id($db, $_GET['update_product']);
    }
        view('products/update_product', $get_products);
}