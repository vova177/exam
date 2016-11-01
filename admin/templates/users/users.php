<div class="container">
    <h3>Create user</h3>
    <form action="" method="post">
        <div class="form-group">
            <label>Role</label>
         <input type="text" name="form[role]" id="role" class="form-control" placeholder="enter admin or customer"/>
        </div>
        <div class="form-group">
            <label>Name user</label>
           <input type="text" name="form[name]" id="user_name" class="form-control" placeholder="enter user name"/>
            <div id="userList"></div>
        </div>
        <div class="form-group">
            <label>Login user</label>
        <input type="text" name="form[login]" id="login" class="form-control" placeholder="enter user login"/>
                <div id="loginList"></div>
        </div>
        <div class="form-group">
            <label>Email user</label>
            <input type="text" name="form[email]" id="email" class="form-control" placeholder="enter user email"/>
            <div id="emailList"></div>
        </div>
        <div class="form-group">
            <label>Password user</label>
            <input type="text" name="form[password]" id="password" class="form-control" placeholder="enter user password"/>
        </div>
       <button type="submit" class="btn">Ok</button>
    </form>

<table class="table">
    <tr><td colspan="6"><h3>All users</h3></td></tr>
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
    echo "<td><a href=users?delete_user=".$value['id'].">Delete</a></td>";
    echo "<td><a href=update-user?update_user=".$value['id'].">Update</a></td>";
    echo "</tr>";
}
?>
</table>
</div>
