<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-4 no-pad">
                <section class="content-header">
                    <h1>Edit City Details
                    </h1>
                </section>
                <!-- <div class="box box-primary">
                    <div class="box-body light-green-body mob_min_height_auto">
                        <?php
                        $attribute = array('role' => 'form', 'id' => 'cityform', 'enctype' => 'multipart/form-data');
                        echo form_open('city-excel-data', $attribute);
                        ?>
                        <div class="col-md-12 form-group no-padd">
                            <label>Upload City Excel <span style="color: red;">*</span></label>
                            <input type="file" name="city_excel" id="" autocomplete="off" class="form-control">

                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 form-group no-padd">
                            <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success save_btn submit sub-btn" data-id="submit">Upload</button>
                            <a href="<?= site_url('shubham/city'); ?>"> <button type="button" class="btn btn-danger cancel-btn"><i class="fa fa-times-circle"></i> Cancel</button></a>
                        </div>
                        </form>
                    </div>
                </div> -->
                <div class="box box-primary">
                    <div class="box-body left-box-body">
                        <?php
                        $attribute = array('role' => 'form', 'id' => 'city_form');
                        echo form_open('shubham/district_action', $attribute);
                        ?>
                        <div class="col-md-12 form-group no-padd">
                            <label>City Name</label>
                            <input type="text" autocomplete="off" readonly id="city" class="form-control isAlpha" value="<?php echo !empty($edit_city[0]['city']) ? $edit_city[0]['city'] : ''; ?>">
                            <input type="hidden" name="txtpkey" id="txtpkey" value="<?php echo !empty($edit_city[0]['city_id']) ? $edit_city[0]['city_id'] : ''; ?>">
                            <div class="text-danger" id=""></div>
                        </div>
                        <div class="col-md-12 form-group no-padd">
                            <label>Contact No.<span style="color: red;">*</span></label>
                            <input type="text" autocomplete="off" name="mobile_no" id="mobile_no" class="form-control isInteger" minlength="10" maxlength="10" value="<?php echo !empty($edit_city[0]['mobile_no']) ? $edit_city[0]['mobile_no'] : ''; ?>">
                            <div class="text-danger" id=""></div>
                        </div>
                        <div class="col-md-12 form-group no-padd">
                            <label>Email Id<span style="color: red;">*</span></label>
                            <input type="text" autocomplete="off" name="email_id" id="email_id" class="form-control" value="<?php echo !empty($edit_city[0]['email_id']) ? $edit_city[0]['email_id'] : ''; ?>">
                            <div class="text-danger" id=""></div>
                        </div>
                        <div class="col-md-12 form-group no-padd">
                            <label>WhatsApp URL<span style="color: red;">*</span></label>
                            <?php if (!empty($edit_city[0]['whatsapp_url'])) { ?>
                                <button id="clear_whatsapp_url" class="btn-sm btn-danger pull-right" style="margin-bottom: .5rem;" type="button"> Clear</button>
                            <?php } ?>
                            <textarea type="text" autocomplete="off" name="whatsapp_url" id="whatsapp_url" class="form-control"><?php echo !empty($edit_city[0]['whatsapp_url']) ? $edit_city[0]['whatsapp_url'] : ''; ?></textarea>
                            <div class="text-danger" id=""></div>
                        </div>
                        <div class="col-md-12 form-group no-padd">
                            <label>Join URL<span style="color: red;">*</span></label>
                            <textarea type="text" autocomplete="off" name="join_url" id="join_url" class="form-control"><?php echo !empty($edit_city[0]['join_url']) ? $edit_city[0]['join_url'] : ''; ?></textarea>
                            <div class="text-danger" id=""></div>
                        </div>
                        <!-- End form-group -->
                        <div class="col-md-12 form-group no-padd">
                            <?php if (!empty($this->uri->segment(3))) { ?>
                                <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success save_btn submit leftpri city_add" data-id="submit"><i class="fa fa-check-circle"></i> Submit</button>
                            <?php } ?>

                            <a href="<?= site_url('shubham/city') ?>" class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
                        </div>
                        <div class="clearfix"></div>


                        <!-- End form-group -->
                        <?php echo form_close(); ?>
                    </div>
                    <!-- End box-body -->
                </div>
                <!-- End box -->
            </div>
            <div class="col-md-8 no-pad-right mob-no-pad">
                <section class="content-header">
                    <h1>City List </h1>
                </section>
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12 no-pad">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="table-responsive">
                                                    <table id="example" class="table table-bordered">
                                                        <thead>
                                                            <tr role="row">
                                                                <th width="10%" class="text-center">Sr No.</th>
                                                                <th width="10%" class="text-center">Action</th>
                                                                <th width="15%">City Name</th>
                                                                <th width="15%">Contact No.</th>
                                                                <th width="15%">Email Id</th>
                                                                <th width="20%">WhatsApp URL</th>
                                                                <th width="15%">Join URL</th>


                                                            </tr>
                                                        </thead>
                                                        <!-- <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>Pune</td>
                                                            <td>1234567890</td>
                                                            <td>yogita@gmail.com</td>
                                                            <td>https://www.whatsapp.com/?lang=en</td>
                                                            <td class="text-center">
                                                                <a onclick="return confirm('Do you really want to edit this record?')" href="#"><button type="button" class="btn btn-warning btn-xs btn-edit" id="" title="Edit">
                                                                        <i class="fa fa-pencil"></i></button></a>
                                                                <a onclick="return confirm('Do you really want to delete this record?')" href="#" class="btn btn-danger btn-xs btn-del" id="" title="Delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody> -->
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End box-body -->
                    </div>
                    <!-- End box-body -->
                </div>
                <!-- End box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>
<script type="text/javascript">
    $(".s_meun").removeClass("active");

    $(".master_active").addClass("active");
    $(".master_city_active").addClass("active");

    var table = $("#example").dataTable({
        "pageLength": 50,
        "serverSide": true,
        "processing": true,
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            url: "<?php echo base_url('master/get-city-data-table?' . $_SERVER['QUERY_STRING']) ?>",
            type: 'POST'
        },
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
</script>


<script>
    $(document).on("click", ".delete-record", function() {
        if (confirm("Do you really want to delete this city?")) {
            let $this = $(this);
            let $city_id = $this.attr("data-Cityid");

            $.ajax({
                url: "<?php echo base_url('master/delete-city') ?>",
                type: "POST",
                data: {
                    city_id: $city_id
                },
                dataType: "json",
                beforeSend: function() {
                    $this.html("<i class='fa fa-spinner fa-spin'></i>");
                },
                success: function(data) {
                    if (data.status == true) {
                        success_toast(data.city, data.message);
                        //   setTimeout(() => {
                        //      $this.closest("tr").remove();
                        //   }, 500);

                        reload_table();
                    }
                }
            });
        }
    });

    $("#clear_whatsapp_url").click(function(e) {
        $('#whatsapp_url').empty();
        $('#whatsapp_url').html('');
        $('#whatsapp_url').val('');
    });
</script>