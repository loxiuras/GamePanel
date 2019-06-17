<div class="highlighted-products" id="products">
    <div class="inner">

        <div class="product-wrapper">

            <h4 class="title">Highlighted Products</h4>

            <a class="product" v-for="(product, index) in products" :href="product.urlSrc">
                
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

            </a>
        </div>

    </div>
</div>

<script>

    let products = new Vue({
        el: '#products',
        methods:
            {

            },
        data: {
            products: [
                {
                    name: "Call of Dawn",
                    price: "24.95",
                    priceType: "€",
                    action: true,
                    actionPrice: "10",
                    limited: false,
                    urlSrc: "/products/call-of-dawn",
                    category: "swords",
                    imageUrl: "callofdawn/call-of-dawn.png",
                    imageAlt: "Call of Dawn",
                    productUrl: "call-of-down",
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
                    urlSrc: "/products/the-hunger",
                    category: "swords",
                    imageUrl: "thehunger/the-hunger.png",
                    imageAlt: "The Hunger",
                    productUrl: 'the-hunger',
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
                    urlSrc: "/products/stalkers-price",
                    category: "hammers",
                    imageUrl: "stalkersprice/stalkers-price.png",
                    imageAlt: "Stalker's Price",
                    productUrl: 'stalkers-price',
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
                    urlSrc: "/products/infernos-fangs",
                    category: "chain blades",
                    imageUrl: "infernosfangs/infernos-fangs.png",
                    imageAlt: "Inferno's Fangs",
                    productUrl: 'infernos-fangs',
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