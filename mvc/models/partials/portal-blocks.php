<div class="portal-blocks" id="portals">
    <div class="inner">

        <div class="portal-wrap">

            <div class="portal" v-for="portalBlock in portalBlocks">
                <div class="portal__background" v-bind:style="{ backgroundImage: 'url(assets/images/portal/' + portalBlock.background + ')' }">

                    <a :href="portalBlock.buttonSrc" class="portal__button" v-bind:style="{ backgroundColor: portalBlock.buttonColor }">
                        {{ portalBlock.buttonText }}
                    </a>

                </div>
            </div>

        </div>

    </div>
</div>

<script>

    let portals = new Vue({
        el: '#portals',
        data: {
            portalBlocks: [
                {
                    background: 'image-1.jpg',
                    buttonColor: '#feca57',
                    buttonText: 'Check out the new dyes',
                    buttonSrc: '/categories/dyes'
                },
                {
                    background: 'image-2.jpg',
                    buttonColor: '#feca57',
                    buttonText: 'Premium items',
                    buttonSrc: '/categories/premium-items'
                },
                {
                    background: 'image-3.jpg',
                    buttonColor: '#feca57',
                    buttonText: 'Big sale',
                    buttonSrc: '/categories/sale'
                }
            ]
        }
    });

</script>