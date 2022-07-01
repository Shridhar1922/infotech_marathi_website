<div class="modal-dialog" style="width: 780px;">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pending Payment Transfer </h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 div-box-modal mb-15">

                        <div class="col-md-4 form-group">
                            <label>Date & Time</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['created_at']) ? date('d-m-Y H:i:s', strtotime(($get_model_data[0]['created_at']))) : '-'; ?></h2>
                        </div>

                        <div class="col-md-4 form-group">
                            <label> Request ID</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['request_id']) ? $get_model_data[0]['request_id'] : '-'; ?></h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4 form-group">
                            <label>Name</label>
                            <h2 class="view-cnt"><?php echo !empty($get_name[0]['name']) ? $get_name[0]['name'] : '-'; ?></h2>
                        </div>

                        <div class="col-md-4 form-group">
                            <label> Mobile No.</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['mobile_number']) ? $get_model_data[0]['mobile_number'] : '-'; ?></h2>
                        </div>
                        <div class="col-md-4 form-group amount-box">
                            <div class="text-center">
                                <label> Request Amount</label>
                                <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['request_amount']) ? $get_model_data[0]['request_amount'] : '-'; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $attribute = array('role' => 'form', 'id' => 'bank_details_form');
                echo form_open('pending-payment-action', $attribute);
                ?>

                <div class="col-md-3 form-group">
                    <label>Bank Name </label>
                    <input type="text" name="bank_name" id="bank_name" class="form-control" value="<?php echo !empty($get_name[0]['bank_name']) ? $get_name[0]['bank_name'] : '-'; ?>" disabled>
                    <div class="text-danger" id=""></div>
                </div>
                <div class="col-md-3 form-group">
                    <label>Account No. </label>
                    <input type="text" name="acc_no" id="acc_no" class="form-control" value="<?php echo !empty($get_name[0]['acc_no']) ? $get_name[0]['acc_no'] : '-'; ?>" disabled>
                    <div class="text-danger" id=""></div>
                </div>

                <div class="col-md-3 form-group">
                    <label>Branch</label>
                    <input type="text" name="branch" id="branch" class="form-control" value="<?php echo !empty($get_name[0]['branch']) ? $get_name[0]['branch'] : '-'; ?>" disabled>
                    <div class="text-danger" id=""></div>
                </div>
                <div class="col-md-3 form-group">
                    <label>UPI ID </label>
                    <input type="text" name="UPI_id" id="UPI_id" class="form-control" value=" <?php echo !empty($get_name[0]['UPI_id']) ? $get_name[0]['UPI_id'] : '-'; ?>" disabled>
                    <div class="text-danger" id=""></div>
                </div>
                <div class="col-md-3 form-group">
                    <label>IFSC Code </label>
                    <input type="text" name="ifsc" id="ifsc" class="form-control" value=" <?php echo !empty($get_name[0]['ifsc']) ? $get_name[0]['ifsc'] : '-'; ?>" disabled>
                    <div class="text-danger" id=""></div>
                </div>

                <div class="col-md-3 form-group">
                    <label>Transaction ID <span style="color: red;">*</span></label>
                    <input type="text" name="transaction_id" id="transaction_id" class="form-control" value="">
                    <div class="text-danger" id=""></div>
                </div>

                <div class="col-md-3 form-group ">
                    <label>Date</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="hidden" name="id" value="<?php echo !empty($get_model_data[0]['id']) ? $get_model_data[0]['id'] : ''; ?>">
                        <input type="text" class="form-control pull-right date" id="transaction_date" name="transaction_date" autocomplete="off" value="">

                    </div>

                </div>
                <div class="col-md-12 form-group">
                    <label class="lablefnt">Remark</label>
                    <textarea type="text" name="remark" value="" id="remark" class="form-control" autocomplete="off" style="min-height: 80px;"></textarea>
                </div>

                <div class="col-md-12 form-group">
                    <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success save_btn submit" data-id="submit"><i class="fa fa-check-circle"></i> Submit</button>

                </div>
                <?php echo form_close(); ?>
            </div>
        </div>

    </div>

</div>
<script>
    //  datepicker script
    $(document).ready(function() {

        $('.date').datepicker({
            dateFormat: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
            changeMonth: true,
            changeYear: true
        });


    });
</script>