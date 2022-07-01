<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1> Edit Referral Page

                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">

                    <div class="col-md-12 no-pad">
                        <div class="box box-primary">
                            <div class="box-body light-green-body">
                                <?php
                                $attribute = array('role' => 'form', 'id' => 'referral', 'enctype' => 'multipart/form-data');
                                echo form_open('referral-page', $attribute);
                                ?>
                                <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                    <label>Heading <span style="color: red;">*</span></label>
                                    <input type="text" name="heading" id="heading" class="form-control" value="<?php echo !empty($referral[0]['heading']) ? $referral[0]['heading'] : ''; ?>">
                                    <input type="hidden" name="txtpkey" id="txtpkey" class="form-control" value="<?php echo !empty($referral[0]['id']) ? $referral[0]['id'] : ''; ?>">
                                    <div class="text-danger" id=""></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                    <label>Logo </label>
                                    <input type="file" onchange="change_img('logo','logo_preview');" name="logo" accept=".jpg,.jpeg,.bmp,.png," id="logo" class="form-control">
                                    <input type="hidden" name="logo_old" id="logo_old" value="<?php echo !empty($referral[0]['logo']) ? $referral[0]['logo'] : ''; ?>" class="form-control">
                                    <img id="logo_preview" src="<?php echo base_url(); ?><?php echo !empty($referral[0]['logo']) ? $referral[0]['logo'] : 'assets/commonarea/dist/img/default.png'; ?>" height="100px">
                                    <div class="text-danger" id=""></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 form-group no-pad-left mob-no-pad">
                                    <label>Content</label>
                                    <textarea class="summernote" rows="5" name="content" id="content"><?php echo !empty($referral[0]['content']) ? $referral[0]['content'] : ''; ?></textarea>

                                </div>
                                <div class="col-md-12 no-pad">
                                    <button type="submit" name="submit_btn" value="submit" class="btn btn-success submit" id="Sec1SubmitBtn"><i class="fa fa-check-circle"></i> Save</button>
                                </div>
                                <?php echo form_close(); ?>
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

    $(".ref_active").addClass("active");

    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
        });
    });
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

    function change_img(img, preview_img) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL($('#' + img)[0].files[0]);

        oFReader.onload = function(oFREvent) {
            $('#' + preview_img).attr('src', oFREvent.target.result);
        }
    }
</script>