<?php
if($action=="categories"){
    if(isset($_POST['category'])) {
        $new_category=isset($_POST['category'])? $_POST['category'] : null;
        add_category($db, $new_category);
    }
    if(isset($_GET['delete_category'])){
        delete_category($db, $_GET['delete_category']);
        header('location: /admin/categories');
        exit();
    }
    $categories=get_categories($db);
    view('products/categories', $categories);
}

