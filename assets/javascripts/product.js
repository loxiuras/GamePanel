"use strict";

$('#addProductToShoppingCart').on('click', function() {
    let $this = $(this);

    let articleNumber = $this.attr('data-article-number');
    let productUrl = $this.attr('data-product-url');
    let amount = 1;

    let url = "/mvc/process/add-product-to-shoppingcart.php";
    let postData = {
        articleNumber: articleNumber,
        productUrl: productUrl,
        amount: amount
    };

    $.post(url, postData).done(function(jsonResult) {
        let result = JSON.parse(jsonResult);
        if(result.success === true) {

            let m = new Modal('added-product');
            m.settings({
                style: {
                    padding: 10,
                    margin: 0,
                    vertical: 'top',
                    horizontal: 'center'
                },
                background: {
                    show: true,
                    color: "#000000",
                    transparency: 0.7
                }
            });
            m.buildModal();

        }
    });
});