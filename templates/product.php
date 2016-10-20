
<script>
    $(document).ready(function(){
    $('.btn').click(function(){
        var product_id=$(this).attr('data-id');
        $.ajax({
            url: '/add_product_to_cart',
            data: {id: product_id},
            method: "POST",
            dataType: "JSON",
            success: function( data ) {
            if( data.amount > 0 ) {
                $('.cart').html('В корзине '+data.amount+' товаров!');
            }
        }
        });
    });
    });
</script>

<div class="cart">

</div>

<form action="" method="post">
    <table class="table table-bordered table-hover">
<?php
foreach($data as $value){
    echo "<tr>";
    $id=$value['id'];
   echo "<td>"."Name:".$value['title']."<td/>";
    echo "<td>"."Description:".$value['description']."<td/>";
    echo "<td>"."Price:".$value['price']."<td/>";
   echo  "<td>"."<button class='btn' data-id=".$id.">Bought</button>"."<td/>";
    echo "<tr/>";
}
?>
    </table>
</form>