<?php
if($action=="categories"){
    $new_category=isset($_POST['category'])? $_POST['category'] : null;
    if($new_category!=null) {
        add_category($db, $new_category);
    }
    if(isset($_GET['delete_category'])){
        delete_category($db, $_GET['delete_category']);
        header('location: /admin/categories');
    }
    $categories=get_categories($db);
    view('products/categories', $categories);
}

