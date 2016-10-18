<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 28.09.16
 * Time: 12:30
 */

$address=parse_ini_file('config.ini');

$_SESSION['cart_products']=0;

$mas[]=1;
$mas[]=2;
$mas[]=2;
$mas[]=2;


$_SESSION['cart_products']=$mas;
//$_SESSION['cart']['products']=2;


//var_dump($mas);
//var_dump(count($_SESSION['cart_products']));