<script>
    $('.cart__item-count').on('change',function (e){
        e.preventDefault();
        let this_count = $(this);
        let count = $(this).val();
        let product_id = $('.product_id').val();
        $.ajax({
          method:'POST',
          url:"{{route('cart.update')}}",
          data:{
            id:$('.product_id').val(),
            quantity:count,
            _token:`{{ csrf_token() }}`
        },
          success:function(response){

              if(response.updated){

                let cart = response.cart;
                let cart_product = cart[`${product_id}`];
                let product_price = cart_product.price;
                let product_qty = cart_product.quantity;
                let price_of_qty = product_price * product_qty;
                $(this_count).val(`${product_qty}`);
                $(this_count).parent().find('.cart__item-price .price_product').text(price_of_qty)
               console.log(cart_product);
              }
          },
          error:function (){

          }
        })
})
</script>