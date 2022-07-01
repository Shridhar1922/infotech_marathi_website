<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1> District List
                        <div class="pull-right">
                            <a href="<?= site_url('shubham/dashboard') ?>">
                                <button type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Back</button>
                            </a>
                        </div>
                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">
                    <?php $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                    $uri_segments = explode('/', $uri_path); ?>
                    <input type="hidden" id="get_segment" value="<?php echo !empty($uri_segments[4]) ? $uri_segments[4] : $uri_segments[3]; ?>">
                    <div class="col-md-12 no-pad">
                        <div class="box box-primary">
                            <div class="box-body light-green-body">

                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Sr No.</th>

                                            <th width="18%">Given Name</th>
                                            <th width="18%">Mobile No.</th>
                                            <th width="18%">City</th>
                                            <th width="18%">Date & Time</th>

                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>2021-07-14 11:06 AM</td>
                                            <td>Yogita Patil</td>
                                            <td>1234567890</td>
                                            <td>Pune</td>

                                        </tr>
                                    </tbody> -->
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

    $(".dashboard_active").addClass("active");
</script>
<script>
    //  datepicker script
    $(document).ready(function() {

        $('.date').datepicker({
            dateFormat: 'yy-dd-mm',
            autoclose: true,
            todayHighlight: true,
            changeMonth: true,
            changeYear: true
        });


    });
</script>
<script>
    var get_segment = $('#get_segment').val();
    // alert(get_segment);
    var table = $("#example").dataTable({
        "pageLength": 10,
        "serverSide": true,
        "processing": true,
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            url: "<?php echo base_url('get-data-table-user-list?' . $_SERVER['QUERY_STRING']) ?>",
            type: 'POST',
            data: {
                get_segment: get_segment
            },
        },
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
</script>