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



include 'controller/quest_controller.php';
include 'controller/main_controller.php';