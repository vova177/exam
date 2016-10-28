<table class="table">
    <tr><td colspan="5">Create user</td></tr>
    <tr>
        <td>Role</td>
        <td>Name</td>
        <td>Login</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    <form action="" method="post">
        <tr>
            <td><input type="text" name="role"/></td>
            <td><input type="text" name="name"/></td>
            <td><input type="text" name="login"/></td>
            <td><input type="text" name="email"/></td>
            <td><input type="text" name="password"/></td>
        </tr>
        <tr><td colspan="5"><input type="submit"  value="Ok"/></td></tr>
    </form>
</table>

<table class="table">
    <tr><td colspan="6">All users</td></tr>
    <tr>
        <td>Name</td>
        <td>Role</td>
        <td>Email</td>
        <td>Last activity</td>
        <td colspan="2"> Change</td>
    </tr>
<?php
echo "Кількість: ".count($data);
foreach($data as  $value) {
    echo "<tr>";
    echo"<td>".$value['name'] . "</td>";
    echo"<td>".$value['role']."</td>";
    echo"<td>".$value['email']."</td>";
    echo"<td>".$value['last_activity']."</td>";
    echo "<td><a href=users/?delete_user=".$value['id'].">Delete</a></td>";
    echo "<td><a href=update_user/?update_user=".$value['id'].">Update</a></td>";
    echo "</tr>";
}
?>
</table>
