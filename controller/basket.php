<?php
if($action=="basket"){
    if(isset($_GET['delete']) && isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key=> $product_id) {
            if ($product_id == $_GET['delete'] && $_SESSION['count'][$product_id]>0) {
                $_SESSION['count'][$product_id]--;
                unset($_SESSION['cart'][$key]);
                if($_SESSION['count'][$product_id]==0){
                    unset($_SESSION['count'][$product_id]);
                }
                break;
            }
        }
    }
    $post_count=isset($_POST['id'])? $_POST['id'] : null;
    if(isset($_GET['add'])){
        foreach ($_SESSION['cart'] as $key=> $product_id) {
            if($product_id == $_GET['add']){
                $_SESSION['count'][$product_id]++;
                $_SESSION['cart'][] = $product_id;
            }
            break;
        }
    }
        if(empty($_SESSION['cart'])) {
            $product_by_id=[];
        }else {
            $product_by_id = get_products($db, $_SESSION['cart']);
        }
    view('basket', $product_by_id);
}
