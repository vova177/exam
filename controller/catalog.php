<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 10.10.16
 * Time: 20:10
 */
if($action=="catalog"){

    view('catalog');
    $select1=$db->query('SELECT * FROM `categories`');
    $mas=$select1->fetchAll(PDO::FETCH_ASSOC);
    for($i=0;$i<count($mas);$i++){
        echo "<a href=".$mas[$i]['title'].">".$mas[$i]['title'].'</a><br/>';
    }

}