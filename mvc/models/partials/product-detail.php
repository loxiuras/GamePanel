<?php $data = !empty($partialData) ? $partialData : []; ?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div class="product-detail-wrapper" id="product">
    <div class="inner">

        <div class="product-info">

            <?php
                $partialData = $data;
                require "mvc/models/partials/product-slider.php";
            ?>

            <div class="product-data">

                <div class="product__title-wrap">
                    <h3 class="product__title">{{ product.name }}</h3>
                    <h5 class="product__subtitle">{{ product.subtitle }}</h5>
                </div>

                <div class="product__description"> {{ product.description }}</div>

                <div class="product__price">
                    <div class="price">{{ product.priceType }} {{ product.price }}</div>
                </div>

                <div class="product__note" v-if="product.limited">
                    <span class="note"><b>Note</b>: This product is limited edition and will never be sold again!</span>
                </div>

                <div class="shopping-cart">
                    <a href="" class="button">Add to shopping cart</a>
                </div>
                
            </div>

        </div>

    </div>
</div>

<script>

let product = new Vue({
    el: '#product',
    data: {
        product: '',
        currentSlider: 0,
        amountOfImages: 0,
        arrowPrev: false,
        arrowNext: false
    },
    methods: {
        decreaseSlider: function ( ) {
            if( (this.currentSlider - 1) >= 0 ) {
                let previousSlider = this.currentSlider;
                this.currentSlider--;
                this.updateSlider(previousSlider);
                this.updateSliderArrows();
            }
        },
        increaseSlider: function ( ) {
            if( (this.currentSlider - 1) < this.amountOfImages - 2 ) {
                let previousSlider = this.currentSlider;
                this.currentSlider++;
                this.updateSlider(previousSlider);
                this.updateSliderArrows();
            }
        },
        updateSlider: function(previousSlider) {
            this.product.images[previousSlider].hidden = true;
            this.product.images[this.currentSlider].hidden = false;
        },
        updateSliderArrows: function() {

            console.log(this.currentSlider);
            console.log(product.amountOfImages);

            if(0 !== this.currentSlider && (product.amountOfImages-1) !== this.currentSlider) {
                product.arrowNext = true;
                product.arrowPrev = true;
            } else {
                if(this.currentSlider === (product.amountOfImages-1)) {
                    product.arrowNext = false;
                    product.arrowPrev = true;
                }
                else if(this.currentSlider === 0) {
                    product.arrowNext = true;
                    product.arrowPrev = false;
                }
            }
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

        if(result.images.length > 1) {
            product.arrowNext = true;
        }
    }
});

</script>