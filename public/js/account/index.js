(function () {
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()

const cart = [];

$('.menu-category-list__item-link').on('click', function () {
    let product_id = $(this).data('product_id')

    $.ajax({
        url: '/cart/append',
        method: 'post',
        data: {
            product_id: product_id
        },
        success: function(data) {
            if (data.result) {
                $('.modal-popup').fadeIn()
                cart.push(product_id)
                refreshCart()
                setTimeout(function () {
                    $('.modal-popup').fadeOut()
                }, 2000)
            }
        }
    })

    return false;
})

function refreshCart() {
    $('.cart-counter').text(cart.length)
}
