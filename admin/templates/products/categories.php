<table class="table">
    <tr><td colspan="2">Add new categoty</td></tr>
    <form action="" method="post">
        <tr><td><input type="text" name="category"/></td></tr>
        <tr><td><input type="submit" value="add"/></td></tr>
    </form>
</table>
<table class="table">
    <tr>
        <td>Name</td>
        <td>Select</td>
        <td>Delete</td>
        <td>Update</td>
    </tr>
    <?php
    foreach($data as $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td><a href=products/'.$value['id'].'>Select</a></td>';
        echo '<td><a href=?delete_category='.$value['id'].'>Delete</a></td>';
        echo '<td><a href=update_category/?update_category='.$value['id'].'>Update</a></td>';
        echo '<tr>';
    }
    ?>
