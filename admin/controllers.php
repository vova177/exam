<?php

if(!$action){
    header('HTTP/ 1.1 404 Not Fond');
    include "templates/view.404.php";
}
include 'controllers/users.php';
include 'controllers/update_user.php';
include 'controllers/categories.php';
include 'controllers/update_category.php';
include 'controllers/products.php';
include 'controllers/update_product.php';
include 'controllers/autocomplete.php';