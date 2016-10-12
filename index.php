<?php

session_start();

include 'conect_db.php';


ini_set('display_errors',1);
error_reporting(E_ALL);


define("FILE_VAY",'database/file.txt');
define("JSON_FILE",'database/getForecast.txt');



include 'repository.php';

include'config.php';

include'check_user.php';

include'function.php';

include'routing.php';

include'controllers.php';