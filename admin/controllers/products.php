<?php
if($action=="products" && isset($id)){
    if(isset($_POST['form']) && !in_array(null,$_POST['form'])){
        $new_prod=$_POST['form'];
        $new_prod['category_id']=$id;
       add_product($db, $new_prod);
    }
    if(isset($_GET['delete_product'])){
        delete_products($db, $_GET['delete_product']);
        header("location: /admin/products/$id");
        exit();
    }
        $products = get_products_by_category_id($db, $id);
        view('products/products', $products);
}