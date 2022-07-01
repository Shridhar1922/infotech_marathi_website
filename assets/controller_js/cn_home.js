
$(document).ready(function () {
    $(function () {
        $("#home").validate({
            onfocusout: false,
             rules: {
                animated_heading_1: {
                    required: true,
                },
                button_1: {
                    required: true,
                },
                button_2: {
                    required: true,
                },
                sub_heading: {
                    required: true,
                },
                popup_1: {
                    required: true,
                },
                popup_2: {
                    required: true,
                },
            },
            // Specify the validation error messages
            messages: {
          
                animated_heading_1: {
                    required: '* Please enter animated heading.',
                },
                button_1: {
                    required: '* Please enter button 1 heading.',
                },
                button_2: {
                    required: '* Please enter button 2 heading.',
                },
                sub_heading: {
                    required: '* Please enter sub heading.',
                },
                popup_1: {
                    required: '* Please enter popup text 1 heading.',
                },
                popup_2: {
                    required: '* Please enter  popup text 2 heading.',
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