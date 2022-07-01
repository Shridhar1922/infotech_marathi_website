<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>Referral List
                        <!-- <div class="pull-right">
                            <a data-toggle="modal" data-target="#myModal">
                                <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                            </a>
                        </div> -->
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
                                                <th width="10%">Sr No.</th>
                                                <th width="15%">Name</th>
                                                <th width="25%">Mobile No.</th>
                                                <th width="15%">City</th>
                                                <th width="12%" class="text-center">Status</th>
                                                <th width="15%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Yogita Patil</td>
                                                <td>1234567890</td>
                                                <td>Pune</td>
                                                <td class="text-center">
                                                    <a onclick="return confirm('Do you really want to inactive this record?')" href="#"><i class="fa fa-toggle-on tgle-on " aria-hidden="true" title="Active"></i>
                                                    </a>
                                                </td>
                                                <!-- <td class="text-center">
                                                    <a href="<?= site_url('shubham/view-referral') ?>">
                                                        <button type="button" class="btn btn-primary btn-xs add" title="View"><i class="fa fa-eye"></i></button>
                                                    </a>
                                                 
                                                    <a href="" class="btn btn-danger btn-xs btn-del" id="" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td> -->
                                            </tr>
                                        </tbody>
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
<div id="myModal" class="modal fade common-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Name <span style="color: red;">*</span></label>
                        <input type="text" name="" id="" class="form-control" value="">
                        <div class="text-danger" id=""></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Mobile No. <span style="color: red;">*</span></label>
                        <input type="text" name="" id="" class="form-control" value="">
                        <div class="text-danger" id=""></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Select City <span style="color: red;">*</span></label>
                        <select class="form-control" id="blog_category" name="blog_category">
                            <option value="">Select City </option>
                            <option value="1">Sangli</option>
                            <option value="2">Nagapur</option>
                            <option value="3">Kolhapur</option>

                        </select>
                        <div id=""></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success save_btn submit" data-id="submit"><i class="fa fa-check-circle"></i> Submit</button>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script type="text/javascript">
    $(".s_meun").removeClass("active");

    $(".referral_active").addClass("active");
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
            url: "<?php echo base_url('get-data-table-referral-list?' . $_SERVER['QUERY_STRING']) ?>",
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
<script>
    //        $(document).on("click", ".delete-record", function() {
    //        if (confirm("Do you really want to delete this referral user?")) {
    //            let $this = $(this);
    //            let $id = $this.attr("data-id");

    //            $.ajax({
    //                url: "<? //php echo base_url('referral-delete') 
                            ?>",
    //                type: "POST",
    //                data: {
    //                    id: $id
    //                },
    //                dataType: "json",
    //                beforeSend: function() {
    //                    $this.html("<i class='fa fa-spinner fa-spin'></i>");
    //                },
    //                success: function(data) {
    //                    if (data.status == "true") {
    //                         location.reload();
    //                    }
    //                }
    //            });
    //        }
    //    });
</script>