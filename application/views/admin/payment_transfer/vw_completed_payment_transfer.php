<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>Payment Transfer
                        <div class="pull-right">
                            <a href="<?= site_url('shubham/pending-payment-transfer') ?>">
                                <button type="button" class="btn btn-default" id="" style="padding-right: 7px;">
                                    <i class="fa fa-clock-o"></i> <span class="pr-5">Pending</span> <span class="lk-cnts"> <?php echo !empty($pending_payment) ? $pending_payment : '0'; ?></span>
                                </button>
                            </a>
                            <a href="<?= site_url('shubham/Completed-payment-transfer') ?>">
                                <button type="button" class="btn btn-success" id="" style="padding-right: 7px;">
                                    <i class="fa fa-clock-o"></i> <span class="pr-5">Completed</span> <span class="lk-cnts"> <?php echo !empty($completed_payment) ? $completed_payment : '0'; ?></span>
                                </button>
                            </a>
                        </div>
                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">

                    <div class="col-md-12 no-pad">
                        <div class="box box-primary">
                            <div class="box-body light-green-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%" class="text-center">Sr No.</th>
                                                <th width="10%">Request ID</th>
                                                <th width="18%">Name</th>
                                                <th width="18%">Mobile No.</th>
                                                <th width="15%">Request Amount</th>
                                                <th width="18%">Date & Time</th>

                                                <th width="8%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <!-- <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>2021-07-14 11:06 AM</td>
                                            <td>R123</td>
                                            <td>Yogita Patil</td>
                                            <td>1234567890</td>
                                            <td>12000</td>

                                            <td class="text-center">
                                                <a data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-primary btn-xs add" title="View"><i class="fa fa-eye"></i></button>
                                                </a>

                                            </td>
                                        </tr>
                                    </tbody> -->
                                    </table>
                                </div>
                            </div> <!-- End box-body -->
                        </div> <!-- End box -->
                    </div>
                </section>
            </div>


        </div>
        <!-- /.row -->
    </section>
</div>

<div id="myModal_completed" class="modal fade common-modal" role="dialog">

</div>
<script type="text/javascript">
    $(".s_meun").removeClass("active");

    $(".payment_transfer_active").addClass("active");
</script>
<script>
    var table = $("#example").dataTable({
        "pageLength": 10,
        "serverSide": true,
        "processing": true,
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            url: "<?php echo base_url('get-data-table-completed-payment?' . $_SERVER['QUERY_STRING']) ?>",
            type: 'POST'
        },
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
</script>