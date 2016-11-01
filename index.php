<?php

session_start();

include 'connect_db.php';


ini_set('display_errors',1);
error_reporting(E_ALL);


define("JSON_FILE",'database/file.txt');


include 'repository.php';
//include 'work_db.php';

include'config.php';

include'check_user.php';

include'function.php';

include'routing.php';

include'controllers.php';


