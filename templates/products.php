
<form action="" method="post">
<table class="table table-bordered table-hover">
<?php
foreach($data as $value){
    $url="/products/".$value['id'];
    echo "<tr><td>"."<a href='".$url."'>" . $value['title'] . "</a><br/>"."</td></tr>";
    echo "<tr><td>  <img src=\"2\"></td></tr>";
    echo "<tr><td>".$value['description']."</td></tr>";
    echo "<tr><td>".$value['price']."</td></tr>";
    echo  "<tr><td>"."<button class='btn' data-id=".$value['id'].">Bought</button>"."<td/></tr>";
}
?>
</table>
</form>