<?php $data = !empty($partialData) ? $partialData : []; ?>

<div class="slides-wrap">
    <template v-for="(image, index) in product.images">
        <template v-if="!image.hidden">
            <div class="slide" v-bind:style="{ backgroundImage: 'url(/assets/images/products/' + image.imageUrl + ')' }" :class="['index-' + index]" />

            </div>
        </template>
    </template>

    <div class="arrow arrow__prev" v-on:click="decreaseSlider()" v-if="arrowPrev"><i class="fal fa-long-arrow-left"></i></div>
    <div class="arrow arrow__next" v-on:click="increaseSlider()" v-if="arrowNext"><i class="fal fa-long-arrow-right"></i></div>
</div>
