
$(document).ready(function () {
    $(function () {
        $("#bank_details_form").validate({
            onfocusout: false,
             rules: {
                bank_name: {
                    required: true,
                },
                acc_no: {
                    required: true,
                },
                ifsc: {
                    required: true,
                },
                branch: {
                    required: true,
                },
                UPI_id: {
                    required: true,
                },
            },
            // Specify the validation error messages
            messages: {
          
                bank_name: {
                    required: '* Please enter bank name.',
                },
                acc_no: {
                    required: '* Please enter account number.',
                },
                ifsc: {
                    required: '* Please enter ifsc code.',
                },
                branch: {
                    required: '* Please enter branch name.',
                },
                UPI_id: {
                    required: '* Please enter upi id.',
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

$("#UPI_id").keyup(function () { 
    var UPI_id =  $("#UPI_id").val();

    if(UPI_id != ''){
        $('.error').empty();
        $('#branch').rules('remove','required');
        $('#ifsc').rules('remove','required');
        $('#acc_no').rules('remove','required');
        $('#bank_name').rules('remove','required');
    }
})

$("#branch").keyup(function () { 
    var branch =  $("#branch").val();

    if(branch != ''){
        $('#UPI_id').rules('remove','required');
    }
});

$("#ifsc").keyup(function () { 
    var ifsc =  $("#ifsc").val();

    if(ifsc != ''){
        $('#UPI_id').rules('remove','required');
    }
});

$("#acc_no").keyup(function () { 
    var acc_no =  $("#acc_no").val();

    if(acc_no != ''){
        $('#UPI_id').rules('remove','required');
    }
});

$("#bank_name").keyup(function () { 
    var bank_name =  $("#bank_name").val();

    if(bank_name != ''){
        $('#UPI_id').rules('remove','required');
    }
});