<link href="<?= site_url('assets/front_commonarea/'); ?>css/datatables.css" rel="stylesheet" type="text/css" />
  <link href="<?= site_url('assets/front_commonarea/'); ?>css/datatables.min.css" rel="stylesheet" type="text/css" />
  <header class="sticky">
<nav class="navbar navbar-light bg-light">
            <div class="container refdash">

                <a href="<?= site_url('referral-dashboard') ?>" class="navbar-brand logo">
                    <!-- <img src="<?= site_url('assets/commonarea/'); ?>dist/img/Scrolup-Logo.png" height="60px"> -->
                    <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['logo']) ? $visualSettings[0]['logo'] : 'assets/commonarea/dist/img/Scrolup-Logo.png'; ?>" height="60px">
                </a>
                <div class="dashboard">
                    <a href="#" class="user-sec" style="padding-right: 10px;">
                        <img src="<?= site_url('assets/front_commonarea/'); ?>img/user.png" class="user-image" alt="User Image">
                        <span class="user-name"><?php echo !empty($user_info[0]['name']) ? ucwords($user_info[0]['name']) : ''; ?></span>
                    </a>
                    <span class="desktop-div">
                        <a href="<?= site_url('referral-dashboard') ?>" class="btn btn-outline-dark d-md-block btn-outline-style"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard</span> </a>
                        <button class="btn d-md-block btn-outline-style logout-btn logout"> <i class="fa fa-sign-out" aria-hidden="true"></i> <span> Logout</span></button>
                    </span>
                    <div class="mobile-nav">
                        <a href="<?= site_url('referral-dashboard') ?>" class="btn btn-outline-dark d-md-block btn-outline-style"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
                        <button class="btn d-md-block btn-outline-style logout-btn logout"> <i class="fa fa-sign-out" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </nav>
</header>
<section id="contact" class="dash" style=" background-color: #E7E9F0;padding:60px 0;height:100vh;">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h4 class="become_formHead" style="margin-bottom:20px;">Referrals</h4>
                <div class="table-responsive">
                <table id="example" class="table table-bordered table-list" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="7%">Sr No.</th>
                            <th width="15%">Referred from</th>
                            <th width="15%">Referred to</th>
                            <th width="15%">City</th>
                            <th width="15%">Referral Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>

                            <td>1534543434</td>
                            <td>1234567890</td>
                            <td>PUNE</td>
                            <td>1200</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>

</section>


<script src="<?= site_url('assets/front_commonarea/'); ?>js/sweetalert.min.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/aos.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/typed.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>

<script src="<?= site_url('assets/front_commonarea/'); ?>js/datatables.js"></script>
<script src="<?= site_url('assets/front_commonarea/'); ?>js/datatables.min.js"></script>
<script>
    AOS.init();
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pageLength": 10,
            "serverSide": true,
            "processing": true,
            "order": [
                [0, "desc"]
            ],
            "ajax": {
                url: "<?php echo base_url('get-data-table-referral-list-front?' . $_SERVER['QUERY_STRING']) ?>",
                type: 'POST'
            },
        });
    });
    function reload_table() {
      table.DataTable().ajax.reload(null, false);
   }
</script>
<script>
        $(".logout").click(function (e) { 
        if (confirm("Do you really want to logout.")) {
            window.location.href = "<?= base_url() ?>referral-logout";
        }       
    });
</script>