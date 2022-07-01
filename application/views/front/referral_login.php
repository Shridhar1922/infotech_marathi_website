<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.f_pages_hide {
    display: none;
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
</style>

<header class="sticky">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="<?= site_url() ?>" class="navbar-brand logo">
                <!-- <img src="<?= site_url('assets/commonarea/'); ?>dist/img/infotech-marathi-Logo-min.png" height="60px"> -->
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
        </div>
    </nav>
</header>
<section class="banner-bg" id="contact">
    <div class="w3l-index-block1">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 content-left banner-e-p">

                        <h3 class="mb-md-4 mb-3  pt-4 text-white" style="font-size: 30px;">
                            <?php echo !empty($referral_page[0]['heading']) ? $referral_page[0]['heading'] : '' ?></h3>
                        <p><?php echo !empty($referral_page[0]['content']) ? $referral_page[0]['content'] : '' ?></p>
                    </div>
                    <div class="col-lg-5 col-sm-12 content-photo mt-lg-0 mt-5">
                        <div class="column1">
                            <h3 class="tagline mb-3">Login Here</h3>

                            <?php
                            $attribute = array('role' => 'form', 'id' => 'login_form');
                            echo form_open('login-action', $attribute);
                            ?>

                            <div class="">
                                <input type="text" name="email" id="email" class="form-input" placeholder="Enter Email">
                            </div>
                            <div class="">
                                <input type="password" name="password" id="password" class="form-input"
                                    placeholder="Enter Password">
                            </div>
                            <!-- <a href="<?= site_url('referral-dashboard') ?>"> -->
                            <button type="submit" id="submit_btn" name="submit_btn"
                                class="btn btn-primary btn-block p  btn_click ref-btn">
                                Login
                            </button>
                            <!-- </a> -->
                            <p class="signup" style="margin-top: 10px !important; margin-bottom: 5px !important;"> <a
                                    href="<?= site_url('referral-forgot') ?>" class="signuplink">Forgot Password</a></p>
                            <p class="signup">Don't Have an Account ? <a href="<?= site_url('referral-register') ?>"
                                    class="signuplink">Register Here</a></p>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</section>
<footer>
    <p class="para-desc mx-auto text-muted mt-1 text-center footer-link-col" style="margin-bottom: 0px !important">
        <a href="<?= site_url('terms_and_conditions') ?>">Terms & Conditions</a>
    </p>
    <p class="para-desc mx-auto text-muted mt-1 text-center font-jaldi-bold" style="margin-bottom: 0px !important">
        ©<script type="text/javascript">
        var year = new Date();
        document.write(year.getFullYear());
        </script> Infotech Marathi. All Rights Reserved
    </p>
</footer>

<script src="<?= site_url('assets/front_commonarea/'); ?>js/sweetalert.min.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/aos.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/typed.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/controller_js/cn_referral_login.js"></script>

<script>
AOS.init();
</script>