<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scroll-Up</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/login.css">
  <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/responsive.css">

  <link rel="icon" href="<?= site_url('assets/commonarea/'); ?>dist/img/scrollup_crop-min.png" type="image/png" sizes="16x16">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    label.error {
      color: red;
    }
  </style>
</head>
<style>
  input[type="text"] {
    border: 1px solid #d2d6de;
  }
</style>

<body class="hold-transition login-page">
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body w3l-login-form ">
      <div class="logo-section">
        <img src="<?= site_url('assets/commonarea/'); ?>dist/img/Scrolup-Logo.png" width="400px;" style="border-radius: 20px;">
      </div>
      <div class="login-form">
        <p class="login-box-msg">Enter OTP</p>
        <?php
        $attribute = array('role' => 'form', 'id' => 'otpVerifyForm');
        echo form_open('verify-email-otp', $attribute); ?>

        <div class="form-group has-feedback">
          <label style="font-weight:600;">OTP</label>

          <input type="text" name="otp" id="otp" class="form-control login-input" placeholder="">
          <input type="hidden" class="form-control" id="email" name="email" value="<?php echo !empty($email_data) ? $email_data : ''; ?>">
          <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="button submit">Continue</button>
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
    <!-- /.login-box-body -->
  </div>
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
    <div class="err-msg2" style="position: fixed;right: 0px;bottom: 10px;z-index: 5; <?php echo (!empty($msg) ? 'display:block;' : 'display:none;'); ?>">
      <div class="alert <?php echo $error_class; ?>">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;position: absolute;top: 1px;right: 6px;opacity: 0.4;">&times;</a>
        <strong><?php echo $hint_text; ?> !</strong> <?php echo $msg; ?>
      </div>
    </div>
    <?php ?>
  </div>
  <!-- jQuery 3 -->

  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
  <script>
    setTimeout(function() {
      $(".err-msg2").css("display", "none")
    }, 3000);
  </script>
  <script src="<?php echo base_url(); ?>assets/js/js_common_validations.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/controller_js/cn_forget.js"></script>


</body>

</html>