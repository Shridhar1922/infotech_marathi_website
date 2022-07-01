$(document).ready(function () {
    $(function () {
        $("#forgot_form").validate({
            onfocusout: false,
            rules: {
                email: {
                    required: true,
                    email: true,
                    remote: $("#base_url").val() + "check-duplicate-email",
                },
            },
            // Specify the validation error messages
            messages: {
                email: {
                    required: "* Please enter email.",
                    remote: "* This email-id is not registered.",
                },
            },
            submitHandler: function (form) {
                $(".submit").text("Please wait..");
                $(".submit").attr("disabled", true);
                
                form.submit();

            },
        });
    });
});
