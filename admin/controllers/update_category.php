<?php
if($action=="update-category" && isset($_GET['update_category'])){
    $get_category=get_category_byID($db, $_GET['update_category']);
    if(isset($_POST['category'])){
        $update_category=isset($_POST['category'])? $_POST['category'] : null;
        update_category($db, $_GET['update_category'],$update_category);
        $get_category=get_category_byID($db, $_GET['update_category']);
    }
    view('products/update_category', $get_category);
}