$(document).ready(function (){
let url = window.location.origin
    $('.delete-product').click(function (){
        let inputCheckbox = $('.product-checked');
        let idProductDelete = [];
        for(let i=0;i < inputCheckbox.length;i++){
            if(inputCheckbox[i].checked) {
                idProductDelete.push(inputCheckbox[i].value);
            }
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: url+ '/admin/product/destroy',
            method:'POST',
            data: {
                'productId' : idProductDelete
            },
            success: function (res){
                if(res.status === 'success'){
                    for(let i = 0;i < idProductDelete.length;i++){
                        $('#product-item-' + idProductDelete[i]).remove();
                    }
                }
            }, error: function (error) {

            }
        })
    })
})


