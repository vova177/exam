<form action="/order" method="post">
<table class="table  table-bordered table-hover table-striped table-condensed">
    <tr>
        <td>Name</td>
        <td>Price</td>
    </tr>
<?php
$price=0;
foreach($data as $key=>$value){
    echo"<tr>";
    echo "<td>".$value[0]['title']."</td>";
    echo "<td>".$value[0]['price']."</td>";
    echo"</tr>";
    $price+=$value[0]['price'];
}
  echo "<tr><td colspan='3'>"."$price"."</td></tr>"
    ?>


</table>

<input type="submit" value="confirm">

</form>