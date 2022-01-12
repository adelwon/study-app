$(document).ready(function () {
    $('.cart_button').click(function (event) {
        event.preventDefault()
        let data = {};

        let $product = $(this).closest('.product');
        const productPrice = $product.find('.btn-cart').attr('data-price') + ' грн';

        data = {
            name: $product.find('.product-name').text(),
            price: $product.find('.product-price').html(),
        };

        if ($product.length <= 0) {
            $product = $(this).closest('.product');
            data = {
                name: $product.find('.product-name').text(),
                price: $product.find('.product-price').html(),
            };
        }

        const quantity = $product.find('.quantity').length > 0
            ? $product.find('.quantity').val()
            : 1;

        const productId = $product.find('.cart_button').attr('data-id');

        if (quantity <= 0) {
            return;
        }

        $.ajax({
            url: '/add-product/' + productId,
            type: 'POST',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                quantity: quantity,
            },
            success: function (response) {
                $('.cart-count').text(response.total);
            },
        });

    });
});
