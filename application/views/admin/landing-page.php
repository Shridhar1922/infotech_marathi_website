 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Main content -->
    <section class="content">

      <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="<?= site_url('assets/commonarea/'); ?>dist/img/avatar5.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?= !empty($this->session->userdata('UADMINNAME')) ? $this->session->userdata('UADMINNAME') : ''; ?></h3>
              <h5 class="widget-user-desc">Admin</h5>
            </div>
            <div class="box-footer no-padding">
              <h3 class="text-center">System Summary</h3>
              <ul class="nav nav-stacked">
                <li><a href="#">Last Login Date <span class="pull-right"><?= !empty($summary[0]['login_time']) ? date('d-M-Y | h:i:s A', strtotime($summary[0]['login_time'])) : 'You are logged in first time.'; ?></span></a></li>
                <li><a href="#">Current Date <span class="pull-right"><?= date('d-M-Y'); ?></span></a></li>
                <li><a href="#">Current Time <span class="pull-right"><?= date('h:i A'); ?></span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      </div>
      <!-- /.row -->
    </section>
     
  </div>
  <!-- /.content-wrapper -->