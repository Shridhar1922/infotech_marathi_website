<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
/* @import url('https://fonts.googleapis.com/css2?family=PT+Serif&family=Rajdhani:wght@500&family=Saira&display=swap'); */
@import url('https://fonts.googleapis.com/css2?family=PT+Serif&family=Rajdhani:wght@700&family=Saira&display=swap');

.sub-btn {
    padding-bottom: 20px;
}

.btn_loader_view {
    display: none;
}

.sweet-alert p {
    font-size: 18px;
}

.sweet-alert button {
    color: #fff;
    background-color: #0062cc !important;
    border-color: #005cbf !important;
}

.success-msg {
    padding: 20px 50px;
}

.cus-btn-success {
    font-size: 17px;
    font-weight: 500;
    border-radius: 5px;
    padding: 10px 32px;
}

.modal-dialog {
    margin-top: 9.75rem !important;
}

.morphing {
    position: relative;
    font-size: 30px;
    /* background-color: #000; */
    color: #ec6402;
    min-height: 80px;
    /* filter: contrast(25) blur(1px); */
}

.word {
    position: absolute;
    font-family: "Vesper Libre", serif;
    font-weight: 600;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

}

.word20 {
    -webkit-animation: word 20s infinite ease-in-out;
    animation: word 20s infinite ease-in-out;
}

.word18 {
    -webkit-animation: word 18s infinite ease-in-out;
    animation: word 18s infinite ease-in-out;
}

.word16 {
    -webkit-animation: word 16s infinite ease-in-out;
    animation: word 16s infinite ease-in-out;
}

.word14 {
    -webkit-animation: word 14s infinite ease-in-out;
    animation: word 14s infinite ease-in-out;
}

.word12 {
    -webkit-animation: word 12s infinite ease-in-out;
    animation: word 12s infinite ease-in-out;
}

.word10 {
    -webkit-animation: word 10s infinite ease-in-out;
    animation: word 10s infinite ease-in-out;
}

.word8 {
    -webkit-animation: word 8s infinite ease-in-out;
    animation: word 8s infinite ease-in-out;
}

.word6 {
    -webkit-animation: word 6s infinite ease-in-out;
    animation: word 6s infinite ease-in-out;
}

/* label.error{
      display: none;
  } */


@-webkit-keyframes word {

    0%,
    5%,
    100% {
        filter: blur(0px);
        opacity: 1;
    }

    20%,
    80% {
        filter: blur(1em);
        opacity: 0;
    }
}

@keyframes word {

    0%,
    5%,
    100% {
        filter: blur(0px);
        opacity: 1;
    }

    20%,
    80% {
        filter: blur(1em);
        opacity: 0;
    }
}

.modal.fade {
    opacity: 1;
}

.modal-backdrop.fade {
    opacity: 1;
    background: #00000085;
}

.modal.fade .modal-dialog {
    margin: 0px !important;
    -webkit-transform: translate(0);
    -moz-transform: translate(0);
    transform: translate(0);
    padding: 0px 10px;
}

/* STATS */
.stats {
    text-align: center;
    font-size: 38px;
    box-shadow: rgb(0 0 0 / 20%) 0px 0px 5px;
    display: inline-block;
    padding: 1.3rem 2rem;
    padding-bottom: 1px;
    border-radius: 0.5rem;
    font-family: 'Rajdhani', sans-serif;
    color: #6c757d;
    background: #fcfcfc;
    margin-top: 1rem;
    padding-top: 13px;
}

.counting,
.counting h5 {
    font-weight: 500;
}


.fa-users {
    color: #3682b3;
}


.stats .btn {
    padding: .25rem 1.5rem;
    font-size: .875rem;
}


.fa-users {
    color: #3682b3;
}

@media only screen and (max-width: 600px) {

    .avatar {
        padding: 0px !important;
    }
}
</style>

<header class="sticky">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="<?= site_url() ?>" class="navbar-brand logo">
                <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['logo']) ? $visualSettings[0]['logo'] : 'assets/commonarea/dist/img/Scrolup-Logo.png'; ?>"
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
        <div class="text-center p-2">
            <p style="color: #495057;font-family: 'Sahitya', serif;">
                Infotech Marathi provides authentic Magazine in Marathi, Marathi Digital Magazine, Marathi News on
                WhatsApp, Free digital newspaper & Free digital magazine.
            </p>
        </div> <!-- ends -->
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-lg-7">
                <div class="title-heading text-center mb-md-5 mb-3">
                    <h3 class="heading mb-2">
                        <span class="sublines"><span class="font-laila-bold">आता तुमच्या</span>
                            <span class="font-martel-sans-black" style="color: #25d366">
                                <img src="<?= site_url('assets/front_commonarea/'); ?>img/walogo.png" class="logowa"
                                    alt="" />WhatsApp</span>
                            <span class="font-laila-bold">वर मिळवा</span></span>
                    </h3>

                    <div class="morphing">
                        <?php $count_heading = 0; ?>
                        <?php if (!empty($home[0]['animated_heading_1'])) { ?><div class="word"
                            style="animation-delay: -4s; -webkit-animation-delay: -4s;">
                            <?php echo !empty($home[0]['animated_heading_1']) ? $home[0]['animated_heading_1'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                } ?>
                        <?php if (!empty($home[0]['animated_heading_2'])) { ?><div class="word"
                            style="animation-delay: -6s; -webkit-animation-delay: -6s">
                            <?php echo !empty($home[0]['animated_heading_2']) ? $home[0]['animated_heading_2'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                } ?>
                        <?php if (!empty($home[0]['animated_heading_3'])) { ?><div class="word"
                            style="animation-delay: -8s; -webkit-animation-delay: -8s">
                            <?php echo !empty($home[0]['animated_heading_3']) ? $home[0]['animated_heading_3'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                } ?>
                        <?php if (!empty($home[0]['animated_heading_4'])) { ?><div class="word"
                            style="animation-delay: -10s; -webkit-animation-delay: -10s">
                            <?php echo !empty($home[0]['animated_heading_4']) ? $home[0]['animated_heading_4'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                }  ?>
                        <?php if (!empty($home[0]['animated_heading_5'])) { ?><div class="word"
                            style="animation-delay: -12s; -webkit-animation-delay: -12s">
                            <?php echo !empty($home[0]['animated_heading_5']) ? $home[0]['animated_heading_5'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                }  ?>
                        <?php if (!empty($home[0]['animated_heading_6'])) { ?><div class="word"
                            style="animation-delay: -14s; -webkit-animation-delay: -14s">
                            <?php echo !empty($home[0]['animated_heading_6']) ? $home[0]['animated_heading_6'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                }  ?>
                        <?php if (!empty($home[0]['animated_heading_7'])) { ?><div class="word"
                            style="animation-delay: -16s; -webkit-animation-delay: -16s">
                            <?php echo !empty($home[0]['animated_heading_7']) ? $home[0]['animated_heading_7'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                }  ?>
                        <?php if (!empty($home[0]['animated_heading_8'])) { ?><div class="word"
                            style="animation-delay: -18s;-webkit-animation-delay: -18s">
                            <?php echo !empty($home[0]['animated_heading_8']) ? $home[0]['animated_heading_8'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                }  ?>
                        <?php if (!empty($home[0]['animated_heading_9'])) { ?><div class="word"
                            style="animation-delay: -20s; -webkit-animation-delay: -20s">
                            <?php echo !empty($home[0]['animated_heading_9']) ? $home[0]['animated_heading_9'] : ''; ?>
                        </div><?php } else {
                                    $count_heading = $count_heading + 1;
                                }  ?>
                    </div>
                    <input type="hidden" id="value_heading" value="<?php echo $count_heading; ?>">
                    <div class="form-heading font-laila-bold mob-show" style="padding-bottom:0px">
                        <p style="margin-bottom:0px">
                            अगदी Free मिळवण्यासाठी खालील माहिती भरा
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
                <div class="stats">
                    <h5 style="margin-bottom: 0px;">Total Active Users</h5>
                    <!--<div class="counting" style="margin-bottom: -13px;"><?= !empty($register_user_count[0]['count']) ? $register_user_count[0]['count'] : ''; ?></div>-->
                    <div class="counting" style="margin-bottom: -13px;">390585</div>
                    <a href="<?= site_url('view-registered-users') ?>" target="_blank" type="button"
                        style="font-family: 'laila', serif;" class="btn btn-primary btn-sm"> View</a>
                </div>
            </div>
            <div class="col-lg-5 cus-mob-pad" style="padding: 40px 20px">
                <div class="form-box">
                    <div class="row align-items-center">
                        <div class="col-md-12 mt-sm-0">
                            <div class="form-heading font-laila-bold mob-hide">
                                <p><?php echo !empty($home[0]['sub_heading']) ? $home[0]['sub_heading'] : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-12 mt-sm-0">
                            <div class="form-group mb-4" style="margin-bottom: 32px !important;">
                                <span class="input-icon"><i class="fa fa-map-marker"></i></span>
                                <select class="form-control font-sahitya-bold custom-select" name="city" id="city">
                                    <option value="">जिल्हा निवडा</option>
                                    <?php if (!empty($city)) : ?>
                                    <?php foreach ($city as $key => $value) : ?>
                                    <option value="<?php echo $value['city_id']; ?>">
                                        <?php echo ucwords($value['city']); ?></option>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </select>
                                <label id="city_error" class="error"></label>
                            </div>
                            <input type="hidden" id="form_validation" value="<?php echo $form_validation ?>">
                        </div>
                        <!--end col-->
                        <div class="col-md-12 mt-sm-0">
                            <div class="form-group mb-4" style="margin-bottom: 32px !important;">
                                <span class="input-icon"><i class="fa fa-whatsapp"></i></span>
                                <input type="hidden" name="txtpkey" id="txtpkey"
                                    value="<?php echo !empty($register_user[0]['user_id']) ? $register_user[0]['user_id'] : ''; ?>">
                                <input type="tel" onkeyup="this.value=this.value.replace(/[^\d]/,'')"
                                    class="form-control font-sahitya-bold isInteger" name="mobile_number" maxlength="10"
                                    minlength="10" placeholder="तुमचा 10 अंकी WhatsApp क्रमांक" id="mobile_number" />
                                <label id="mobile_number-error" class="error"></label>
                            </div>
                        </div>
                        <!--end col-->

                        <div id="alert" class="font-laila-bold form-heading no-pad">
                            <p> Your Number Is Registered <a href="" class="link_url" id="goto_link_click">Click Here To
                                    Save Number</a>.</p>
                        </div>

                        <!-- <div id="btnsa3">abc</div> -->
                        <!--end col-->
                        <?php if (!empty($get_num)) { ?>
                        <div class="col-md-12 mt-sm-0">
                            <div class="form-group mb-4">
                                <label for="" class="refer-by">Refer By
                                    <span><?php echo !empty($get_num) ? $get_num : ''; ?></span>
                                </label>
                                <div class="col-md-12 mt-sm-0 no-pad" id="resend_otp"
                                    style="padding-top: 10px; padding-bottom: 15px; text-align: right;">
                                    <span id="timer" style="font-weight: 600;"></span>
                                    <a href="www.google.com" id="resend_link"> Resend OTP?</a>
                                </div>
                                <div class="otp-wrapper otp-event">
                                    <div class="col-md-12 mt-sm-0 no-pad">
                                        <button type="button"
                                            class="btn btn-primary btn-block p font-sahitya-bold otp-submit otp"
                                            style="margin-bottom: 1.5rem;margin-top: 1.5rem;">Get Otp</button>
                                    </div>
                                    <div class="otp-container" id="otp_session">
                                        <input type="tel" id="value_1" class="otp-number-input" maxlength="1"
                                            autocomplete="off">
                                        <input type="tel" id="value_2" class="otp-number-input" maxlength="1"
                                            autocomplete="off">
                                        <input type="tel" id="value_3" class="otp-number-input" maxlength="1"
                                            autocomplete="off">
                                        <input type="tel" id="value_4" class="otp-number-input" maxlength="1"
                                            autocomplete="off">
                                        <input type="tel" id="value_5" class="otp-number-input" maxlength="1"
                                            autocomplete="off">
                                        <input type="tel" id="value_6" class="otp-number-input" maxlength="1"
                                            autocomplete="off">
                                    </div>
                                    <label id="error-otp" class="error"></label>

                                    <div class="col-md-12 mt-sm-0 no-pad" id="verify">
                                        <button id="confirm" type="button"
                                            class="btn btn-primary btn-block p font-sahitya-bold otp-submit"
                                            style="margin-bottom: 1.5rem;margin-top: 1.5rem;"><span
                                                class="verify_text_loader">Verify</span> <i
                                                class="fa fa-spinner fa-spin btn_loader_verify"></i></button>
                                    </div>

                                </div>
                                <div class="text-danger"></div>
                            </div>
                            <?php } ?>
                            <div class="col-md-12 mt-sm-0">
                                <button type="button" id="join_on"
                                    class="btn btn-primary btn-block btn-block p font-sahitya-bold submit"
                                    style="margin-bottom: 2rem;" data-datac="form"><span class="button_text_loader"><i
                                            class="fa fa-user-plus"></i>
                                        <?php echo !empty($home[0]['button_1']) ? $home[0]['button_1'] : '' ?></span> <i
                                        class="fa fa-spinner fa-spin btn_loader_view"></i>
                                </button>
                            </div>
                            <?php if (!empty($get_num)) { ?>
                            <div class="col-md-12 mt-sm-0 no-pad">
                                <?php } else { ?>
                                <div class="col-md-12 mt-sm-0">
                                    <?php } ?>
                                    <button type="button" id="btnredirect"
                                        class="btn btn-primary btn-block p font-sahitya-bold btn_click">
                                        <?php echo !empty($home[0]['button_2']) ? $home[0]['button_2'] : '' ?>
                                    </button>
                                </div>
                                <input type="hidden" id="referral_name"
                                    value="<?php echo !empty($get_referral_user_data[0]['name']) ? $get_referral_user_data[0]['name'] : ''; ?>">
                                <input type="hidden" id="referral_city_id"
                                    value="<?php echo !empty($get_city_tb_name[0]['city_id']) ? $get_city_tb_name[0]['city_id'] : ''; ?>">
                                <input type="hidden" id="referral_tb_name"
                                    value="<?php echo !empty($get_city_tb_name[0]['sql_tb_name']) ? $get_city_tb_name[0]['sql_tb_name'] : ''; ?>">
                                <input type="hidden" id="referral_user_id"
                                    value="<?php echo !empty($get_referral_user_data[0]['user_id']) ? $get_referral_user_data[0]['user_id'] : ''; ?>">
                                <input type="hidden" id="referral_by"
                                    value="<?php echo !empty($get_num) ? $get_num : ''; ?>">
                            </div>
                        </div>
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div style="height: 100vh;display:flex;align-items:center;justify-content:center">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="success-img text-center">
                                                <img src="<?= site_url('assets/front_commonarea/'); ?>img/success.gif"
                                                    class="modal_img_animation" width="80px" />
                                            </div>
                                            <div class="success-msg text-center">
                                                <p class="font-sahitya-bold">
                                                    <?php if (!empty($get_num)) { ?>
                                                    Otp Verified Successfully.
                                                    <?php } else { ?>
                                                    <?php echo !empty($home[0]['popup_1']) ? $home[0]['popup_1'] : ''; ?>
                                                    <?php } ?>
                                                </p>
                                            </div>

                                            <div class="sub-btn text-center">
                                                <a href="" id="cus_btn_close" data-datac="model"
                                                    class="btn btn-primary cus-btn-success link"> OK </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <img src="<?php echo base_url(); ?><?php echo !empty($home[0]['banner']) ? $home[0]['banner'] : 'assets/commonarea/dist/img/default.png'; ?>"
                        style="width: 100%" />
                </div>
                <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
            </div>
</section>

<!-- <div class="modal fade" id="joinOn_popup" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div style="height: 100vh;display:flex;align-items:center;justify-content:center">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-img text-center">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>img/send.png" class="modal_img_animation"
                            width="80px" />
                    </div>
                    <div class="success-msg text-center">
                        <p class="font-sahitya-bold">
                            <?php echo !empty($home[0]['popup_2']) ? $home[0]['popup_2'] : ''; ?>
                        </p>
                    </div>

                    <div class="sub-btn text-center">
                        <a href="" id="cus_btn_close2" class="btn btn-primary cus-btn-success btnredirect_link"> OK
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->




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
$('.counting').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 5000,
        easing: 'swing',
        step: function(now) {
            // $(this).text(Math.ceil(now));
            var final = money_format(Math.ceil(now));
            $(this).text(final);
        }
    });
});

function money_format(value) {
    x = value.toString();
    var lastThree = x.substring(x.length - 3);
    var otherNumbers = x.substring(0, x.length - 3);
    if (otherNumbers != '')
        lastThree = ',' + lastThree;
    return otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
}
</script>