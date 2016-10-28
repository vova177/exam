<?php
function validate($array){
    foreach($array as $key => $val){
        if($key=='0') {
            if(strlen($val)>=55 || strlen($val)==0){
                return false;
            }
        }
        if($key=='1'){
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)||strlen($val)==0){
                echo'email false';
                return false;
            }
        }
        if($key=='2' ){
            if(strlen($val)>255 || strlen($val)==0){
                return false;
            }
        }
    }
        return true;
}
function valid_registration($array){
    foreach($array as $key => $value) {
        if ($key == '0') {
            if (strlen($value) >= 55 || strlen($value) == 0) {
                return false;
            }
        }
        if ($key == '1') {
            if (strlen($value) >= 55 || strlen($value) == 0) {
                return false;
            }
        }
        if ($key == '2') {
            if (!filter_var($value, FILTER_VALIDATE_EMAIL) || strlen($value) == 0) {
                echo 'email false';
                return false;
            }
        }
        if ($key == '3') {
            if (strlen($value) > 50 || strlen($value) == 0) {
                return false;
            }
        }
        if ($key == '4') {
            if (strlen($value) > 5 || strlen($value) == 0) {
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
    return $rez;
}
function read_file($patch){
    if(file_exists($patch)){
        $str=file_get_contents($patch);
        $array=unserialize($str);
      if(isset($array)) {
          return $array;
      }else{return [];}
    }
}
function text_change($array){

    foreach($array as $key => $value){
        if($key=='message'){
            $value=nl2br($value);
        }
    }
      return $array;
}
function view($view, $data=[]){

    include "templates/header.php";
    include "templates/{$view}.php";

}
function send_mail($message, $address){
    $message=wordwrap($message, 70, '\n\r');
     $to=$address['admin_mail'];
    if(mail($to,"",$message)){
        echo"Надіслано";
    }else{
        echo"Ошибка";
    }
}


