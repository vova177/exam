<?php
if($action=="update_category" && isset($_GET['update_category'])){
    $update_category=isset($_POST['category'])? $_POST['category'] : null;
    if($update_category!=null){
        update_category($db, $_GET['update_category'],$update_category);
    }
    view('products/update_category');
}