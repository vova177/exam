<?php

session_start();


define("FILE_VAY",'database/file.txt');
define("JSON_FILE",'database/getForecast.txt');

include 'conect_db.php';

include'config.php';

include'check_user.php';

include'function.php';

include'routing.php';

include'controllers.php';