</table>
<table class="table">
    <tr>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Select</td>
    </tr>
    <?php
        foreach ($data as $value) {
            echo '<tr>';
            echo '<td>' . $value['title'] . '</td>';
            echo '<td>' . $value['description'] . '</td>';
            echo '<td>' . $value['price'] . '</td>';
            echo '<td><a href=select_products/?products_id=' . $value['id'] . '>Select</a></td>';
            echo '<tr>';
      //  }
    }
    ?>
</table>