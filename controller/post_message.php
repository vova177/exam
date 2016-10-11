<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 07.10.16
 * Time: 0:07
 */

if($action=="post_message"){
    $message=isset($_POST['message']);
         var_dump($message);
    view('quest');
}