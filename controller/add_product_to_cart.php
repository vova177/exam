<?php
if($action=="add_product_to_cart"){
     $product_id=isset($_POST['id'])? $_POST['id'] : null;
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
//    if($product_id) {
//        if (isset($_SESSION['cart'][$productId])) {
//            $_SESSION['cart'][$productId]++;
//        } else {
//            $_SESSION['cart'][$productId] = 1;
//        }
//    }
    echo json_encode( $_SESSION['cart']);
    var_dump($_SESSION);
}