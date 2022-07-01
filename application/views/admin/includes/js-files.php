</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- jQuery UI 1.11.4 -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= site_url('assets/commonarea/'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- timepicker -->
<script src="<?= site_url('assets/commonarea/'); ?>plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= site_url('assets/commonarea/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= site_url('assets/commonarea/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= site_url('assets/commonarea/'); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= site_url('assets/commonarea/'); ?>dist/js/demo.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/icheck.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/icheck.min.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>plugins/file-manager/js/file-manager-panel.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>plugins/file-manager/js/jquery.dm-uploader.min.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>plugins/file-manager/js/ui.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/controller_js/cn_login.js"></script> -->




<!-- select2.min start -->
<script src="<?= site_url('assets/js/sweetalert.min.js'); ?>"></script>

<!-- fselect -->
<script src="<?= site_url('assets/js/validations/common/common.js'); ?>"></script>

<script>
  function loadFunction() {
    $('#preloader').hide();
  }
</script>
<script src="<?php echo base_url(); ?>assets/js/js_common_validations.js"></script>
<script src="<?php echo base_url(); ?>assets/controller_js/cn_city.js"></script>
<script src="<?php echo base_url(); ?>assets/controller_js/cn_configuration.js"></script>
<script src="<?php echo base_url(); ?>assets/controller_js/cn_home.js"></script>
<script src="<?php echo base_url(); ?>assets/controller_js/cn_referral_page.js"></script>

<!-- <script>
  function success_toast(title = '', message = '') {
    $.toast({
      heading: title,
      text: message,
      icon: 'success',
      loader: true, // Change it to false to disable loader
      loaderBg: '#9EC600', // To change the background,
      position: "bottom-right"
    });
  }

  function fail_toast(title = '', message = '') {
    $.toast({
      heading: title,
      text: message,
      icon: 'error',
      loader: true, // Change it to false to disable loader
      loaderBg: '#9EC600', // To change the background,
      position: "bottom-right"
    });
  }

  $(document).ready(function() {
    let $is_set_success_message = "<?//php echo !empty($this->session->flashdata("success")) ? 'yes' : 'no'; ?>";
    if ($is_set_success_message == "yes") {
      success_toast(title = 'Success', message = '<?//php echo $this->session->flashdata("success"); ?>');
    }

    let $is_set_fail_message = "<?//php echo !empty($this->session->flashdata("error")) ? 'yes' : 'no'; ?>";
    if ($is_set_fail_message == "yes") {
      fail_toast(title = 'Error', message = '<?//php echo $this->session->flashdata("error"); ?>');
    }
  });
</script> -->
<script src="<?php echo base_url(); ?>assets/controller_js/cn_banner.js"></script>

<script>
  function show_edit_modal(id)
 {
  	$.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>shubham/pending-model',
        data: 'id=' + id,
        success: function (data)
        {
           $('#myModal').modal('show');
           $('#myModal').html(data);
        }

    });
}
</script>
<script>
  function show_view_modal(id)
 {
  	$.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>shubham/completed-model',
        data: 'id=' + id,
        success: function (data)
        {
           $('#myModal_completed').modal('show');
           $('#myModal_completed').html(data);
        }

    });
}
</script>
</body>

</html>