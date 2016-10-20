<?php
if($action=="admin"){
    $category=isset($_POST['category'])? $_POST['category']:null;
    $name=isset($_POST['product_name'])? $_POST['product_name']:null;
    $description=isset($_POST['description'])? $_POST['description'] : null;
    $price=isset($_POST['price'])? $_POST['price'] : null;
    view('admin');
}