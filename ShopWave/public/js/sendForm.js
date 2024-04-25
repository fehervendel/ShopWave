var csrf_token = $('meta[name="csrf-token"]').attr('content');
$( document ).ready(function() {

    $('.item-button').on('click',function(e){
        e.preventDefault();

        let link = $(this).attr('data-link');

        $.post(link,{
            _token : csrf_token,
        }).done(function(json){
            if(json.response === true){
                toastr.success('Product added to cart successfully!', 'Success');
            } else {
                toastr.error('Failed to add product to cart.', 'Error');
            }
        });
        return false;
    });

    $('.cart-item-remove').on('click', function (e) {
        e.preventDefault();

        let link = $(this).attr('data-link');
        let cartItem = $(this).closest('.cart-item');

        let itemPriceText = cartItem.find('.cart-item-price').text();
        let itemPrice = parseFloat(itemPriceText.replace('$', '').trim());

        let totalPriceText = $('#totalPrice').text();
        let totalPrice = parseFloat(totalPriceText.replace('$', '').trim());

        /*let vatPriceText = $('#vatPrice').text();
        let vatPrice = parseFloat(vatPriceText.replace('$', '').trim());

        let grandTotalPriceText = $('#grandTotalPrice').text();
        let grandTotalPrice = parseFloat(grandTotalPriceText.replace('$', '').trim());*/

        let newTotalPrice = totalPrice - itemPrice.toFixed(2);

        $.ajax({
            url: link,
            method: 'DELETE',
            data: {
                _token : csrf_token,
            }
        }).done(function(json) {
            if(json.response === true) {
                cartItem.remove();
                $('#totalPrice').text(`$ ${newTotalPrice}`);
                $('#vatPrice').text(`$ ${(newTotalPrice * 0.27).toFixed(2)}`);
                $('#grandTotalPrice').text(`$ ${(newTotalPrice + 20)}`);
                toastr.success('Item removed successfully!', 'Success');
            } else {
                toastr.error('Failed to remove item.', 'Error');
            }
        });
        return false;
    })
});

