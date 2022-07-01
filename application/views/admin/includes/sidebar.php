	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar scrollbar" id="style-7">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<!-- Dashboard start-->
				<li class="s_meun dashboard_active active">
					<a href="<?= site_url('shubham/dashboard') ?>">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					</a>
				</li>
				<!-- Dashboard end-->

				<!-- Master start-->
				<li class="treeview s_meun master_active ">
					<a href="#">
						<i class="fa fa-table" aria-hidden="true"></i> <span>Master</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="s_meun master_city_active"><a href="<?= site_url('shubham/city') ?>"><i class="fa fa-flag"></i> City</a></li>
						<li class="s_meun master_configuration_active"><a href="<?= site_url('shubham/configuration') ?>"><i class="fa fa-table"></i> Configuration</a></li>
					</ul>
				</li>

				<!-- cms start-->
				<li class="s_meun cms_active ">
					<a href="<?= site_url('shubham/cms') ?>">
						<i class="fa fa-pencil-square-o"></i> <span>CMS</span>
					</a>
				</li>
				<!-- cms end-->
				<!-- cms start-->
				<li class="s_meun home_active ">
					<a href="<?= site_url('shubham/home') ?>">
						<i class="fa fa-home"></i> <span>Home</span>
					</a>
				</li>
				<!-- cms end-->

				<!-- referal_page start-->
				<li class="s_meun ref_active ">
					<a href="<?= site_url('shubham/edit-referral-page') ?>">
						<i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Referral Page</span>
					</a>
				</li>
				<!-- referal_page end-->

				<!-- referal_dash img start-->
				<li class="s_meun ref_dash_img_active ">
					<a href="<?= site_url('shubham/referral-dash-img') ?>">
						<i class="fa fa-picture-o" aria-hidden="true"></i> <span>Referral Dashboard Images</span>
					</a>
				</li>
				<!-- referal_dash img end-->

				<!-- Registered Users start-->
				<li class="s_meun registered_users_active ">
					<a href="<?= site_url('shubham/registered-user') ?>">
						<i class="fa fa-user"></i> <span>Registered Users</span>
					</a>
				</li>
				<!-- Registered Users end-->

				<!-- referral Users start-->
				<li class="s_meun referral_users_active ">
					<a href="<?= site_url('shubham/referral-user') ?>">
						<i class="fa fa-user"></i> <span>Referral Partners</span>
					</a>
				</li>
				<!-- referral Users end-->

				<!-- referral Users start-->
				<li class="s_meun referral_active ">
					<a href="<?= site_url('shubham/referral') ?>">
						<i class="fa fa-user-plus"></i> <span>Referral List</span>
					</a>
				</li>
				<!-- referral Users end-->

				<!--Payment Transfer start-->
				<li class="s_meun payment_transfer_active">
					<a href="<?= site_url('shubham/pending-payment-transfer') ?>">
						<i class="fa fa-credit-card"></i> <span>Payment Transfer</span>
					</a>
				</li>
				<!-- Payment Transfer end-->
				<!--Report start-->
				<li class="s_meun report_active ">
					<a href="<?= site_url('shubham/report') ?>">
						<i class="fa fa-pie-chart"></i> <span>Report</span>
					</a>
				</li>
				<!-- Report end-->
				<!--Settings start-->
				<li class="treeview s_meun settings_active ">
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i> <span>Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="s_meun general_settings_active"><a href="<?= site_url('shubham/general-settings') ?>"><i class="fa fa-sliders"></i> General Settings</a></li>
						<!-- <li class="s_meun email_settings_active"><a href="<?= site_url('shubham/email-settings') ?>"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail Settings</a></li> -->
						<li class="s_meun visual_settings_active"><a href="<?= site_url('shubham/visual-settings') ?>"><i class="fa fa-paint-brush" aria-hidden="true"></i> Visual Settings</a></li>
						<!-- <li class="s_meun social_login_settings_active"><a href="<?= site_url('shubham/social-login-settings') ?>"><i class="fa fa-globe"></i> Social Login</a></li> -->
						<li class="s_meun change_password_active"><a href="<?= site_url('shubham/change-password') ?>"><i class="fa fa-key"></i> Change Password</a></li>
						<li class="s_meun logout_active"><a href="<?= site_url('logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
					</ul>
				</li>
				<!--Settings end-->
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>