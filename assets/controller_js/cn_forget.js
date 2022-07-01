$(document).ready(function () {
    $(function () {
        $("#sendMailForForgetPassword").validate({
            onfocusout: false,
            rules: {
                email: {
                    required: true,
                    email: true,
                    remote: $("#base_url").val() + "check_email_for_forget",
                },
            },
            // Specify the validation error messages
            messages: {
                email: {
                    required: "* Please enter user name.",
                    remote: "* This email id is not registered.",
                },
            },
            submitHandler: function (form) {
                $(".submit").text("Please wait..");
                $(".submit").attr("disabled", true);
                
                form.submit();
                // var facebook_link = $('#facebook_link').val();
                // if(facebook_link!='' && !fb_regex.test(facebook_link)){
                //      $('#facebook_link_error').html('Enter valid facebook profile url.');
                // }else {
                //     form.submit();
                // }
            },
        });
    });
});

$(document).ready(function () {
    $(function () {
        $("#otpVerifyForm").validate({
            onfocusout: false,
            rules: {
                otp: {
                    required: true,
                    number: true,
                },
            },
            // Specify the validation error messages
            messages: {
                otp: {
                    required: "* Please enter otp.",
                },
            },
            submitHandler: function (form) {
                $(".submit").text("Please wait..");
                $(".submit").attr("disabled", true);
                
                form.submit();
                // var facebook_link = $('#facebook_link').val();
                // if(facebook_link!='' && !fb_regex.test(facebook_link)){
                //      $('#facebook_link_error').html('Enter valid facebook profile url.');
                // }else {
                //     form.submit();
                // }
            },
        });
    });
});

$(document).ready(function () {
    $(function () {
        /*[start::check old password is same or not]*/
        $.validator.addMethod(
            "chkNewCnfPass",
            function (value, element) {
                var pass = $("#new_password").val();
                if ($("#confirm_password").val() != "" && pass != "") {
                    return $("#confirm_password").val() == pass;
                } else {
                    return true;
                }
            },
            "* New and confirm password must be same."
            );
            /*[end::check old password is same or not]*/
            $("#resetPasswordForm").validate({
                onfocusout: false,
                rules: {
                    new_password: {
                        required: true,
                        // minlength: 6,
                        // maxlength: 20,
                    },
                    confirm_password: {
                        required: true,
                        chkNewCnfPass: true,
                        // minlength: 6,
                        // maxlength: 20,
                    },
                },
                // Specify the validation error messages
                messages: {
                    new_password: {
                        required: "* Please enter new password.",
                        // minlength: "* Please enter atleast 6 characters.",
                        // maxlength: "* Please enter only 20 characters.",
                    },
                    confirm_password: {
                        required: "* Please enter confirm password.",
                        // minlength: "* Please enter atleast 6 characters.",
                        // maxlength: "* Please enter only 20 characters.",
                    },
                },
                submitHandler: function (form) {
                    $(".submit").html(
                        "Please wait.. <i class='fa fa-spinner fa-spin'></i>"
                        );
                        $(".submit").attr("disabled", true);
                        
                        form.submit();
                        // var facebook_link = $('#facebook_link').val();
                        // if(facebook_link!='' && !fb_regex.test(facebook_link)){
                        //      $('#facebook_link_error').html('Enter valid facebook profile url.');
                        // }else {
                        //     form.submit();
                        // }
                    },
                });
            });
        });
        