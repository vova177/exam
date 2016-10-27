<table class="table">
    <tr>
        <td>Name</td>
        <td>Role</td>
        <td>Email</td>
        <td>Last activity</td>
        <td colspan="2"> Change</td>
    </tr>
<?php
echo "Кількість: ".count($data);
echo "<td colspan='6'><a href=users/?create_user>Create</a></td>";
foreach($data as  $value) {
    echo "<tr>";
    echo"<td>".$value['name'] . "</td>";
    echo"<td>".$value['role']."</td>";
    echo"<td>".$value['email']."</td>";
    echo"<td>".$value['last_activity']."</td>";
    echo "<td><a href=users/?delete_user=".$value['id'].">Delete</a></td>";
    echo "<td><a href=users/?update_user=".$value['id'].">Update</a></td>";
    echo "</tr>";
}
?>
</table>
