
<?php


//var_dump($data);

foreach($data as $value){
    $url="/products/".$value['id'];
    echo "<a href='".$url."'>" . $value['title'] . "</a><br/>";

}