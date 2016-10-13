<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 11.10.16
 * Time: 20:05
 */

//for ($i = 0; $i < count($data); $i++) {

//var_dump($data);

    foreach($data as $value){
    $url="/catalog/".$value['id'];
    echo "<a href='".$url."'>" . $value['title'] . "</a><br/>";

}
