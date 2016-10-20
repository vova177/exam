<?php

if($action=="add_product_to_cart"){
     $product_id=$_POST['id'];
    $_SESSION['cart'][]=$product_id;
    echo json_encode( ['amount'=> count($_SESSION['cart'])] );
}