<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=PT+Serif&family=Rajdhani:wght@700&family=Saira&display=swap');

.cardbox {
    margin-bottom: 2.2rem;
    /* box-shadow: -8px 12px 18px 0 rgb(25 42 70 / 13%); */
    padding: 1rem;
    position: relative;
    background-color: #fff;
    border-radius: .5rem;
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
    margin-right: .5rem;
}

.avatar .avatar-content {
    width: 32px;
    height: 32px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.avatar {
    white-space: nowrap;
    background: rgba(90, 141, 238, 0.2) !important;
    border-radius: 50%;
    position: relative;
    cursor: pointer;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: inline-flex;
    font-size: 0.8rem;
    margin-right: 1.5rem !important;
    text-align: center;
    margin: 5px;
    padding: 0.25rem !important;
}

.reg_heading p {
    color: #495057;
    font-size: 20px;
    font-family: 'Rajdhani', sans-serif;
    font-weight: 500;
    border: 1px solid #4383b3;
    display: inline-block;
    padding: 0.2rem 1.5rem;
    background: #3682b3;
    color: #fff;
}

.avatar-content i {
    font-size: 1.2rem !important;
}

.total-amount h5 {
    font-size: 20px;
    font-weight: 600;
}

.total-amount span {
    font-size: 16px;
}

.main-banner a:hover {
    text-decoration: none;
}
</style>

<header class="sticky">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="<?= site_url() ?>" class="navbar-brand logo">
                <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['logo']) ? $visualSettings[0]['logo'] : 'assets/commonarea/dist/img/infotech-marathi-Logo-min.png'; ?>"
                    height="60px">
            </a>


            <div class="dropdown ">
                <button class="btn btn-main dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="dropdown-menu mobile-view" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= site_url('') ?>">Home</a>
                    <a class="dropdown-item" href="<?= site_url('about_us') ?>">About Us</a>
                    <a class="dropdown-item" href="<?= site_url('how_to_join') ?>">How to Join</a>
                    <a class="dropdown-item" href="<?= site_url('why_infotech_marathi') ?>">Why Infotech Marathi</a>
                    <a class="dropdown-item" href="<?= site_url('referral-login') ?>">Referral Partner</a>
                    <a class="dropdown-item" href="<?= site_url('contact_us') ?>">Contact Us</a>
                </div>
            </div>

            <!-- <div class="ml-auto mobile-view">
                <a href="<?= site_url('') ?>" class="pr-2 ">Home</a>
                <a href="<?= site_url('about_us') ?>" class="pr-2">About Us</a>
                <a href="<?= site_url('how_to_join') ?>" class="pr-2" target=_blank>How to Join</a>
            </div> -->
        </div>
    </nav>
</header>

<section class="bg-half-170 pt-30px pb-0 d-table w-100 main-banner"
    style="background: url(<?= site_url('assets/front_commonarea/'); ?>img/chat-background.jpg)">
    <div class="container">
        <!-- TEXT -->
        <div class="text-center mb-4 reg_heading">
            <p>
                Total Active Users: 3,90,585 </p>
            <!--<p>-->
            <!--    Total Active Users: <?= !empty($register_user_count[0]['count']) ? $register_user_count[0]['count'] : ''; ?> </p>-->
        </div> <!-- ends -->
        <div class="box-body no-height ">
            <!-- <div class="col-md-12 no-pad mb-15">
                <div class="genius-cap">
                    <p class="mb-0">By District</p>
                </div>
            </div> -->
            <div class="row no-gutters" style="margin-right: -15px;margin-left:-0.5rem">
                <?php if (!empty($city)) {
                    foreach ($city as $keys => $value) { ?>
                <div class="col-md-3 col-6">

                    <div class="cardbox d-flex align-items-center">

                        <div class="cardboxbody"><a href="javascript:;" class="d-flex align-items-center">
                                <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                    <div class="avatar-content">
                                        <i class="fa fa-building-o"></i>
                                    </div>
                                </div>
                                <div class="total-amount">
                                    <h5 class="mb-0"><?= $value['count']; ?></h5>
                                    <span class="text-muted"><?= $value['city']; ?></span>
                                </div>
                            </a>

                            <input type="hidden" id="city_id" value="">
                            <!-- 
                                 <input type="hidden" id="city_id" value="1"> -->
                        </div>
                    </div>

                </div>
                <?php }
                } ?>
            </div>

</section>





<script src="<?= site_url('assets/front_commonarea/'); ?>js/sweetalert.min.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/aos.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/typed.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>

<script>
AOS.init();
</script>

<script>
$("#city").change(function() {
    if ($(this).val() == 0) {
        $(this).parent().find(".fa-map-marker").css("color", "black");
    } else {
        $(this).parent().find(".fa-map-marker").css("color", "red");
    }
});

$("#mobile_number").keyup(function() {
    var num_length = $("#mobile_number").val().length;
    if (num_length == 10) {
        $("#mobile_number").parent().find(".fa-whatsapp").css("color", "#45c455");
    }
    if (num_length < 10) {
        $("#mobile_number").parent().find(".fa-whatsapp").css("color", "#000000");
    }
});
</script>
<script src="<?php echo base_url(); ?>assets/controller_js/cn_website.js"></script>
<script>
$(".element").each(function() {
    var $this = $(this);
    $this.typed({
        strings: $this.attr("data-elements").split(","),
        typeSpeed: 10, // typing speed
        backDelay: 3000, // pause before backspacing
    });
});
</script>
<!-- <script>
var btnsa3 = document.getElementById('btnsa3');
// btnsa3.onclick = function() {
//     swal("", "<?php echo !empty($home[0]['popup_2']) ? $home[0]['popup_2'] : ''; ?>", "success").then(function() {
//     window.location = "https://wa.link/mljbrs";
// });


// btnsa3.onclick = function() {
//     swal({
//   title: "Success!",
//   text: "<?php echo !empty($home[0]['popup_2']) ? $home[0]['popup_2'] : ''; ?>",
//   type: "success",
//   timer: 2000,
//   showConfirmButton: false
// }, function(){
//       window.location.href = "//stackoverflow.com";
// });    
// };

</script> -->
<script>
var value_heading = $('#value_heading').val();
var tot_word = 9 - value_heading;
var animation_time = 0 + (tot_word * 2);
$('.word').addClass("word" + animation_time);
</script>

<!-- OTP Script -->
<script>
function handlePasteOTP(e) {
    var clipboardData = e.clipboardData || window.clipboardData || e.originalEvent.clipboardData;
    var pastedData = clipboardData.getData('Text');
    var arrayOfText = pastedData.toString().split('');
    /* for number only */
    if (isNaN(parseInt(pastedData, 10))) {
        e.preventDefault();
        return;
    }
    for (var i = 0; i < arrayOfText.length; i++) {
        if (i >= 0) {
            document.getElementById('otp-number-input-' + (i + 1)).value = arrayOfText[i];
        } else {
            return;
        }
    }
    e.preventDefault();
}

$(document).ready(function() {
    $('.otp-event').each(function() {
        var $input = $(this).find('.otp-number-input');
        var $submit = $(this).find('.otp-submit');
        $input.keydown(function(ev) {
            otp_val = $(this).val();
            if (ev.keyCode == 37) {
                $(this).prev().focus();
                ev.preventDefault();
            } else if (ev.keyCode == 39) {
                $(this).next().focus();
                ev.preventDefault();
            } else if (otp_val.length == 1 && ev.keyCode != 8 && ev.keyCode != 46) {
                otp_next_number = $(this).next();
                if (otp_next_number.length == 1 && otp_next_number.val().length == 0) {
                    otp_next_number.focus();
                }
            } else if (otp_val.length == 0 && ev.keyCode == 8) {
                $(this).prev().val("");
                $(this).prev().focus();
            } else if (otp_val.length == 1 && ev.keyCode == 8) {
                $(this).val("");
            } else if (otp_val.length == 0 && ev.keyCode == 46) {
                next_input = $(this).next();
                next_input.val("");
                while (next_input.next().length > 0) {
                    next_input.val(next_input.next().val());
                    next_input = next_input.next();
                    if (next_input.next().length == 0) {
                        next_input.val("");
                        break;
                    }
                }
            }

        }).focus(function() {
            $(this).select();
            var otp_val = $(this).prev().val();
            if (otp_val === "") {
                $(this).prev().focus();
            } else if ($(this).next().val()) {
                $(this).next().focus();
            }
        }).keyup(function(ev) {
            otpCodeTemp = "";
            $input.each(function(i) {
                if ($(this).val().length != 0) {
                    $(this).addClass('otp-filled-active');
                } else {
                    $(this).removeClass('otp-filled-active');
                }
                otpCodeTemp += $(this).val();
            });
            if ($(this).val().length == 1 && ev.keyCode != 37 && ev.keyCode != 39) {
                $(this).next().focus();
                ev.preventDefault();
            }
            $input.each(function(i) {
                if ($(this).val() != '') {
                    $submit.prop('disabled', false);
                } else {
                    $submit.prop('disabled', true);
                }
            });

        });
        $input.on("paste", function(e) {
            window.handlePasteOTP(e);
        });
    });

});
</script>
<script>
function startTimer() {
    var presentTime = document.getElementById('timer').innerHTML;
    var timeArray = presentTime.split(/[:]+/);
    var m = timeArray[0];
    var s = checkSecond((timeArray[1] - 1));
    if (s == 59) {
        m = m - 1
    }
    if (m < 0) {
        $("#resend_link").attr("onclick", "resend_otp()");
        return
    }

    document.getElementById('timer').innerHTML =
        m + ":" + s;
    console.log(m)
    setTimeout(startTimer, 1000);

}

function checkSecond(sec) {
    if (sec < 10 && sec >= 0) {
        sec = "0" + sec
    }; // add zero in front of numbers < 10
    if (sec < 0) {
        sec = "59"
    };
    return sec;
}
</script>
<script>
$(document).ready(function() {
    $('#footer_page').hide();
});
</script>
<footer class="f_pages_hide">
    <!-- <p class="para-desc mx-auto text-muted mt-1 text-center footer-link-col" style="margin-bottom: 0px !important">
        <a href="<?= site_url('terms_and_conditions') ?>">Terms & Conditions</a>
    </p> -->
    <p class="para-desc mx-auto text-muted mt-1 text-center font-jaldi-bold" style="margin-bottom: 0px !important">
        स्क्रोलअप वर जाहिरात करण्यासाठी संपर्क - <a href="<?= site_url('contact_us') ?>"> Contact Us</a>
    </p>
    <p class="para-desc mx-auto text-muted mt-1 text-center font-jaldi-bold" style="margin-bottom: 0px !important">
        ©<script type="text/javascript">
        var year = new Date();
        document.write(year.getFullYear());
        </script> Infotech Marathi. All Rights Reserved
    </p>
</footer>