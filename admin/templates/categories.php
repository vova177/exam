<table class="table">
    <tr>
        <td>Name</td>
        <td>Select</td>
    </tr>
    <?php
    foreach($data as $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td><a href=select_products/?category_id='.$value['id'].'>Select</a></td>';
        echo '<tr>';
    }
    ?>
