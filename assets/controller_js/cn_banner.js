$(document).ready(function () {
    $(function () {
      // this will validate the state
      $("#banner_form").validate({
        onfocusout: false,
        rules: {
          banner_img: {
            required: true,
            accept: "png,jpeg,jpg,gif,bmp",
          }
        },
        // Specify the validation error messages
        messages: {
          banner_img: {
            required: "* Please select banner image.",
            accept: "* Please upload png|jpeg|jpg photo only.",
          },
        },
        submitHandler: function (form) {
          $(".submit").html(
            "Please wait.. <i class='fa fa-spinner fa-spin'></i>"
          );
          $(".submit").attr("disabled", true);
          form.submit();
        },
      });
    });
  });