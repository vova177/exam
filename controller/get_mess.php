<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 12.10.16
 * Time: 19:59
 */
if ($action == "get_mess"){
    $messages = read_file(JSON_FILE);
    header('Content-Type: application/json');
    echo json_encode( [ "data"=>$messages]);
}