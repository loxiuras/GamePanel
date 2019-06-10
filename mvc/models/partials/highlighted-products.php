<div class="highlighted-products" id="products">
    <div class="inner">

        <div class="product-wrapper">

            <h4 class="title">Highlighted Products</h4>

            <div class="product" v-for="(product, index) in products">
                
                <div class="image-wrap">
                    <img class="image" v-bind:src="'assets/images/products/' + product.imageUrl" />
                </div>

                <div class="title-wrap">
                    <h5 class="title-text"> {{ product.name }} </h5>
                </div>

                <div class="price-wrap">
                    <p class="price-text"> {{ product.priceType }} {{ product.price }}</p>
                </div>

                <div class="limited-wrap" v-if="product.limited">
                    <p class="limited-text">Limited</p>
                </div>

                <div class="rate-wrap">
                    <i class="fal fa-heart rate-icon"></i>
                </div>

            </div>
        </div>

    </div>
</div>

<script>



    let products = new Vue({
        el: '#products',
        data: {
            products: [
                {
                    name: "Call of Dawn",
                    price: "24.95",
                    priceType: "€",
                    action: false,
                    actionPrice: "",
                    limited: false,
                    category: "swords",
                    imageUrl: "call-of-dawn.png",
                    imageAlt: "Call of Dawn",
                    type: "Sword",
                    damageType: "Slashing",
                    effects: "+80 Radiant",
                    amountOfCellSlots: 2    ,
                    cellSlots: [
                        {
                            name: "Technique Cell"
                        },
                        {
                            name: "Utility Cell"
                        }
                    ]
                },
                {
                    name: "The Hunger",
                    price: "79.95",
                    priceType: "€",
                    action: true,
                    originalPrice: "84.95",
                    limited: false,
                    category: "swords",
                    imageUrl: "the-hunger.png",
                    imageAlt: "The Hunger",
                    type: "Sword",
                    damageType: "Slashing",
                    effects: "+80 Umbral",
                    amountOfCellSlots: 2,
                    cellSlots: [
                        {
                            name: "Power Cell"
                        },
                        {
                            name: "Utility Cell"
                        }
                    ]
                },
                {
                    name: "Stalker's Price",
                    price: "34.95",
                    priceType: "€",
                    action: false,
                    originalPrice: "",
                    limited: false,
                    category: "hammers",
                    imageUrl: "stalkers-price.png",
                    imageAlt: "Stalker's Price",
                    type: "Hammer",
                    damageType: "Blunt",
                    effects: "+80 Umbral",
                    amountOfCellSlots: 2,
                    cellSlots: [
                        {
                            name: "Power Cell"
                        },
                        {
                            name: "Defence Cell"
                        }
                    ]
                },
                {
                    name: "Inferno's Fangs",
                    price: "39.95",
                    priceType: "€",
                    action: false,
                    originalPrice: "",
                    limited: true,
                    category: "chain blades",
                    imageUrl: "infernos-fangs.png",
                    imageAlt: "Inferno's Fangs",
                    type: "Chain Blade",
                    damageType: "Slashing",
                    effects: "+80 Blaze",
                    amountOfCellSlots: 2,
                    cellSlots: [
                        {
                            name: "Power Cell"
                        },
                        {
                            name: "Power Cell"
                        }
                    ]
                }
            ]
        }
    });

</script>