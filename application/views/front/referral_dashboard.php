<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Scrollup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .error_msg {
            padding-left: 0px !important;
        }
    </style>
</head>

<body>
    <header class="sticky">
        <nav class="navbar navbar-light bg-light">
            <div class="container refdash">

                <a href="<?= site_url('referral-dashboard') ?>" class="navbar-brand logo">
                    <!-- <img src="<?= site_url('assets/commonarea/'); ?>dist/img/Scrolup-Logo.png" height="60px"> -->
                    <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['logo']) ? $visualSettings[0]['logo'] : 'assets/commonarea/dist/img/Scrolup-Logo.png'; ?>" height="60px">
                </a>
                <div class="dashboard">
                    <a href="#" class="user-sec" style="padding-right: 10px;">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>img/user.png" class="user-image" alt="User Image">
                        <span class="user-name"><?php echo !empty($user_info[0]['name']) ? ucwords($user_info[0]['name']) : ''; ?></span>
                    </a>
                    <span class="desktop-div">
                        <a href="<?= site_url('referral-dashboard') ?>" class="btn btn-outline-dark d-md-block btn-outline-style"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard</span> </a>
                        <button class="btn d-md-block btn-outline-style logout-btn logout"> <i class="fa fa-sign-out" aria-hidden="true"></i> <span> Logout</span></button>
                    </span>
                    <div class="mobile-nav">
                        <a href="<?= site_url('referral-dashboard') ?>" class="btn btn-outline-dark d-md-block btn-outline-style"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
                        <button class="btn d-md-block btn-outline-style logout-btn logout"> <i class="fa fa-sign-out" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section id="contact" class="dash" style=" background-color: #E7E9F0;padding:60px 0;height:95vh;">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12 ref-box mob-pad-top">
                    <div class="card-dash">
                        <div class="card__info  card-inline-box">

                            <p class="card__info">Your Referral</p>
                            <div class="pull-right wrapper">
                                <div class="icon whtsapp" style="margin-right: 6px;">

                                    <a class="ref-link whatsapp" href="https://wa.me/?text=📣 ब्रेकिंग न्यूज,

👌 आता WhatsApp वर मिळवा न्यूज, जॉब्स आणि माहिती-मनोरंजन.! 📌

FREE लगेच जॉईन करा 👉 <?php echo base_url(); ?>home/join/<?php echo !empty($user_info[0]['mobile_number']) ? substr($user_info[0]['mobile_number'], 3) : ''; ?> 👈" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                </div>
                                <div class="icon copy">

                                    <a onclick="copyToClipboard('#copy_url')"><i class="fa fa-clone"></i></a>
                                </div>
                            </div>


                        </div>
                        <a id="copy_url" href="<?php echo base_url(); ?>home/join/<?php echo !empty($user_info[0]['mobile_number']) ? substr($user_info[0]['mobile_number'], 3) : ''; ?>" class="link-p"><?php echo base_url(); ?>home/join/<?php echo !empty($user_info[0]['mobile_number']) ? substr($user_info[0]['mobile_number'], 3) : ''; ?></a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 ref-box">
                    <div class="card-dash">
                        <div class="card__info">

                            <p class="card__info">Total Amount</p>
                            <h4 class="card__no"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo !empty($user_info[0]['earned_amount']) ? ($user_info[0]['earned_amount']) : '0'; ?></h4>
                            <input type="hidden" name="user_ammount" id="user_ammount" value="<?php echo !empty($user_info[0]['earned_amount']) ? ($user_info[0]['earned_amount']) : ''; ?>">
                            <input type="hidden" name="user_id" id="user_id" value="<?php echo $this->session->userdata('USERID'); ?>">
                        </div>
                        <?php $value = !empty($button_value) ? $button_value : ''; ?>
                        <div class="">
                            <?php if ($button_value == "1") {
                            ?>
                                <button id="withdraw_amount" style="border: none;" class="card__add check_bank">Withdrawal </button>
                            <?php } elseif ($button_value == "2") { ?>
                                <a class="card__add" id="a_link">Withdrawal </a>
                            <?php } ?>
                            <label id="error-withdraw" class="error error_msg"></label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 ref-box">
                    <div class="card-dash">
                        <div class="card__info">

                            <p class="card__info">Total Referrals</p>
                            <h4 class="card__no"><?php echo !empty($referral_count) ? $referral_count : '0'; ?></h4>
                        </div>
                        <div class="">

                            <a href="<?= site_url('referral-list') ?>" class="card__add">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="card-dash">
                        <div class="card__info">

                            <p class="card__info">Bank Details</p>

                        </div>
                        <div class="">
                            <a class="card__add" data-toggle="modal" data-target="#myModal">Add</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 mobilediv" style="margin-top: 30px;">
                    <?php if (!empty($banner)) {
                        foreach ($banner as $key => $value) : ?>

                            <img src="<?= base_url('uploads/banner/'); ?><?php echo $value['banner_img']; ?>" class="" alt="" width="100%" style="margin-bottom:20px;">
                        <?php endforeach ?>
                    <?php } ?>
                    <!-- <div class="col-md-12 col-sm-12 slider-desktop" style="margin-top: 30px;">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 slider-desktop" style="margin-top: 30px;">
                    <div class="swiper mySwiper slider-div">
                        <div class="swiper-wrapper">
                            <?php if (!empty($banner)) {
                                foreach ($banner as $key => $value) : ?>
                                    <div class="swiper-slide">
                                        <img src="<?= base_url('uploads/banner/'); ?><?php echo $value['banner_img']; ?>" class="" alt="">
                                    </div>
                                <?php endforeach ?>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next slider-navigation-style-03 dash-next rounded-circle" style="background-image: none; background-color: #fff;">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </div>
                        <div class="swiper-button-prev slider-navigation-style-03 dash-prev rounded-circle" style="background-image: none;">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </section>
    <!-- The Modal -->
    <div class="modal common-modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <?php
                $attribute = array('role' => 'form', 'id' => 'bank_details_form');
                echo form_open('bank-details-action', $attribute);
                ?>
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Bank Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body column2">
                    <div class="col-md-12 no-pad">
                        <input type="text" name="bank_name" id="bank_name" class="form-input" placeholder="Bank Name" value="<?php echo !empty($user_info[0]['bank_name']) ? $user_info[0]['bank_name'] : ''; ?>">
                    </div>
                    <div class="col-md-12 no-pad">
                        <input type="text" name="acc_no" maxlength="18" id="acc_no" class="isInteger form-input" placeholder="Account No." value="<?php echo !empty($user_info[0]['acc_no']) ? $user_info[0]['acc_no'] : ''; ?>">
                    </div>
                    <div class="col-md-12 no-pad">
                        <input type="text" name="ifsc" id="ifsc" class="form-input" placeholder="IFSC Code" value="<?php echo !empty($user_info[0]['ifsc']) ? $user_info[0]['ifsc'] : ''; ?>">
                    </div>
                    <div class="col-md-12 no-pad">
                        <input type="text" name="branch" id="branch" class="form-input" placeholder="Branch" value="<?php echo !empty($user_info[0]['branch']) ? $user_info[0]['branch'] : ''; ?>">
                    </div>
                    <div class="text-center">
                        <h6 style="margin: 10px 0px 0px;">OR</h6>
                    </div>
                    <div class="col-md-12 no-pad">
                        <input type="text" name="UPI_id" id="UPI_id" class="form-input" placeholder="UPI Id" value="<?php echo !empty($user_info[0]['UPI_id']) ? $user_info[0]['UPI_id'] : ''; ?>">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" style="border-top:0px">
                    <button type="submit" name="submit_btn" class="btn btn-success modal-btn submit">Save</button>
                </div>
                <?php echo form_close(); ?>

            </div>
        </div>
    </div>

</body>

</html>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/sweetalert.min.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/aos.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/typed.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/controller_js/cn_bank.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        autoplay: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            992: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 2
            },
            575: {
                slidesPerView: 1
            },
            320: {
                slidesPerView: 1
            }
        }
    });
</script>
<script>
    AOS.init();
</script>
<script>
    $("#a_link").click(function() {
        $('#error-withdraw').text("*  Minimum Withdrawal Limit  ₹100 ");
    });
</script>
<script>
    $("#withdraw_amount").on('click', function() {
        <?php if (!empty($user_info[0]['UPI_id']) || !empty($user_info[0]['bank_name']) && !empty($user_info[0]['acc_no']) && !empty($user_info[0]['ifsc'])) { ?>

            var user_ammount = $('#user_ammount').val();
            var user_id = $('#user_id').val();
            $("#withdraw_amount").attr("disabled", true);
            $.ajax({
                url: "<?php echo base_url('withdrawal-amount'); ?>",
                type: 'POST',
                dataType: 'json',
                data: {
                    user_ammount: user_ammount,
                    user_id: user_id
                },
                beforeSend: function() {
                    // $(".taluka-loader").show();
                },
                success: function(data) {
                    location.reload();
                }
            });
        <?php } else { ?>
            $('#error-withdraw').text("* Please fill bank details first. ");
        <?php } ?>
    });
</script>
<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>
<script>
    $(".logout").click(function(e) {
        if (confirm("Do you really want to logout.")) {
            window.location.href = "<?= base_url() ?>referral-logout";
        }
    });
</script>