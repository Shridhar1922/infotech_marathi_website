
$(document).ready(function () {
    $(function () {
        $("#filter_form").validate({
            onfocusout: false,
             rules: {
                city_id: {
                    required: true,
                }   
            },
            // Specify the validation error messages
            messages: {
          
                city_id: {
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