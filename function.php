<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:30
 */



function write_file($array, $patch){
    if(!file_exists('database')) {
        mkdir('database');
    }
    $oldArr=read_file($patch);
    if(!$oldArr){
        $allArr=[$array];
    }else{
        $allArr=$oldArr;
        array_push($allArr,$array);
    }
    $rez=file_put_contents($patch, serialize($allArr));
    return $rez;
}

function read_file($patch){
    if(file_exists($patch)){
        $str=file_get_contents($patch);
        $array=unserialize($str);

        return $array ? $array :[];
    }else{
        return [];
    }
}



function view($view){

    include"teamPlates/header.php";
    include"teamPlates/{$view}.php";

}
