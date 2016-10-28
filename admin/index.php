<?php
session_start();

include '../repository.php';
include '../connect_db.php';

ini_set('display_errors',1);
error_reporting(E_ALL);

include'function.php';
include'routing.php';
include'controllers.php';