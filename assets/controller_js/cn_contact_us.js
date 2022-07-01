
$(document).ready(function () {
    $(function () {
        $("#sendMailForContactUs").validate({
            onfocusout: false,
             rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email:true,                
                },
                mobile_number: {
                    required: true,
                },
                location: {
                    required: true,
                },
                message: {
                    required: true,
                },
                popup_2: {
                    required: true,
                },
            },
            // Specify the validation error messages
            messages: {
          
                name: {
                    required: '* Please enter name.',
                },
                email: {
                    required: '* Please enter email.',
                    remote : '* Please enter valid email.'
                },
                mobile_number: {
                    required: '* Please enter mobile number.',
                },
                location: {
                    required: '* Please enter location.',
                },
                message: {
                    required: '* Please enter description.',
                },
            },
            submitHandler: function (form) {
                $(".submit").text("Please wait..");
                $(".submit").attr("disabled", true);


               form.submit();
            }
        });
    });
});