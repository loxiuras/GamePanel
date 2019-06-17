<?php
    $data = !empty($partialData) ? $partialData : "";
?>

<div id="product">

    <?php echo "<pre>"; ?>
    {{ product }}

</div>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>

let product = new Vue({
    el: '#product',
    data: {
        product: ''
    }
});

$.ajax({
    url: "/assets/jsons/products/<?php echo $data['product']; ?>.json",
    cache: false,
    dataType: 'json',
    success: function( result ){
        product.product = result;
    }
});
</script>