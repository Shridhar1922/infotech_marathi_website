<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.modal.fade {
    opacity: 1;
}

.submit_btn_contact {
    background: #1977cc;
    border: 0;
    padding: 8px 26px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
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
                <img src="<?php echo base_url();?><?php echo !empty($visualSettings[0]['logo'])?$visualSettings[0]['logo']:'assets/commonarea/dist/img/infotech-marathi-Logo-min.png' ;?>"
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


<section class="contact-us-bg">
    <div class="container ">
        <h3 class="text-light about-title">
            Contact Us
        </h3>

    </div>
</section>


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact py-5">
    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="fa fa-envelope"></i>
                        <h4>Email:</h4>
                        <p> <?php echo $social[0]['contact_email'] ? $social[0]['contact_email'] : ''?></p>
                    </div>


                    <div class="phone">
                        <i class="fa fa-phone"></i>
                        <h4>Call:</h4>
                        <p>+91 <?php echo $social[0]['contact_phone'] ? $social[0]['contact_phone'] : ''?></p>
                    </div>
                    <div class="email" id="social_icons">


                        <a href="<?php echo $social[0]['instagram_url'] ? $social[0]['instagram_url'] : ''?>"
                            target="_blank"><i class="fa fa-instagram insta"></i></a>
                        <a href="<?php echo $social[0]['facebook_url'] ? $social[0]['facebook_url'] : ''?>"
                            target="_blank"><i class="fa fa-facebook fb"></i></a>
                        <a href="<?php echo $social[0]['youtube_url'] ? $social[0]['youtube_url'] : ''?>"
                            target="_blank"><i class="fa fa-youtube-play youtube"></i></a>
                        <a href="<?php echo $social[0]['twitter_url'] ? $social[0]['twitter_url'] : ''?>"
                            target="_blank"><i class="fa fa-twitter tweet"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">

                <?php
                $attribute = array('role' => 'form', 'id' => 'sendMailForContactUs');
                echo form_open('send-contact-us', $attribute); ?>
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control isAlpha" id="name" placeholder="Your Name"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control isNumber" name="mobile_number" maxlength="10"
                            id="mobile_number" placeholder="Mobile" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control isAlpha" name="location" id="location"
                            placeholder="Location" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                </div>


                <div class="form-group">
                    <textarea class="form-control isAlpha" name="message" rows="5" data-rule="required"
                        data-msg="Please write something for us" placeholder="Description"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <!-- <div class="loading">Loading</div> -->
                    <!-- <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div> -->
                </div>
                <div class=""><button class="submit_btn_contact" type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->


<!--  <footer>
    <p class="para-desc mx-auto text-muted mt-1 text-center footer-link-col" style="margin-bottom: 0px !important">
        <a href="<?= site_url('terms_and_conditions') ?>">Terms & Conditions</a> <span class="text-muted">&#124;</span>
        <a href="<?= site_url('privacy_policy') ?>">Privacy Policy</a>
    </p>
    <p class="para-desc mx-auto text-muted mt-1 text-center font-jaldi-bold" style="margin-bottom: 0px !important">
        ©2021 Scrollup. All Rights Reserved
    </p>
</footer> -->


<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>
<script src="<?= site_url('assets/controller_js/'); ?>/cn_contact_us.js"></script>