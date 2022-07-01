<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Infotech Marathi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet"
        href="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?= site_url('assets/commonarea/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/AdminLTE.min.css">

    <link rel="icon" href="<?= site_url('assets/commonarea/'); ?>dist/img/infotech-marathi-Logo-min.png"
        type="image/png" sizes="16x16">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/login.css">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/responsive.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
    .login-logo {
        font-size: 35px;
        text-align: center;
        margin: 0px;
        background: #fff;
        font-weight: 300;
        padding-top: 20px;
    }

    .error {
        color: red;
    }
    </style>
    <style>
    .password_eye_icon {
        position: relative;
        top: 0px;
        right: 25px;
    }

    .fa-fw {
        width: 0%;
    }
    </style>

</head>

<body class="hold-transition login-page">
    <!-- <div class="overlay"></div>  -->
    <div class="w3l-login-form">
        <div class="logo-section">
            <img src="<?= site_url('assets/commonarea/'); ?>dist/img/infotech-marathi-Logo.png" width="400px;">
        </div>
        <div class="login-form">
            <?php
      $attribute = array('role' => 'form', 'id' => 'login_form');
      echo form_open('chk-login', $attribute); ?>

            <div class=" w3l-form-group">

                <label>Username:</label>
                <div class="group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Username"
                        value="<?php echo (!empty($_COOKIE['email'])) ? $_COOKIE['email'] : ''; ?>" />
                </div>

            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fa fa-unlock"></i>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                        value="<?php echo (!empty($_COOKIE['password'])) ? $_COOKIE['password'] : ''; ?>" />
                    <span toggle="#password"
                        class="fa fa-fw fa-eye-slash field-icon toggle-password password_eye_icon"></span>
                </div>
            </div>
            <div class="forgot">
                <a href="<?= site_url('shubham/forgot-password') ?>">Forgot Password?</a>
                <p><input type="checkbox" name="remember" value="yes"
                        <?php echo (!empty($_COOKIE['email']) && !empty($_COOKIE['password'])) ? 'checked="" ' : ''; ?>>Remember
                    Me</p>
            </div>
            <button type="submit" class="button">Login</button>
        </div>
        <?php echo form_close(); ?>
        <input type="hidden" id="base_url" value="<?php echo base_url() ?>">

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
        <div class="err-msg2"
            style="position: fixed;right: 0px;bottom: 10px;z-index: 1; <?php echo (!empty($msg) ? 'display:block;' : 'display:none;'); ?>">
            <div class="alert <?php echo $error_class; ?>">
                <a href="#" class="close" aria-label="close"
                    style="text-decoration: none;position: absolute;top: 1px;right: 6px;opacity: 0.4;">&times;</a>
                <strong><?php echo $hint_text; ?> !</strong> <?php echo $msg; ?>
            </div>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?= site_url('assets/js/'); ?>jquery.validate.min.js"></script>
    <!-- <script src="<?= site_url('assets/js/validations/custom/login/'); ?>login.js"></script> -->
    <script src="<?= site_url('assets/js/'); ?>sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/controller_js/cn_login.js"></script>


    <script>
    // function success_toast(title = '', message = '') {
    //   $.toast({
    //     heading: title,
    //     text: message,
    //     icon: 'success',
    //     loader: true, // Change it to false to disable loader
    //     loaderBg: '#9EC600', // To change the background,
    //     position: "bottom-right"
    //   });
    // }

    // function fail_toast(title = '', message = '') {
    //   $.toast({
    //     heading: title,
    //     text: message,
    //     icon: 'error',
    //     loader: true, // Change it to false to disable loader
    //     loaderBg: '#9EC600', // To change the background,
    //     position: "bottom-right"
    //   });
    // }

    // $(document).ready(function() {
    //   let $is_set_success_message = "<? //php echo !empty($this->session->flashdata("success")) ? 'yes' : 'no'; 
    ?
    >
    ";
    //   if ($is_set_success_message == "yes") {
    //     success_toast(title = 'Success', message = '<? //php echo $this->session->flashdata("success"); 
    ?
    >
    ');
    //   }

    //   let $is_set_fail_message = "<? //php echo !empty($this->session->flashdata("error")) ? 'yes' : 'no'; 
    ?
    >
    ";
    //   if ($is_set_fail_message == "yes") {
    //     fail_toast(title = 'Error', message = '<? //php echo $this->session->flashdata("error"); 
    ?
    >
    ');
    //   }
    // });
    </script>
    <script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    </script>
    <script>
    setTimeout(function() {
        $(".err-msg2").css("display", "none")
    }, 3000);
    </script>
</body>

</html>