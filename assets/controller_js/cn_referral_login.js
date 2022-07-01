
$(document).ready(function () {
    $(function () {
        $("#login_form").validate({
            onfocusout: false,
             rules: {
                email: {
                    required: true,

                    remote: {
                        url: "check-user-register",
                        type: "post",
                        data: {
                            email: function () {
                            return $("#email").val();
                          },                   
                        },
                        
                    },
                    // minlength: 10,
                    // maxlength: 10,
                },
                password: {
                    required: true,
                }
            },
            // Specify the validation error messages
            messages: {
          
                email: {
                    required: '* Please enter email.',
                    remote : '* This email is not register.'
                },
                password: {
                    required: '* Please enter password.',
                }
            },
            submitHandler: function (form) {
                $(".submit").text("Please wait..");
                $(".submit").attr("disabled", true);


               form.submit();
            }
        });
    });
});