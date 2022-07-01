<!-- Content Wrapper. Contains page content -->
<style>
    .range_inputs {
        display: none !important;
    }

    @media (max-width: 600px) {
        #mobile-btn .filter-btn {
            width: 45%;
        }
    }
</style>
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>Registered User List

                        <div class="pull-right">

                        </div>
                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">
                    <div class="col-md-12 no-pad">
                        <form method="get" id="filter_form">
                            <div class="box box-primary">
                                <div class="box-body light-green-body no-height">

                                    <div class="col-md-3 form-group no-pad-left">
                                        <label>Select Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input id="reportrange" name="filter_date" id="filter_date" type="text" class="form-control">

                                            <input type="hidden" name="get_date" id="get_date">

                                        </div>

                                    </div>

                                    <div class="col-md-2 form-group no-pad-left">
                                        <label>Select City</label>
                                        <select class="form-control" id="city_id" name="city_id">
                                            <option value="0">All City</option>
                                            <?php if (!empty($city)) : ?>
                                                <?php foreach ($city as $key => $value) : ?>
                                                    <option value="<?php echo $value['city_id']; ?>" <?php if (!empty($this->input->get('city_id'))) {
                                                                                                            if ($value['city_id'] == $this->input->get('city_id')) {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                        } ?>>
                                                        <?php echo ucwords($value['city']); ?></option>
                                                <?php endforeach ?>
                                            <?php endif ?>

                                        </select>
                                        <div id=""></div>
                                    </div>
                                    <div class="col-md-2 form-group no-pad-left">
                                        <label class="lablefnt">Mobile Number</label>
                                        <input type="text" class="form-control" maxlength="10" value="<?php echo $this->input->get('mobile_number'); ?>" autocomplete="off" name="mobile_number" id="mobile_number" placeholder="">
                                    </div>
                                    <div class="col-md-5 form-group mt-25 no-pad-left" id="mobile-btn">
                                        <!-- <input type="hidden" value="1" id="filter" name="filter"> -->
                                        <button style="margin-bottom: 5px;padding: 4px 22px;margin-right: 4px;" type="submit" class="btn btn-primary filter-btn" id="filter_btn"> <i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
                                        <a style="margin-bottom: 5px;padding: 4px 22px;margin-right: 4px;" href="<?= base_url('shubham/registered-user'); ?>" class="btn btn-danger filter-btn"><i class="fa fa-times" aria-hidden="true"></i> Clear</a>
                                        <?php if ($this->input->get('filter_date') && $this->input->get('city_id') != 0 && $this->input->get('mobile_number') == NULL) { ?>
                                            <button style="margin-bottom: 5px;padding: 4px 22px;margin-right: 4px;" type="button" class="btn btn-primary filter-btn" onclick="get_data()"><i class=" fa fa-download"></i> Download CSV</button>
                                        <?php } else { ?>
                                            <button style="margin-bottom: 5px;padding: 4px 22px;margin-right: 4px;" type="button" class="btn btn-primary filter-btn" disabled><i class=" fa fa-download"></i> Download CSV</button>
                                        <?php } ?>

                                        <button style="margin-bottom: 5px;padding: 4px 22px;margin-right: 4px;" onclick="city_next();" type="button" id="next_btn" class="btn btn-primary filter-btn">Next <i class="fa fa-angle-right" aria-hidden="true"></i> </button>

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
                                                <th width="4%">Sr No.</th>
                                                <th width="10%">Given Name</th>
                                                <th width="10%">Family Name</th>
                                                <th width="20%">Group Membership</th>
                                                <th width="10%">Phone Type</th>
                                                <th width="15%">Mobile No.</th>
                                                <th width="12%">Client Operators WP No.</th>
                                                <th width="15%">Date & Time</th>
                                                <!-- <th width="8%" class="text-center">Action</th> -->
                                            </tr>
                                        </thead>
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

    $(".registered_users_active").addClass("active");
</script>
<script>
    // var filter = $('#filter').val();
    var table = $("#example").dataTable({
        "pageLength": 10,
        "serverSide": true,
        "processing": true,
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            url: "<?php echo base_url('get-register-data-table?' . $_SERVER['QUERY_STRING']) ?>",
            type: 'POST',
        },
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
</script>
<script>
    $("#submit_btn").on('click', function() {

        console.log("click on submitttt.......")

        $("#submit_btn").parent().parent().parent().parent().parent().parent().parent().css('display', 'none');
        $("#submit_btn").parent().parent().parent().parent().parent().parent().parent().parent().siblings(
            '.modal-backdrop').css('opacity', '0');

        console.log($("#submit_btn").parent().parent().parent().parent().parent().parent().parent().parent()
            .parent())
    });
</script>
<script type="text/javascript">
    $(function() {

        var start = moment().subtract(6, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MM/DD/YYYY') + ' to ' + end.format('MM/DD/YYYY'));
            $('#reportrange').val(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
            $("#get_date").val(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            maxDate: new Date(),
            ranges: {
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            },
            locale: {
                format: 'MM/DD/YYYY'
            }
        }, cb);
        if ("<?php echo $this->input->get('filter_date') ?>") {
            $('#reportrange').val("<?php echo $this->input->get('filter_date') ?>");
            $("#get_date").val("<?php echo $this->input->get('filter_date') ?>");
        } else {
            cb(start, end);
        }

    });



    function get_data() {
        var get_date = $('#get_date').val();

        var city = document.getElementById('city_id').selectedOptions[0].value;

        if (city != '' && city != 0) {
            window.location.href = "<?= base_url() ?>download-csv-file-of-user?get_date=" + get_date + "&city_id=" + city;
        }

    }
</script>
<script>
    function city_next() {
        var city_id = $('#city_id option:selected').val();
        var value = parseInt(city_id) + 1;

        if (value != '18' && value != '37' && value != '') {
            $.ajax({
                url: "<?php echo base_url('check-city-id'); ?>",
                type: 'POST',
                data: {
                    city_id: value,
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data == 1) {
                        $("#city_id").val(value).change();
                        $("#filter_form").submit();
                    } else if (data == 0) {
                        value = "0";
                        $("#city_id").val(value).change();
                    }
                }
            });
        } else if (value == '37' || value == '0') {
            value = 0;
            $("#city_id").val(value).change();
        } else {
            value = parseInt(value) + 1;
            change_city(value);
        }
    }

    function change_city(value) {
        if (value != '18' && value != '') {
            $.ajax({
                url: "<?php echo base_url('check-city-id'); ?>",
                type: 'POST',
                data: {
                    city_id: value,
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data == 1) {
                        $("#city_id").val(value).change();
                        $("#filter_form").submit();
                    } else if (data == 0) {
                        value = "0";
                        change_city(value);
                    }
                }
            });
        }
    }

    function form_submit() {
        var button = document.getElementById('filter_btn');
        button.form.submit();
    }
</script>