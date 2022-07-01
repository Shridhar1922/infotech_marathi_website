<!-- Content Wrapper. Contains page content -->
<style>
    .range_inputs {
        display: none !important;
    }
</style>
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>Referral User List
                        <div class="pull-right">

                        </div>
                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">

                    <div class="col-md-12 no-pad">
                        <form method="get" id="filter_form">
                            <div class="box box-primary">
                                <div class="box-body light-green-body no-height">
                                    <div class="col-md-3 form-group no-pad-left mob-no-pad ">
                                        <label>Select City</label>
                                        <select class="form-control" id="city_id" name="city_id">
                                            <option value="">All City</option>
                                            <?php if (!empty($city)) : ?>
                                                <?php foreach ($city as $key => $value) : ?>
                                                    <option value="<?php echo ($value['city_id']); ?>" <?php if (!empty($this->input->get('city_id'))) {
                                                                                                            if ($value['city_id'] == $this->input->get('city_id')) {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                        } ?>><?php echo ucwords($value['city']); ?></option>
                                                <?php endforeach ?>
                                            <?php endif ?>

                                        </select>
                                        <div id=""></div>
                                    </div>
                                    <div class="col-md-6 form-group mt-26 no-pad-left mob-no-pad">
                                        <!-- <input type="hidden" value="1" id="filter" name="filter"> -->
                                        <button type="submit" class="btn btn-primary filter-btn"> <i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
                                        <a href="<?= base_url('shubham/referral-user'); ?>" class="btn btn-danger filter-btn"><i class="fa fa-times" aria-hidden="true"></i> Clear</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 no-pad">
                        <div class="box box-primary">
                            <div class="box-body light-green-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="6%">Sr No.</th>
                                                <th width="15%"> Name</th>
                                                <th width="15%">Email</th>
                                                <th width="20%">Mobile No.</th>
                                                <th width="15%" style="text-align: left!important;">Location</th>

                                            </tr>
                                        </thead>
                                        <!-- <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Yogita Patil</td>
                                            <td>yogita@gmail.com</td>
                                            <td>1234567890</td>
                                            <td>Pune</td>
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


<script type="text/javascript">
    $(".s_meun").removeClass("active");

    $(".referral_users_active").addClass("active");
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
            url: "<?php echo base_url('get-data-table-referral-user?' . $_SERVER['QUERY_STRING']) ?>",
            type: 'POST',
        },
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
</script>