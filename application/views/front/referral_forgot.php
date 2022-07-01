<header class="sticky">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="<?= site_url() ?>" class="navbar-brand logo">
                <!-- <img src="<?= site_url('assets/commonarea/'); ?>dist/img/Scrolup-Logo.png" height="60px"> -->
                <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['logo']) ? $visualSettings[0]['logo'] : 'assets/commonarea/dist/img/Scrolup-Logo.png'; ?>"
                    height="60px">
            </a>

            <div class="ml-auto mobile-view">


                <a href="<?= site_url('') ?>" class="pr-2">Home</a>

                <a href="<?= site_url('about_us') ?>" class="pr-2">About Us</a>
                <a href="<?= site_url('how_to_join') ?>" class="pr-2" target=_blank>How to Join</a>


            </div>

        </div>
    </nav>
</header>
<section class="banner-bg" id="contact">
    <div class="w3l-index-block1">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 content-left banner-e-p">

                        <h3 class="mb-md-4 mb-3 text-white" style="font-size: 40px;">
                            <?php echo !empty($referral_page[0]['heading']) ? $referral_page[0]['heading'] : '' ?></h3>
                        <p><?php echo !empty($referral_page[0]['content']) ? $referral_page[0]['content'] : '' ?></p>
                    </div>
                    <div class="col-lg-5 col-sm-12 content-photo mt-lg-0 mt-5 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1000">
                        <div class="column1">
                            <h3 class="tagline mb-3">Forgot Password</h3>

                            <?php
                            $attribute = array('role' => 'form', 'id' => 'forgot_form');
                            echo form_open('forgot-password-action', $attribute);
                            ?>

                            <div class="">
                                <input type="text" name="email" id="email" class="form-input" placeholder="Enter Email">
                            </div>
                            <button type="submit" style="margin-bottom: 15px;" id="submit_btn" name="submit_btn"
                                class="btn btn-primary btn-block p submit btn_click ref-btn">
                                Send Link
                            </button>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</section>
<input type="hidden" id="base_url" value="<?php echo base_url() ?>">
<!-- /.login-box -->
<div class="msg_div">
    <?php
    $msg = '';
    $error_class = 'alert-success';
    $hint_text = 'Success';
    if ($this->session->flashdata("success") != "") {
        $msg = $this->session->flashdata("success");
        $error_class = 'alert-success';
        $hint_text = 'Success';
    } else if ($this->session->flashdata("error") != "" || (validation_errors() != "")) {
        $msg = ($this->session->flashdata("error") ? $this->session->flashdata("error") : validation_errors());
        $error_class = 'alert-danger';
        $hint_text = 'Error';
    }
    ?>
    <div class="err-msg2"
        style="position: fixed;right: 0px;bottom: 10px;z-index: 5; <?php echo (!empty($msg) ? 'display:block;' : 'display:none;'); ?>">
        <div class="alert <?php echo $error_class; ?>">
            <a href="#" class="close" data-dismiss="alert" aria-label="close"
                style="text-decoration: none;position: absolute;top: 1px;right: 6px;opacity: 0.4;">&times;</a>
            <strong><?php echo $hint_text; ?> !</strong> <?php echo $msg; ?>
        </div>
    </div>
    <?php ?>
</div>

<script>
setTimeout(function() {
    $(".err-msg2").css("display", "none")
}, 3000);
</script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/sweetalert.min.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/aos.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/typed.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/controller_js/cn_referral_forgot.js"></script>

<script>
AOS.init();
</script>