
$(document).ready(function () {
    $(function () {
        $("#city_form").validate({
            onfocusout: false,
             rules: {
                mobile_no: {
                    required: true,
                },
                email_id: {
                    required: true,
                    email: true,
                },
                whatsapp_url: {
                    required: true,
                },
                join_url: {
                    required: true,
                },
            },
            // Specify the validation error messages
            messages: {
          
                email_id: {
                    required: '* Please enter email.',
                },
                mobile_no: {
                    required: '* Please enter mobile number.',
                    minlength: '* Please enter 10 digit number.'
                },
                whatsapp_url: {
                    required: '* Please enter whatsapp url.',
                },
                join_url: {
                    required: '* Please enter join url.',
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