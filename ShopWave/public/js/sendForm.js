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
});

