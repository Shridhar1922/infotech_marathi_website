<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
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

#icon-boxes p {
    color: #404040;
    font-size: 14px;
    font-family: "open-sans-serif", sans-serif;
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

        </div>
    </nav>
</header>


<section class="why-scrollup-bg ">
    <div class="container ">
        <h3 class="text-light about-title">
            Why Infotech Marathi
        </h3>

    </div>
</section>


<section id="icon-boxes" class="p-4 why-scrollup">
    <!-- <h2 class="py-3 text-center">Our Services</h2> -->
    <h4 class="text-center py-4"> </h4>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4 ">
                <div class="card bg-info  text-center">
                    <div class="card-body">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Security.gif"
                            class="">
                        <h3>Security</h3>
                        <p>
                            We use a 128-bit encryption to protect your data permanently from unauthorized access. We
                            naturally guarantee absolute confidentiality </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info   text-center">
                    <div class="card-body">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Accuracy.gif"
                            class="">
                        <h3>Accuracy</h3>
                        <p> Infotech Marathi Digital Magazine is a trusted source of knowledge Various topics through
                            WhatsApp.
                            The only reliable digital magazine providing up-to-date information in all fields</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info  text-center">
                    <div class="card-body">
                        <!-- <img src="" alt=""> -->
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Privacy.gif"
                            class="">

                        <h3>Privacy</h3>
                        <p>
                            Infotech Marathi does not share your Personal Information with third parties for their
                            direct
                            marketing purposes. We care a lot about your number.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-md-4 offset-md-2">
                <div class="card bg-info   text-center">
                    <div class="card-body">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Free.gif"
                            class="">
                        <h3>100 % Free</h3>
                        <p> Infotech Marathi digital magazine services are completely free and we will never charge you
                            for of
                            our services. Also Our Marathi digital magazine is a free service for all marathi people to
                            save their time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info  text-center">
                    <div class="card-body">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Source_Of_Promotion.gif"
                            class="">
                        <h3>Source Of Promotion</h3>
                        <p> Infotech Marathi is a source to promote your business In Marathi Audience. Infotech Marathi
                            Marathi Magazine
                            Is Extremely perfect To Grow Your Business In Maharashtra Through Ads. We will bring your
                            business to valuable new potential customers.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>


</section>

<!-- MOBILE VIEW -->
<section id="icon-boxes" class="p-4 why-scrollup-mobile">
    <!-- <h2 class="py-3 text-center">Our Services</h2> -->
    <h4 class="text-center py-2"> </h4>
    <div class="container">
        <div class="row ">
            <div class="col-md-4 ">
                <div class="card bg-info  text-center">
                    <div class="card-body">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Security.gif"
                            class="">
                        <h3>Security</h3>
                        <p>
                            We use a 128-bit encryption to protect your data permanently from unauthorized access. We
                            naturally guarantee absolute confidentiality </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info   text-center">
                    <div class="card-body">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Accuracy.gif"
                            class="">
                        <h3>Accuracy</h3>
                        <p> Infotech Marathi Digital Magazine is a trusted source of knowledge Various topics through
                            WhatsApp.
                            The only reliable digital magazine providing up-to-date information in all fields</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info  text-center">
                    <div class="card-body">
                        <!-- <img src="" alt=""> -->
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Privacy.gif"
                            class="">

                        <h3>Privacy</h3>
                        <p>
                            Infotech Marathi does not share your Personal Information with third parties for their
                            direct
                            marketing purposes. We care a lot about your number.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-md-4 offset-md-2">
                <div class="card bg-info   text-center">
                    <div class="card-body">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Free.gif"
                            class="">
                        <h3>100 % Free</h3>
                        <p> Infotech Marathi digital magazine services are completely free and we will never charge you
                            for of
                            our services. Also Our Marathi digital magazine is a free service for all marathi people to
                            save their time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info  text-center">
                    <div class="card-body">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>/img/Why_Scrollup_Icons/Source_Of_Promotion.gif"
                            class="">
                        <h3>Source Of Promotion</h3>
                        <p> Infotech Marathi is a source to promote your business In Marathi Audience. Infotech Marathi
                            Marathi Magazine
                            Is Extremely perfect To Grow Your Business In Maharashtra Through Ads. We will bring your
                            business to valuable new potential customers.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>


</section>


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