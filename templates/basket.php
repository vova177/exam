<form action="/order" method="post">
<table class="table  table-bordered table-hover table-striped table-condensed">
    <tr>
        <td>Name</td>
        <td>Price</td>
        <td>Number</td>
    </tr>
<?php
$price=0;
if(empty($data)){
    echo "<tr>";
    echo "<td colspan='3'>Basket empty</td>";
    echo "<tr/>";
}else {
    echo "Кількість товарів: ".count($_SESSION['cart']);
    foreach ($data as $key => $value) {
        if(isset($_SESSION['count'][$value['id']]) && $_SESSION['count'][$value['id']]>0) {
            echo "<tr>";
            echo "<td>" . $value['title'] . "</td>";
            echo "<td>" . $value['price'] . "</td>";
            echo "<td><a href=/basket?add=" . $value['id'] . ">>>+<<</a>
            <input type='text' name='count' size='2px' class='count' value=" . $_SESSION['count'][$value['id']].">
            <a href=/basket?delete=" . $value['id'] . ">>>-<<</a></td>";
            $value['price']*=$_SESSION['count'][$value['id']];
            echo "</tr>";
        }
        $price += $value['price'];
    }
}
    echo "<tr><td colspan='3'>" . "$price" . "</td></tr>"
    ?>
</table>
    <input type="submit" value="confirm">
</form>