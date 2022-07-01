
$(document).ready(function () {
    $(function () {
        $("#referral").validate({
            onfocusout: false,
             rules: {
                heading: {
                    required: true,
                },
            },
            // Specify the validation error messages
            messages: {
          
                heading: {
                    required: '* Please enter heading.',
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