<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 13.10.16
 * Time: 19:11
 */


foreach($data as $value){
   echo "Name:".$value['title']."<br/>";
    echo "Description:".$value['description']."<br/>";
    echo "Price:".$value['price']."<br/>";
}