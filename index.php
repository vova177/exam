<?php

session_start();


define("FILE_VAY",'database/file.txt');
include'config.php';

//var_dump($inf);
//$admin=$inf['admin_mail'];
////var_dump($admin);

include'function.php';

include'routing.php';

include'controllers.php';