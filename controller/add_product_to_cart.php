<?php
if($action=="add_product_to_cart"){
     $product_id=$_POST['id'];
    $_SESSION['count'][$product_id]=1;
    if(empty($_SESSION['cart'])) {
        $_SESSION['cart'][] = $product_id;
            }else{
        foreach ($_SESSION['cart'] as $key => $val) {
            if ($val==$product_id) {
               $_SESSION['count'][$product_id]++;
            }
        }
        $_SESSION['cart'][] = $product_id;
    }
    echo json_encode( ['amount'=> count($_SESSION['cart'])] );
    var_dump($_SESSION);
}