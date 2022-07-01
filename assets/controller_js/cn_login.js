
$(document).ready(function () {
    $(function () {
        $("#login_form").validate({
            onfocusout: false,
             rules: {
                email: {
                    required: true,

                    remote: {
                        url:  $("#base_url").val() + "check-account-exits",
                        type: "post",
                        data: {
                            email: function () {
                            return $("#email").val();
                          },                 
                        },
                    },
                },
                password: {
                    required: true,
                }
            },
            // Specify the validation error messages
            messages: {         
                email: {
                    required: '* Please enter email.',
                    remote : '* Please enter valid email address.'
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