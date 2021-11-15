$('.buy').click(function () {
    var price = $(this).data('price'),
        product = $(this).data('product');
    $('#price').val(price);
    $('#product').val(product);
    $('#cart').modal()
    return false;
});