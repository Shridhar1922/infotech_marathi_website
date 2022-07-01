<div class="modal-dialog" style="width: 780px;">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Completed Payment Transfer </h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 div-box-modal mb-15">

                        <div class="col-md-4 form-group">
                            <label>Date & Time</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['updated_at']) ? date('d-m-Y H:i:s', strtotime(($get_model_data[0]['updated_at']))) : '-'; ?></h2>
                        </div>

                        <div class="col-md-4 form-group">
                            <label> Request ID</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['request_id']) ? $get_model_data[0]['request_id'] : '-'; ?></h2>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-4 form-group">
                            <label>Name</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_name[0]['name']) ? $get_name[0]['name'] : '-'; ?></h2>
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
                        <div class="clearfix"></div>
                        <div class="col-md-4 form-group">
                            <label> Transaction ID</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['transaction_id']) ? $get_model_data[0]['transaction_id'] : '-'; ?></h2>
                        </div>
                        <div class="col-md-4 form-group">
                            <label> Bank Name</label>
                            <h2 class="view-cnt"><?php echo !empty($get_name[0]['bank_name']) ? $get_name[0]['bank_name'] : '-'; ?></h2>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Account No. </label>
                            <h2 class="view-cnt"><?php echo !empty($get_name[0]['acc_no']) ? $get_name[0]['acc_no'] : '-'; ?></h2>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Branch</label>
                            <h2 class="view-cnt"><?php echo !empty($get_name[0]['branch']) ? $get_name[0]['branch'] : '-'; ?></h2>
                        </div>
                        <div class="col-md-4 form-group">
                            <label> UPI ID</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_name[0]['UPI_id']) ? $get_name[0]['UPI_id'] : '-'; ?></h2>
                        </div>
                        <div class="col-md-4 form-group">
                            <label> Date</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['transaction_date']) ? $get_model_data[0]['transaction_date'] : '-'; ?></h2>
                        </div>

                        <div class="col-md-12 form-group">
                            <label> Remark</label>
                            <h2 class="view-cnt"> <?php echo !empty($get_model_data[0]['remark']) ? $get_model_data[0]['remark'] : '-'; ?></h2>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>