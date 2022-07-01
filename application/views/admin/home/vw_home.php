<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1> Edit Home Page

                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">
                    <?php
                    $attribute = array('role' => 'form', 'id' => 'home', 'enctype' => 'multipart/form-data');
                    echo form_open('shubham/action-home', $attribute);
                    ?>
                    <div class="col-md-12 no-pad">
                        <div class="box box-primary">
                            <div class="box-body light-green-body">
                                <div class="col-md-12 form-group no-pad" id="js_append_details">

                                    <div class="col-md-12 form-group no-pad-left mob-no-pad">
                                        <label>Animated Heading <span style="color: red;">*</span></label>
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" class="form-control" name="animated_heading_1" value="<?php echo !empty($home[0]['animated_heading_1']) ? ucwords($home[0]['animated_heading_1']) : ''; ?>">
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" name="animated_heading_2" class="form-control" value="<?php echo !empty($home[0]['animated_heading_2']) ? ucwords($home[0]['animated_heading_2']) : ''; ?>">
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" name="animated_heading_3" class="form-control" value="<?php echo !empty($home[0]['animated_heading_3']) ? ucwords($home[0]['animated_heading_3']) : ''; ?>">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" name="animated_heading_4" class="form-control" value="<?php echo !empty($home[0]['animated_heading_4']) ? ucwords($home[0]['animated_heading_4']) : ''; ?>">
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" name="animated_heading_5" class="form-control" value="<?php echo !empty($home[0]['animated_heading_5']) ? ucwords($home[0]['animated_heading_5']) : ''; ?>">
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" name="animated_heading_6" class="form-control" value="<?php echo !empty($home[0]['animated_heading_6']) ? ucwords($home[0]['animated_heading_6']) : ''; ?>">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" name="animated_heading_7" class="form-control" value="<?php echo !empty($home[0]['animated_heading_7']) ? ucwords($home[0]['animated_heading_7']) : ''; ?>">
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" name="animated_heading_8" class="form-control" value="<?php echo !empty($home[0]['animated_heading_8']) ? ucwords($home[0]['animated_heading_8']) : ''; ?>">
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <input type="text" name="animated_heading_9" class="form-control" value="<?php echo !empty($home[0]['animated_heading_9']) ? ucwords($home[0]['animated_heading_9']) : ''; ?>">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <label>Banner </label>
                                        <input type="file" onchange="change_img('banner','banner_preview');" name="banner" accept=".jpg,.jpeg,.bmp,.png," id="banner" class="form-control">
                                        <input type="hidden" name="banner_old" id="banner_old" value="<?php echo !empty($home[0]['banner']) ? $home[0]['banner'] : ''; ?>" class="form-control">
                                        <img id="banner_preview" src="<?php echo base_url(); ?><?php echo !empty($home[0]['banner']) ? $home[0]['banner'] : 'assets/commonarea/dist/img/default.png'; ?>" height="100px">
                                        <div class="text-danger" id=""></div>
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <label>Sub Heading <span style="color: red;">*</span></label>
                                        <input type="hidden" name="txtpkey" id="txtpkey" value="<?php echo !empty($home[0]['id']) ? $home[0]['id'] : ''; ?>">
                                        <input type="text" name="sub_heading" id="sub_heading" class="form-control" value="<?php echo !empty($home[0]['sub_heading']) ? $home[0]['sub_heading'] : ''; ?>">
                                        <div class="text-danger" id=""></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <label>Button Name 1 <span style="color: red;">*</span></label>
                                        <input type="text" name="button_1" id="button_1" class="form-control" value="<?php echo !empty($home[0]['button_1']) ? $home[0]['button_1'] : ''; ?>">
                                        <div class="text-danger" id=""></div>
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <label>Button Name 2 <span style="color: red;">*</span></label>
                                        <input type="text" name="button_2" id="button_2" class="form-control" value="<?php echo !empty($home[0]['button_2']) ? $home[0]['button_2'] : ''; ?>">
                                        <div class="text-danger" id=""></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <label>Popup Text 1 <span style="color: red;">*</span></label>
                                        <textarea type="text" name="popup_1" id="popup_1" class="form-control"><?php echo !empty($home[0]['popup_1']) ? $home[0]['popup_1'] : ''; ?></textarea>
                                        <div class="text-danger" id=""></div>
                                    </div>
                                    <div class="col-md-4 form-group no-pad-left mob-no-pad">
                                        <label>Popup Text 2 <span style="color: red;">*</span></label>
                                        <textarea type="text" name="popup_2" id="popup_2" class="form-control"><?php echo !empty($home[0]['popup_2']) ? $home[0]['popup_2'] : ''; ?></textarea>
                                        <div class="text-danger" id=""></div>
                                    </div>
                                    <div class="col-md-12 no-pad">
                                        <button type="submit" name="submit_btn" value="submit" class="btn btn-success submit" id="Sec1SubmitBtn"><i class="fa fa-check-circle"></i> Save</button>
                                        <!-- <a href="">
                                        <button type="button" class="btn btn-danger">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            Cancel
                                        </button>
                                    </a> -->
                                    </div>

                                </div> <!-- End box-body -->
                            </div> <!-- End box -->
                        </div>
                        <?php echo form_close(); ?>
                </section>
            </div>


        </div>
        <!-- /.row -->
    </section>
</div>


<script type="text/javascript">
    $(".s_meun").removeClass("active");

    $(".home_active").addClass("active");
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
    function change_img(img, preview_img) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL($('#' + img)[0].files[0]);

        oFReader.onload = function(oFREvent) {
            $('#' + preview_img).attr('src', oFREvent.target.result);
        }
    }
</script>