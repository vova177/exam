<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 06.10.16
 * Time: 10:22
 */
if($action=="get_data"){


   $data=read_file(JSON_FILE);
   // var_dump( $data);
    json_encode(['data'=>$data]);
    view('quest');
}
