<?php
if($action=="basket"){
    if(isset($id)) {
        foreach ($_SESSION['cart'] as $key=> $product_id) {
            if ($product_id == $id) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
       if($_SESSION['cart']!=[]) {
           foreach ($_SESSION['cart'] as $product_id) {
               $product_by_id[] = get_products_by_id($db, $product_id);
           }
       }else{
           $product_by_id=[];
       }
    view('basket', $product_by_id);
}
