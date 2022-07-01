<!-- Content Wrapper. Contains page content -->
<style>
    .pad_6 {
        padding-left: 6px;
    }
</style>
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>View Referral
                        <div class="pull-right">
                            <a href="<?= site_url('shubham/referral') ?>">
                                <button type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Back</button>
                            </a>
                        </div>
                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">

                    <div class="col-md-4 no-pad-left">
                        <!-- start box -->
                        <div class="col-md-12 mb-10">
                            <div class="row">
                                <div class="col-md-12 form-group payment_box mr-0">

                                    <div class="col-md-12 d-flex text-center p-box no-pad align-center">
                                        <img src="<?= site_url('assets/commonarea/'); ?>dist/img/TotalPaymentIcon.png" class="img-responsive" width="35px" alt="img">
                                        <div>
                                            <label style="font-size: 16px;padding-left: 10px;">Total Earned Amount</label>
                                            <p class="history_price" id=""> <i class="fa fa-rupee font-14"></i> <?php echo !empty($user_details[0]['total_earned_amount']) ? $user_details[0]['total_earned_amount'] : '0'; ?></p>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 no-pad">
                                    <div class="view-hd">
                                        <p class="text-left mb-0">Details
                                            <span class="pull-right">Date &amp; Time : <?php echo !empty($user_details[0]['created_at']) ? $user_details[0]['created_at'] : ''; ?></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12 bg-white">
                                    <div class="contact_person_details mt-10">
                                        <div class="i-text"><i class="fa fa-user"></i> <span class="pad_6"> <?php echo !empty($user_details[0]['name']) ? ucwords($user_details[0]['name']) : ''; ?> </span></div>
                                        <input type="hidden" id="mobile_num" value="<?php echo !empty($user_details[0]['mobile_number']) ? $user_details[0]['mobile_number'] : ''; ?>">
                                        <div class="i-text"><i class="fa fa-envelope"></i> <span class="pad_6"> <?php echo !empty($user_details[0]['mobile_number']) ? substr($user_details[0]['mobile_number'], 3) : ''; ?></span></div>
                                        <div class="i-text"><i class="fa fa-table"></i> <span class="pad_6"><?php echo !empty($city[0]['city']) ? $city[0]['city'] : ''; ?></span></div>
                                        <div class="i-text"><i class="fa fa-toggle-on"></i> <span class="text-success pad_6">Active</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 no-pad">
                                    <div class="view-hd">
                                        <p class="text-left mb-0"> Bank Details

                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12 bg-white">
                                    <table class="usertable mt-10 mb-10" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <th width="40%">Bank Name <span class="float-right">:</span></th>
                                                <td width="60%" style="border-top:none; padding-left: 10px;" width="50%"><?php echo !empty($user_details[0]['bank_name']) ? $user_details[0]['bank_name'] : '-'; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Account No. <span class="float-right">:</span></th>
                                                <td style="padding-left: 10px;"> <?php echo !empty($user_details[0]['acc_no']) ? $user_details[0]['acc_no'] : '-'; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Branch<span class="float-right">:</span></th>
                                                <td style="padding-left: 10px;"> <?php echo !empty($user_details[0]['branch']) ? $user_details[0]['branch'] : '-'; ?></td>
                                            </tr>
                                            <tr>
                                                <th>IFSC<span class="float-right">:</span></th>
                                                <td style="padding-left: 10px;"> <?php echo !empty($user_details[0]['ifsc']) ? $user_details[0]['ifsc'] : '-'; ?></td>
                                            </tr>
                                            <tr>
                                                <th>UPI ID<span class="float-right">:</span></th>
                                                <td style="padding-left: 10px;"> <?php echo !empty($user_details[0]['UPI_id']) ? $user_details[0]['UPI_id'] : '-'; ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 no-pad">
                        <div class="box box-primary">
                            <div class="box-body light-green-body">

                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="8%" class="text-center">Sr No.</th>
                                            <th width="18%" style="text-align: left !important;">City</th>
                                            <th width="18%">Mobile No.</th>
                                            <th width="18%">Date & Time</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td style="text-align: left !important;">Pune</td>
                                            <td>1234567890</td>
                                            <td>2021-07-14 11:06 AM</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div> <!-- End box-body -->
                        </div> <!-- End box -->
                    </div>
                </section>
            </div>


        </div>
        <!-- /.row -->
    </section>
</div>

<script type="text/javascript">
    $(".s_meun").removeClass("active");

    $(".referral_active").addClass("active");
</script>
<script>
    var mobile_number = $('#mobile_num').val();
    // alert(mobile_number);
    var table = $("#example").dataTable({
        "pageLength": 10,
        "serverSide": true,
        "processing": true,
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            url: "<?php echo base_url('get-data-table-referral?' . $_SERVER['QUERY_STRING']) ?>",
            type: 'POST',
            data: {
                mobile_number: mobile_number,
            }
        },
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
</script>