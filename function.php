<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:30
 */
function validate($array){
    foreach($array as $key => $val){
        if($key=='name') {
            if(strlen($val)>=55 || strlen($val)==0){
                return false;
            }
        }
        if($key=='email'){
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)||strlen($val)==0){
                echo'email false';
                return false;
            }
        }
        if($key=='message' ){
            if(strlen($val)>255 || strlen($val)==0){
                return false;
            }
        }
    }
        return true;
}


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
    //var_dump($rez);
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

function view($view, $data=[]){

    include "templates/header.php";
    include "templates/{$view}.php";

}

function send_mail($message, $address){
    $message=wordwrap($message, 70, '\n\r');
     $to=$address['admin_mail'];
    $send_mail=mail($to,"",$message);
    if($send_mail){
        echo"Надіслано";
    }else{
        echo"Ошибка";
    }
}
