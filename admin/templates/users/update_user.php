
<form action="" method="post">
<table class="table table-bordered">
    <tr>
    <td><input type="text" name="new_name" size="30"/></td>
    <td><input type="text" name="new_role" size="30"/></td>
    <td ><input type="text" name="new_email" size="30"/><input type="submit" value="OK"></td>
    </tr>
    <tr>
        <td>Name</td>
        <td>Role</td>
        <td>Email</td>
    </tr>
<?php
if(!empty($data)){
    foreach($data as $value){
        echo"<tr>";
        echo"<td>".$value['name'] . "</td>";
        echo"<td>".$value['role']."</td>";
        echo"<td>".$value['email']."</td>";
        echo"</td>";
    }
}
?>
</table>
</form>
