<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 27.09.16
 * Time: 20:30
 */
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
    if(mail($to,"",$message)){
        echo"Надіслано";
    }else{
        echo"Ошибка";
    }
}
function connect_PDO(){
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "euflfq");
    define("DBNAME", "QEST");
// Connect to database
    try {
        $db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8mb4", "".USER."", "".PASS."");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

