<footer id="footer_page" class="f_pages_hide">
    <!-- <p class="para-desc mx-auto text-muted mt-1 text-center footer-link-col" style="margin-bottom: 0px !important">
        <a href="<?= site_url('terms_and_conditions') ?>">Terms & Conditions</a>
    </p> -->
    <p class="para-desc mx-auto text-muted mt-1 text-center font-jaldi-bold" style="margin-bottom: 0px !important">
        ©<script type="text/javascript">
            var year = new Date();
            document.write(year.getFullYear());
        </script> Scrollup. All Rights Reserved
    </p>
</footer>
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
<?php if(!empty($msg)){?>
// setTimeout(function(){ $(".err-msg2").css("display","none") }, 3000);
$(document).ready(function() {
    $(".err-msg2").delay(5000).slideUp(300);
});
<?php } ?>
</script>