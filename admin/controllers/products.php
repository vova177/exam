<?php
if($action=="products" && isset($id)){
    $new_prod['title']=isset($_POST['title'])? $_POST['title'] : null;
    $new_prod['description']=isset($_POST['description'])? $_POST['description'] : null;
    $new_prod['price']=isset($_POST['price'])? $_POST['price'] : null;
    $new_prod['category_id']=$id;
    if(!in_array(null, $new_prod)){
       add_product($db, $new_prod);
    }
    if(isset($_GET['delete_product'])){
        delete_products($db, $_GET['delete_product']);
        header("location: /admin/products/$id");
    }
        $products = get_products_by_category_id($db, $id);
        view('products/products', $products);
}