<script>

    $('#contact').validate({
  rules: {
    name: {
      required: true,
      minlength:3,
      maxlength:255
    },
    email: {
      required: true,
      email:true
        },
    subject: {
      required: true,
        },
    message: {
      required: true,
        }
  },
  submitHandler:function (e){
      
  }
});
        $('#contact').submit(function(e) {
            e.preventDefault();
            let formData = $(this);

                if(formData.valid()){
                    let serializeForm = formData.serialize();
            formData.find('input').attr('disabled','')
            formData.find('textarea').attr('disabled','')
            $.ajax({
                url: "{{ route('contact.store') }}",
                method: 'POST',
                data: serializeForm,
                success: function(response) {
                    if(response.send){

                    }
                    formData[0].reset();
                    formData.find('input').removeAttr('disabled','')
            formData.find('textarea').removeAttr('disabled','')

                    toastr.success("thank you we will contact you");
                },
                error: function(err) {
                    let errors = err.message;
                    // if(.length > 0){

                    // }
                    console.log(errors);
                }
            });
                }


        });
    </script>