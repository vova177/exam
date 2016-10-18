<?php

if($action=="add_product_to_cart"){

     $product_id=$_POST['id'];
    $_SESSION['cart_products']=$product_id;
    echo json_encode( ['amount'=> $_SESSION['cart_products']] );

    //view('basket');
}