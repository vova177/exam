
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
                //alert(data.amount);
            if( data.amount > 0 ) {
                $('.cart').html('В корзине '+data.amount+' товаров!');
            }
        }
        });
    });
    });
</script>



<?php
foreach($data as $value){
    $id=$value['id'];
   echo "Name:".$value['title']."<br/>";
    echo "Description:".$value['description']."<br/>";
    echo "Price:".$value['price']."<br/>";

}
?>
<button class="btn" data-id=."3".>Bought</button>
