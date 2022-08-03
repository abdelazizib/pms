<script>
    $('.remove_product_cart').submit(function (e){
        e.preventDefault();
        let formData = $(this);
        let product = formData.serialize();
        $.ajax({
          method:'POST',
          url:"{{route('cart.delete')}}",
          data:product,
          success:function(response){
              if(response.success){
                  let parent = formData.parent().parent().parent().parent();
                  parent.fadeOut(500,function(){
                    parent.remove();
                })
                let cart = response.cart;
                cart = Object.keys(cart).map((key) => cart[key]);
                let cart_items = cart.length;
                let cart_total = response.total;
                $('.cart__items-conut').text(`${cart_items} `);
                $('.cart__items-conut').text(`${cart_items} `);
               console.log(cart);
              }
          },
          error:function (){

          }
        })
})
</script>