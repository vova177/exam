<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>Title</label>
          <input type="text" class="form-control" name="form[title]"/>
        </div>
        <div class="form-group">
            <label>Description</label>
               <input type="text" class="form-control" name="form[description]"/>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="form[price]"/>
        </div>
       <button type="submit" class="btn">Ok</button>
    </form>
</div>
<table class="table">
    <tr align="center"><td colspan="5"><h3>All products</h3></td></tr>
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
            echo '<td><a href=/admin/update-product/?update_product=' . $value['id'] . '>Update</a></td>';
            echo '<tr>';
      //  }
    }
    ?>
</table>