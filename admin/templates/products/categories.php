<div class="container">
    <h3>Add new categoty</h3>
    <form action="" method="post">
        <div class="form-group">
        <input type="text" class="form-control" name="category"/>
        </div>
            <button type="submit" class="btn">Ok</button>
    </form>

<table class="table">
    <tr align="center"><td colspan="4"><h3>All category</h3></td></tr>
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
        echo '<td><a href=update-category/?update_category='.$value['id'].'>Update</a></td>';
        echo '<tr>';
    }
    ?>
</div>
