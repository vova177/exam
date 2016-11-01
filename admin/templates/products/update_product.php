<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="form[title]" value="<?=$data[0]['title']?>"/>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="form[description]" value="<?=$data[0]['description']?>"/>
        </div>
        <div class="form-group">
            <label>Price</label>
        <input type="text" class="form-control" name="form[price]" value="<?=$data[0]['price']?>"/>
        </div>
        <button type="submit" class="btn">Ok</button>
    </form>
</div>
]