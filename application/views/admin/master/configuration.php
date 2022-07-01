<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>Configuration
                    </h1>
                </section>
                <div class="box box-primary">
                    <div class="box-body left-box-body">
                        <?php
                        $attribute = array('role' => 'form', 'id' => 'configuration');
                        echo form_open('master/configuration', $attribute);
                        ?>
                        <div class="col-md-4 form-group no-pad-left  mob-no-pad" style="position: relative;">
                            <label>Referral Commission <small>( Per Link )</small> <span style="color: red;">*</span></label>
                            <input style="padding: 4px 28px 4px 12px;" type="text" name="referral_commission" id="referral_commission" class="form-control" value="<?php echo !empty($configuration[0]['referral_commission']) ? $configuration[0]['referral_commission'] : ''; ?>">
                            <span class="fa fa-inr field-icon"></span>

                            <div class="text-danger" id=""></div>
                        </div>
                        <!-- End form-group -->
                        <div class="col-md-4 form-group no-pad-left mob-no-pad" style="position: relative;">
                            <label>Withdrawal Limit <span style="color: red;">*</span></label>
                            <input type="text" name="withdrawal_limit" id="withdrawal_limit" class="form-control" value="<?php echo !empty($configuration[0]['withdrawal_limit']) ? $configuration[0]['withdrawal_limit'] : ''; ?>">
                            <input style="padding: 4px 28px 4px 12px;" type="hidden" name="txtpkey" id="txtpkey" value="<?php echo !empty($configuration[0]['id']) ? $configuration[0]['id'] : ''; ?>">
                            <span class="fa fa-inr field-icon"></span>
                            <div class="text-danger" id=""></div>
                        </div>
                        <!-- End form-group -->
                        <div class="col-md-12 form-group no-padd">
                            <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success save_btn submit leftpri city_add" data-id="submit"><i class="fa fa-check-circle"></i> Save</button>

                        </div>
                        <div class="clearfix"></div>


                        <!-- End form-group -->
                        <?php echo form_close(); ?>
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
    $(".master_configuration_active").addClass("active");
</script>