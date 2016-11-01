<div class="container">
     <h3>Update selected user</h3>
<form action="" method="post">
    <div class="form-group">
    <input type="text" class="form-control" name="form[name]" size="30" value="<?=$data[0]['name']?>"/>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="form[role]" size="30" value="<?=$data[0]['role']?>"/>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="form[email]" size="30" value="<?=$data[0]['email']?>"/>
    </div>
        <button type="submit" class="btn">Ok</button>
</form>
</div>
