<?php
    if ($action == "order") {
        foreach ($_SESSION['cart'] as $product_id) {
            $product_order[] = get_products_by_id($db, $product_id);
        }
        if(isset($_SESSION['user'])) {
          //write orders
        }else{
             header('location: /login');
        }
        view('order', $product_order);
    }
