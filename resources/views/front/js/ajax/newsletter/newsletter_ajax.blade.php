<script>
     $('#newsletter_crt').validation({
                rules: {email: {
      required: true,
      email:true
        }},
            })
    $('#newsletter_crt').submit(function (e){
            e.preventDefault();
            let thisForm = $(this);
           
            if(thisForm.valid()){
                console.log('fdsfa');
            }
        });
</script>