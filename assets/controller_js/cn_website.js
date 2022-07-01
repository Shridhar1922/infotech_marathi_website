// First button Join on Click event
$(document).ready(function () {
    $("#city_error").hide();
    $(".btn_loader_view").css('display', 'none');
    $("#mobile_number-error").hide();
    $('#goto_link_click').hide(100);
    $('#alert').hide(100);
    var mobile_number = $('#mobile_number').val();
    if (mobile_number == '') {
        //  $("#btnredirect").attr("disabled", true);
        $("#join_on").attr("disabled", false);
    } else {
        $("#btnredirect").attr("disabled", false);
        $("#join_on").attr("disabled", true);
        $(".otp").attr("disabled", true);
        $('#goto_link_click').show(100);
        $('#confirm').attr("disabled",true);
        $('#alert').show(100);
    }
    $("#join_on").on('click',function(){
        var city = $('#city').val();
        var mobile_number = $('#mobile_number').val();
        $("#mobile_number-error").hide();
        if (city == '') {
            $('#city_error').show();
            $("#city_error").html('* जिल्हा निवडा.');
        } 
        if (mobile_number == '') {
            $('#mobile_number-error').show();
            $("#mobile_number-error").html('* तुमचा 10 अंकी WhatsApp क्रमांक.');
        } 
        if(mobile_number != '' && city != '') {
    
            var mob_regex = /^[789]\d{9}$/;
            if (!mob_regex.test(mobile_number)) {
                $("#mobile_number-error").show();
                $("#mobile_number-error").html("* तुमचा 10 अंकी WhatsApp क्रमांक.");
                $("#join_on").attr("disabled", false);
            }else{
                $.ajax({
                    url: $('#base_url').val() + 'add-number',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        city: city,
                        mobile_number: mobile_number,
                    },
                    beforeSend: function() {},
                    success: function(data) {
                        if (data.status == "true") {
                            $(".button_text_loader").hide();
                            $(".btn_loader_view").css('display', 'block');
                            window.location.href = data.link;
                            
                            setInterval(() => {
                                $("#btnredirect").attr("disabled", false);
                                    $("#join_on").attr("disabled", true);
                                    $('#goto_link_click').show(100);
                                    $("#goto_link_click").attr("href", data.link);
                                    $('#alert').show(100);
                                    $(".btn_loader_view").css('display', 'none');
                                    $(".button_text_loader").show();
                            }, 5000);
                           
                            // $('#staticBackdrop').modal('show'); 
                            // $('#staticBackdrop .modal-dialog').addClass('bounceIn animated');     
                            // $(".link").attr('href',data.link);
                            $(".btnredirect_link").attr('href',data.join_link);
                        }else if(data.status == "false"){
                            $('#goto_link_click').hide(100);
                            $('#alert').hide(100);            
                        }
                    }
                });     
            }    
        } 
    });
});

$('#mobile_number').on('keyup', function(e) {
    var city = $('#city').val();
    var mobile_number = $('#mobile_number').val();
    $('#mobile_number-error').hide();
    if (city == '') {
        $('#city_error').show();
        $("#city_error").html('* जिल्हा निवडा.');
        $('#mobile_number').val('');
    }
    if (mobile_number == '') {
        $('#mobile_number-error').hide();
        $("#city_error").hide();
                    
    }
    if(mobile_number != '' && city != '') {
        $("#city_error").hide();
        $.ajax({
            url: $('#base_url').val() + 'get-district-whatsapp-data',
            type: 'POST',
            dataType: 'json',
            data: {
                city: city,
                mobile_number: mobile_number,
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == "true") {
                    // $('#goto_link_click').show(100);
                    // $('#city_error').empty();
                    // $('#city_error').hide();
                    // $('#alert').show(100);
                    // $('#join_on').attr("disabled",true);
                    // $('#mobile_number-error').hide();
                    $.ajax({
                        url: $('#base_url').val() + 'check-number',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            city: city,
                            mobile_number: mobile_number,
                        },
                        beforeSend: function() {},
                        success: function(data) {
                            if (data.status == "true") {
                                $('#goto_link_click').show(100);
                                $("#goto_link_click").attr("href", data.link);
                                $('#mobile_number-error').empty();
                                $('#mobile_number-error').hide();
                                $("#city_error").empty();
                                $("#city_error").hide();
                                $('#alert').show(100);
                                $('#join_on').attr("disabled",true);
                                $("#btnredirect").attr("disabled", false);
                                $(".otp").attr("disabled",true);
                              
                            }
                            if (data.status == "false") {
                                $("#join_on").attr("disabled", true);
                                $("#btnredirect").attr("disabled", true);
                                $("#city_error").empty();
                                $("#city_error").hide();
                                $(".otp").attr("disabled",true);

                                //   if(mobile_number == ''){
                                //     $('#mobile_number-error').hide();
                                //   }else{                 
                                    $('#mobile_number-error').show();
                                    $('#mobile_number-error').html("* This number is already registered with different district.");
                                //   }
                               
                                $('#goto_link_click').hide(100);
                                $('#alert').hide(100);
                            }
                        }
                    });
                    
                }
                if (data.status == "false") {
                    $("#join_on").attr("disabled", false);
                    $("#btnredirect").attr("disabled", false);
                    $(".otp").attr("disabled",false );
                    // $('#mobile_number-error').show();
                    // $('#mobile_number-error').html("* This number is already registered with different district.");
                    $('#goto_link_click').hide(100);
                    $('#alert').hide(100);
                }
            }
        });
    }
});

$('#city').on('change', function() {
    var city = $('#city').val();
    var mobile_number = $('#mobile_number').val();
    if (city == '') {
        $('#city_error').show();
        $("#city_error").html('* जिल्हा निवडा.');
        $('#mobile_number').val('');
    }
    if(mobile_number == ''){
        $('#mobile_number-error').show();
        $("#city_error").hide();
    }

    if(mobile_number != '' && city != '') {
        $("#city_error").hide();
        $.ajax({
            url: $('#base_url').val() + 'check-number',
            type: 'POST',
            dataType: 'json',
            data: {
                city: city,
                mobile_number: mobile_number,
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == "true") {
                    $('#goto_link_click').show(100);
                    $(".link_url").attr('href',data.url);
                    $('#mobile_number-error').empty();
                    $('#mobile_number-error').hide();
                    $("#city_error").empty();
                    $("#city_error").hide();
                    $('#alert').show(100);
                    $('#join_on').attr("disabled",true);
                    $("#btnredirect").attr("disabled", false);
                    $(".otp").attr("disabled",true);
                    $.ajax({
                        url: $('#base_url').val() + 'get-district-whatsapp-data',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            city: city,
                            mobile_number: mobile_number,
                        },
                        beforeSend: function() {},
                        success: function(data) {
                            if (data.status == "true") {
                                $('#goto_link_click').show(100);
                                $("#goto_link_click").attr("href", data.link);
                                $('#mobile_number-error').empty();
                                $('#mobile_number-error').hide();
                                $("#city_error").empty();
                                $("#city_error").hide();
                                $('#alert').show(100);
                                $('#join_on').attr("disabled",true);
                              
                            }
                            if (data.status == "false") {
                                $("#join_on").attr("disabled", false);
                                $("#city_error").empty();
                                $("#city_error").hide();
                                //   if(mobile_number == ''){
                                //     $('#mobile_number-error').hide();
                                //   }else{                 
                                    // $('#mobile_number-error').show();
                                    // $('#mobile_number-error').html("* This number is already registered with different district.");
                                //   }
                               
                                $('#goto_link_click').hide(100);
                                $('#alert').hide(100);
                            }
                        }
                    });
                  
                }
                if (data.status == "false") {
                    $("#join_on").attr("disabled", true);
                    $("#btnredirect").attr("disabled", true);
                    $("#city_error").hide();
                    $(".otp").attr("disabled",true);

                    $.ajax({
                        url: $('#base_url').val() + 'get-district-whatsapp-data',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            city: city,
                            mobile_number: mobile_number,
                        },
                        beforeSend: function() {},
                        success: function(data) {
                            if (data.status == "true") {
                                // $('#goto_link_click').show(100);
                                // $('#mobile_number-error').empty();
                                // $('#mobile_number-error').hide();
                                // $("#city_error").empty();
                                // $("#city_error").hide();
                                // $('#alert').show(100);
                                // $('#join_on').attr("disabled",true);
                                
                                $('#mobile_number-error').show();
                                $('#mobile_number-error').html("* This number is already registered with different district.");
                              
                            }
                            if (data.status == "false") {
                                $("#join_on").attr("disabled", false);
                                $("#btnredirect").attr("disabled", false);
                                $("#city_error").hide();
                                $(".otp").attr("disabled",false);
                                // $("#mobile_number-error").hide();
                                
                                $('#goto_link_click').hide(100);
                                $('#alert').hide(100);
                            }
                        }
                    });                   

                }
            }
        });
    }
});


$('#btnredirect').on('click', function() {
    var city = $('#city').val();
    var mobile_number = $('#mobile_number').val();
    if (city == '') {
        $('#city_error').show();
        $("#city_error").html('* जिल्हा निवडा.');
    } 
    if (mobile_number == '') {
        $('#mobile_number-error').show();
        $("#mobile_number-error").html('* तुमचा 10 अंकी WhatsApp क्रमांक.');
    } 
    if(mobile_number != '' && city != '') {

        $("#city_error").hide();
        $("#mobile_number-error").hide();
        var mob_regex = /^[789]\d{9}$/;
        if (!mob_regex.test(mobile_number)) {
            $("#mobile_number-error").show();
            $("#mobile_number-error").html("* तुमचा 10 अंकी WhatsApp क्रमांक.");
            $("#join_on").attr("disabled", false);
        }else{

            $.ajax({
                url: $('#base_url').val() + 'get-district-whatsapp-data',
                type: 'POST',
                dataType: 'json',
                data: {
                city: city,
                mobile_number: mobile_number,
                },
                beforeSend: function() {},
                success: function(data) {
                if (data.status == "true") {          
                    $('#alert').show(100);
                    $('#goto_link_click').show(100);
                    swal({
                        title: "Success!",
                        text: data.popup_2,
                        type: "success",
                        timer: 2000,
                        showConfirmButton: false
                      }, function(){
                            window.location.href = data.join_url;
                      });    
                    // $('#joinOn_popup').modal('show'); 
                    // $('#joinOn_popup .modal-dialog').addClass('bounceIn animated'); 
                }
                if (data.status == "false") {
                    $('#goto_link_click').hide(100);
                    $('#alert').hide(100);
                    $('#mobile_number-error').show();
                    $('#mobile_number-error').html("* कृपया क्रमांक सेव्ह करा . क्रमांक सेव्ह केल्याशिवाय जॉईन करता येत नाही.");
                }
                }
            });
        }
    }
});

//Otp Registration
$(document).ready(function () {
  $(".btn_loader_verify").css('display', 'none');
  $("#otp_session").hide(800);
  $("#verify").hide(800);
  $("#resend_otp").hide(800);

  $(".otp").click(function() {
    var city = $('#city').val();
    var mobile_number = $("#mobile_number").val();

    if (city == '') {
        $('#city_error').show();
        $("#city_error").html('* जिल्हा निवडा.');
    } 
    if (mobile_number == '') {
        $('#mobile_number-error').show();
        $("#mobile_number-error").html('* तुमचा 10 अंकी WhatsApp क्रमांक.');
    } 
    if(mobile_number != '' && city != '') {
        var mob_regex = /^[789]\d{9}$/;
        if (!mob_regex.test(mobile_number)) {
            $("#mobile_number-error").show();
            $("#mobile_number-error").html("* तुमचा 10 अंकी WhatsApp क्रमांक.");
            $("#join_on").attr("disabled", false);
        }else{

            $.ajax({
                url: $('#base_url').val() + 'check-duplicate-number',
                type: 'POST',
                dataType: 'json',
                data: {
                    mobile_number: mobile_number,
                },
                beforeSend: function() {
                },
                success: function(data) {
                if (data == false) {
                    document.getElementById('timer').innerHTML =
                    10 + ":" + 00;
                    startTimer();
                    $("#resend_link").attr("href","javascript:void(0)");
                    $("#otp_session").show(800);
                    $("#btnredirect").attr("disabled",true);
                    $("#resend_otp").show(800);
                    $("#verify").show(800);
                    $('.otp').hide(800);
                    $('#mobile_number-error').hide();
                } else if (data == true) {
                    $("#btnredirect").attr("disabled",true);
                    $('#mobile_number-error').show();
                    $('#mobile_number-error').html("* This number is already registered with different district.");
                }
                }
            });
        }
    }

  });


    function sum() {
        return otp = $("#value_1").val() + $("#value_2").val() + $("#value_3").val() + $("#value_4").val() + $("#value_5").val() + $("#value_6").val();
    }

  if ($('#referral_by').val() != '') {
    // $("#btnredirect").hide(800);
    $("#join_on").hide(800);
    $('#error-otp').hide('');
    $('#confirm').click(function() {
      var referral_by = $('#referral_by').val();
      var referral_name = $('#referral_name').val();
      var referral_city_id = $('#referral_city_id').val();
      var referral_tb_name = $('#referral_tb_name').val();
      var referral_user_id = $('#referral_user_id').val();
      var city = $('#city').val();
      var mobile_number = $("#mobile_number").val();
      $("#value_1, #value_2, #value_3, #value_4, #value_5, #value_6").on("keydown keyup", sum);


      var otp = sum();
      $.ajax({
        url: $('#base_url').val() + 'get-otp-verify',
        type: 'POST',
        dataType: 'json',
        data: {
          city: city,
          mobile_number: mobile_number,
          referral_by: referral_by,
          otp: otp,
          referral_user_id: referral_user_id,
          referral_tb_name: referral_tb_name,
          referral_city_id: referral_city_id,
          referral_name: referral_name,
        },
        beforeSend: function() {

        },
        success: function(data) {
          if (data.status == "true") {
            $(".verify_text_loader").hide();
            $(".btn_loader_verify").css('display', 'block');
            // window.location.href = data.link;
            $('#staticBackdrop').modal('show'); 
            $('#staticBackdrop .modal-dialog').addClass('bounceIn animated');     
            $(".link").attr('href',data.link);
            $("#timer").hide(800);
            $("#resend_link").hide(800);
            
            setInterval(() => {
                $("#btnredirect").attr("disabled",false);
                $("#otp_session").hide(800);
                $('#confirm').attr("disabled",true);

                $('#goto_link_click').show(100);
                $("#goto_link_click").attr("href", data.link);
                $('#alert').show(100);
                $(".btn_loader_verify").css('display', 'none');
                $(".verify_text_loader").show();
            }, 5000);

          } else if (data.status == "false") {
            $("#btnredirect").attr("disabled",true);
            $('#error-otp').show();  
            $('#confirm').attr("disabled",true);
            $('#error-otp').html("* Please enter correct OTP.");

            $('#otp_session').keyup(function() {
            $('#error-otp').hide('');
            });
          }
        }
      });
    });
  } else {
    $("#btnredirect").show(800);
    $("#join_on").show(800);
  }
});

$(document).ready(function () {
    var city = $('#city').val();
    var mobile_number = $('#mobile_number').val();
    $.ajax({
        url: $('#base_url').val() + 'get-join-url',
        type: 'POST',
        dataType: 'json',
        data: {
            city: city,
            mobile_number : mobile_number,
        },
        beforeSend: function() {

        },
        success: function(data) {
            $(".btnredirect_link").attr('href',data.link);
            $("#goto_link_click").attr("href", data.url);
        }
    });
});

function resend_otp(){
    var mobile_number = $("#mobile_number").val();

    $.ajax({
        url: $('#base_url').val() + 'check-duplicate-number',
        type: 'POST',
        dataType: 'json',
        data: {
            mobile_number: mobile_number,
        },
        beforeSend: function() {
        },
        success: function(data) {
            if (data == false) {
                document.getElementById('timer').innerHTML =
                10 + ":" + 00;
        
                startTimer();
                $("#resend_link").attr("href","javascript:void(0)");
                $("#resend_link").removeAttr("onclick",null);
                // $("#otp_session").show(800);
                // $("#btnredirect").attr("disabled",true);
                // $("#resend_otp").show(800);
                // $("#verify").show(800);
                // $('.otp').hide(800);
                $('#mobile_number-error').hide();
            } else if (data == true) {
                $("#btnredirect").attr("disabled",true);
                $('#mobile_number-error').show();
                $('#mobile_number-error').html("* This number is already registered with different district.");
            }
        }
    });

}