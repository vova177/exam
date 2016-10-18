
<?php
foreach($data as $value){
    $url="/products/".$value['id'];
    //echo '<button class="btn" data-id="$value[id]">Кп</button> ';
    echo "<a href='".$url."'>" . $value['title'] . "</a><br/>";

}