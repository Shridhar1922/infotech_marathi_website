<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.column1 select.form-input {
    height: 39.83px;
    margin-bottom: 10px;
}

.f_pages_hide {
    display: none;
}

.column1 select.form-input option {
    padding: 5px;
}

label.error {
    padding-top: 0px;
}

/*  */
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
                    <a class="dropdown-item" href="<?= site_url('why_scrollup') ?>">Why Infotech Marathi</a>
                    <a class="dropdown-item" href="<?= site_url('referral-login') ?>">Referral Partner</a>
                    <a class="dropdown-item" href="<?= site_url('contact_us') ?>">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</header>
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
<section class="banner-bg" id="contact">
    <div class="w3l-index-block1">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 content-left banner-e-p">

                        <h3 class="mb-md-4 mb-3 text-white" style="font-size: 40px;">
                            <?php echo !empty($referral_page[0]['heading']) ? $referral_page[0]['heading'] : '' ?></h3>
                        <p><?php echo !empty($referral_page[0]['content']) ? $referral_page[0]['content'] : '' ?></p>
                        <!-- <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                        </p> -->
                    </div>
                    <div class="col-lg-5 col-sm-12 content-photo mt-lg-0 mt-5">
                        <?php
                        $attribute = array('role' => 'form', 'id' => 'referral_registerform');
                        echo form_open('register-action', $attribute);
                        ?>
                        <div class="column1">
                            <h3 class="tagline mb-3">Create an Account</h3>

                            <div class="">
                                <input type="text" name="name" style="text-transform: capitalize;" class="form-input"
                                    placeholder="Enter Name">
                            </div>
                            <div class="">
                                <input type="text" name="email" id="email" class="form-input" placeholder="Enter Email">
                            </div>
                            <div class="">
                                <input type="text" name="mobile_number" id="mobile_number" class="form-input isInteger"
                                    maxlength="10" placeholder="Enter Mobile No.">
                            </div>
                            <div class="">
                                <input type="password" name="password" id="password" class="form-input"
                                    placeholder="Enter Password">
                            </div>
                            <div class="">
                                <select class="form-input" id="city">
                                    <option value="">जिल्हा निवडा</option>
                                </select>
                            </div>
                            <div class="forgot">
                                <p class="rember-me"><input type="checkbox"><b>By Registering to Referral Program You
                                        Accept Our <span class="trms">Terms & Condition</span></b></p>
                            </div>
                            <button type="submit" name="submit_btn" id="submit_btn"
                                class="btn btn-primary btn-block p  btn_click ref-btn">
                                Register
                            </button>

                            <p class="signup">Already Have an Account ? <a href="<?= site_url('referral-login') ?>"
                                    class="signuplink">Login Here</a></p>
                        </div>
                        <?php echo form_close(); ?>
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
<script src="<?php echo base_url(); ?>assets/controller_js/cn_referral_register.js"></script>


<script>
AOS.init();
</script>

<script>
$('#mobile_number').on('change', function() {
    var mobile_number = $('#mobile_number').val();
    $.ajax({
        url: 'get-city-id-mobile-no',
        type: 'POST',
        dataType: 'json',
        data: {
            mobile_number: mobile_number,
        },
        beforeSend: function() {},
        success: function(data) {
            if (data.status == "true") {
                $('#city').empty();
                $('#city').append("<option value='" + data.city_id + "'>" + data.city +
                    "</option>");
            } else if (data.status == "false") {
                $('#city').empty();
                $('#city').append("<option value=''> जिल्हा निवडा </option>");
            }
        }
    });
});
</script>