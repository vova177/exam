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
include 'controller/get_data.php';
include 'controller/post_message.php';


include 'controller/exit.php';
include 'controller/registration.php';


include 'controller/catalog.php';

