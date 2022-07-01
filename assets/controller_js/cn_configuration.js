
$(document).ready(function () {
    $(function () {
        $("#configuration").validate({
            onfocusout: false,
             rules: {
                referral_commission: {
                    required: true,
                },
                withdrawal_limit: {
                    required: true,
                }        
            },
            // Specify the validation error messages
            messages: {
          
                withdrawal_limit: {
                    required: '* Please enter withdrawal limit.',
                },
                referral_commission: {
                    required: '* Please enter referral commission.',
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