<style>
    .form-group label {
        width: 100%;
    }
</style>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-4 no-pad">
                <section class="content-header">
                    <h1>Add Referral Dashboard Images
                    </h1>
                </section>
                <div class="box box-primary">
                    <div class="box-body left-box-body">
                        <?php
                        $attribute = array('role' => 'form', 'id' => 'banner_form', 'enctype' => 'multipart/form-data');
                        echo form_open('banner-action', $attribute);
                        ?>
                        <div class="col-md-12 form-group no-pad" id="">
                            <label>Upload Images<span style="color: red;">*</span></label><br>

                            <input type="file" name="banner_img" onchange="change_img('file_banner_image','previewImg');" accept=".jpg,.jpeg,.png" id="file_banner_image" class="form-control">
                            <img id="previewImg" src="<?= site_url('assets/commonarea/'); ?>dist/img/default.png" class="profile-img1" alt="Banner Image" style="height:100px; width:180px; margin-top:5px;">

                            <input type="hidden" name="" id="" class="form-control" value="">
                        </div>
                        <!-- End form-group -->
                        <div class="col-md-12 form-group no-padd">

                            <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success save_btn submit" data-id="submit"><i class="fa fa-check-circle"></i> Submit</button>

                            <a href=""><button type="button" class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancel</button></a>
                        </div>

                        <!-- End form-group -->
                        <?php echo form_close(); ?>
                    </div>
                    <!-- End box-body -->
                </div>
                <!-- End box -->
            </div>
            <div class="col-md-8 no-pad-right mob-no-pad">
                <section class="content-header">
                    <h1>Image List </h1>
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
                                                                <th width="15%" class="text-center">Sr No.</th>
                                                                <th width="45%">Images</th>

                                                                <th width="8%" class="text-center">Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td class=""> <img id="" src="<?= site_url('assets/commonarea/'); ?>dist/img/default.png" alt=" Image" class="table-img"></td>
                                                                <td class="text-center">
                                                                    <a onclick="return confirm('Do you really want to edit this record?')" href="#"><button type="button" class="btn btn-warning btn-xs btn-edit" id="" title="Edit">
                                                                            <i class="fa fa-pencil"></i></button></a>
                                                                    <a onclick="return confirm('Do you really want to delete this record?')" href="#" class="btn btn-danger btn-xs btn-del" id="" title="Delete">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
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

    $(".ref_dash_img_active").addClass("active");
</script>
<script>
    $(document).on("click", ".delete-record", function() {
        if (confirm("Do you really want to delete this banner?")) {
            let $this = $(this);
            let $state_id = $this.attr("data-id");

            $.ajax({
                url: "<?php echo base_url('delete-banner') ?>",
                type: "POST",
                data: {
                    id: $state_id
                },
                dataType: "json",
                beforeSend: function() {
                    $this.html("<i class='fa fa-spinner fa-spin'></i>");
                },
                success: function(data) {
                    if (data.status == true) {
                        location.reload();
                    }
                }
            });
        }
    });

    function change_img(img, preview_img) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL($('#' + img)[0].files[0]);

        oFReader.onload = function(oFREvent) {
            $('#' + preview_img).attr('src', oFREvent.target.result);
        }
    }
</script>
<script type="text/javascript">
    var table = $("#example").dataTable({

        "pageLength": 10,
        "serverSide": true,
        "processing": true,
        "searching": false,
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            url: "<?php echo base_url('get-banner-data-table?' . $_SERVER['QUERY_STRING']) ?>",
            type: 'POST'
        },
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
    $("#file_banner_image").change(function() {
        $('.error').empty();
        $('#file_banner_image').css('color', 'black');
    });
</script>