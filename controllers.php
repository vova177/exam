<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:26
 */



if(!$action){
    header('HTTP/ 1.1 404 Not Fond');
    include "templates/view.404.php";
}


include 'controller/work_db.php';


include 'controller/main_controller.php';



include 'controller/admin.php';

include 'controller/quest_controller.php';
include 'controller/get_mess.php';
include 'controller/post_mess.php';


include 'controller/login.php';
include 'controller/registration.php';


include 'controller/category_products.php';
include 'controller/product.php';

