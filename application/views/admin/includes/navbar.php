<header class="main-header">
    <!-- Logo -->
    <a href="<?= site_url('shubham/dashboard') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="<?php echo base_url();?><?php echo !empty($visualSettings[0]['logo'])?$visualSettings[0]['logo']:'assets/commonarea/dist/img/Scrolup-Logo-icon.png';?>"
                width="100%"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg" style="font-size: 18px;">
            <img src="<?php echo base_url();?><?php echo !empty($visualSettings[0]['logo'])?$visualSettings[0]['logo']:'assets/commonarea/dist/img/infotech-marathi-Logo.png';?>"
                width="100%">
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <?php $profile = (!empty($this->session->userdata('profile_path')) ? base_url($this->session->userdata('profile_path')) : base_url('assets/commonarea/dist/img/user2-160x160.jpg')); ?>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= site_url('assets/commonarea/'); ?>dist/img/avatar5.png" class="user-image"
                            alt="User Image">
                        <span
                            class="hidden-xs"><?=!empty($this->session->userdata('UADMINNAME')) ? $this->session->userdata('UADMINNAME') : '';?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= site_url('assets/commonarea/'); ?>dist/img/avatar5.png" class="img-circle"
                                alt="User Image">

                            <p>
                                <?=!empty($this->session->userdata('UADMINNAME')) ? $this->session->userdata('UADMINNAME') : '';?>
                                <small>Member since
                                    <?= date('M Y', strtotime($this->session->userdata('created_at'))) ?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                /.row
              </li> -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                            <div class="pull-right">
                                <a href="<?= base_url('logout') ?>" class="btn btn-default btn-flat">Log out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!--  <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
            </ul>
        </div>
    </nav>
</header>