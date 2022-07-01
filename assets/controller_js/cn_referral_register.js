
$(document).ready(function () {
    $(function () {
        $("#referral_registerform").validate({
            onfocusout: false,
             rules: {
                mobile_number: {
                    required: true,

                    remote: {
                        url: "check-number-register",
                        type: "post",
                        data: {
                            mobile_number: function () {
                            return $("#mobile_number").val();
                          },                
                        },
                        
                    },
                    minlength: 10,
                    maxlength: 10,
                },
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                },
                city: {
                    required: true,
                }
            },
            // Specify the validation error messages
            messages: {
                mobile_number: {
                    required: '* Please enter mobile number',
                    remote: "* This number is not register.",
                },
                name: {
                    required: '* Please enter name.',
                },
                email: {
                    required: '* Please enter email.',
                },
                password: {
                    required: '* Please enter password.',
                },
                city: {
                    required: '* Please select city.',
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