<?php

if(!$action){
    header('HTTP/ 1.1 404 Not Fond');
    include "templates/view.404.php";
}
include 'controllers/main.php';
include 'controllers/users.php';
include 'controllers/category.php';
