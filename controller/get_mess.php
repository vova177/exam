<?php
if ($action == "get_mess"){
    $messages = read_file(JSON_FILE);
    header('Content-Type: application/json');
    echo json_encode( [ "data"=>$messages]);
}