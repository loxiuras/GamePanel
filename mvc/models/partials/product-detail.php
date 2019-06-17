<?php $data = !empty($partialData) ? $partialData : []; ?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div class="product-detail-wrapper" id="product">
    <div class="inner">

        <div class="product-info">

            <?php
                $partialData = $data;
                require "mvc/models/partials/productSlider.php";
            ?>

        </div>

    </div>
</div>

<script>

let product = new Vue({
    el: '#product',
    data: {
        product: '',
        currentSlider: 0,
        amountOfImages: 0
    },
    methods: {
        decreaseSlider: function ( ) {
            if( (this.currentSlider - 1) >= 0 ) {
                let previousSlider = this.currentSlider;
                this.currentSlider--;
                console.log(this.currentSlider);
                this.updateSlider(previousSlider);
            }
        },
        increaseSlider: function ( ) {
            if( (this.currentSlider - 1) < this.amountOfImages - 2 ) {
                let previousSlider = this.currentSlider;
                this.currentSlider++;
                console.log(this.currentSlider);
                this.updateSlider(previousSlider);
            }
        },
        updateSlider: function(previousSlider) {
            this.product.images[previousSlider].hidden = true;
            this.product.images[this.currentSlider].hidden = false;
        }
    }
});

$.ajax({
    url: "/assets/jsons/products/<?php echo $data['product']; ?>.json",
    cache: false,
    dataType: 'json',
    success: function( result ){
        product.product = result;
        product.amountOfImages = result.images.length;

    }
});
</script>