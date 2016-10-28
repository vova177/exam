<table class="table">
    <tr>
        <td>Title</td>
        <td>Description</td>
        <td>Price</td>
    </tr>
    <form action="" method="post">
        <tr>
            <td><input type="text" name="title"/></td>
            <td><input type="text" name="description"/></td>
            <td><input type="text" name="price"/></td>
        </tr>
        <tr><td colspan="3"><input type="submit" value="ok"/></td></tr>
    </form>
</table>
<table class="table">
    <tr>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Delete</td>
        <td>Update</td>
    </tr>
    <?php
        foreach ($data as $value) {
            echo '<tr>';
            echo '<td>' . $value['title'] . '</td>';
            echo '<td>' . $value['description'] . '</td>';
            echo '<td>' . $value['price'] . '</td>';
            echo '<td><a href=?delete_product=' . $value['id'] . '>Delete</a></td>';
            echo '<td><a href=/admin/update_product/?update_product=' . $value['id'] . '>Update</a></td>';
            echo '<tr>';
      //  }
    }
    ?>
</table>