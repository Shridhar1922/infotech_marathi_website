<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">

        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding: 0px 0px 15px 0;">
            <h1>
                Content Management System
            </h1>
            <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-bookmark-o"></i> CMS</li>
      </ol> -->
        </section>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">

                        <!---------------------- form start --------------------->
                        <?php
                        $attribute = array('role' => 'form', 'id' => 'cms_form', 'enctype' => 'multipart/form-data');
                        echo form_open('cms-action', $attribute);
                        ?>
                        <div class="row">


                            <div class="col-md-12 form-group">
                                <label class="lablefnt">Pages </label>
                                <input type="hidden" id="txtid" name="txtid" value="">
                                <select class="form-control" name="page_id" id="page_id">
                                    <option value="" selected="selected">Select Page</option>
                                    <?php if (!empty($cms)) : ?>
                                        <?php foreach ($cms as $key => $value) : ?>
                                            <option value="<?= $value['id']; ?>"><?= ucwords($value['page_title']); ?></option>
                                        <?php endforeach ?>
                                    <?php endif ?>

                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 form-group">
                                <label class="lablefnt">Content </label>
                                <textarea type="text" class="summernote" name="cms_text" id ="cms_text"></textarea>
                            </div>
                            <!-- <div class="col-md-6 form-group">
                            <label class="lablefnt">Title </label>
                            <input type="text" name="title_name" value="" id="title_id" class="form-control" autocomplete="off">
                        </div> -->
                            <div class="clearfix"></div>
                            <div class="col-md-12 form-group">
                                <label class="lablefnt">Meta Title </label>
                                <input type="text" name="cms_meta_title"  id="cms_meta_title" class="form-control" autocomplete="off">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 form-group">
                                <label class="lablefnt">Meta Keywords</label>
                                <input type="text" name="cms_meta_keywords" id="cms_meta_keywords" class="form-control" autocomplete="off">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 form-group">
                                <label class="lablefnt">Description</label>
                                <textarea type="text" name="cms_description" id="cms_description" class="form-control" autocomplete="off"></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <!---------------------- submit button start--------------------->
                            <div class="col-md-12">
                                <button type="submit" name="cmsBtn" value="submit" class="btn btn-success submit" id="Sec1SubmitBtn"><i class="fa fa-check-circle"></i> Submit</button>
                                <a href="">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        Cancel
                                    </button>
                                </a>
                            </div>
                            <!-- <div class="col-md-12">
                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div> -->

                            <!---------------------- submit button end--------------------->
                        </div>
                        <?php echo form_close(); ?>
                        <!---------------------- form end --------------------->
                    </div>


                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    $(".s_meun").removeClass("active");

    $(".content_management_active").addClass("active");
    $(".cms_active").addClass("active");

    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
        });
    });
</script>

<script>
  function getCMSData($this) {
    let val = $this.val();
    if(val){
      $.ajax({
        url: "<?php echo base_url('get-cms-data-by-page'); ?>",
        type: 'POST',
        data: {
          page_title: val
        },
        dataType: 'json',
        beforeSend: function() {
        },
        success: function(data) {
          $('.note-editable').html(data.cms_text);
        //   $("#cms_text").val(data.cms_text);
          $("#txtid").val(data.id);
        //   $("#application_name").val(data.page_title);
          $("#cms_meta_title").val(data.cms_meta_title);
          $("#cms_description").val(data.cms_description);
          $("#cms_meta_keywords").val(data.cms_meta_keywords);
        }
      });
    }else{
      $('.note-editable').html('');
    //   $("#cms_text").val(data.cms_text);
      $("#txtid").val('');
    //   $("#application_name").val('');
      $("#cms_meta_title").val('');
      $("#cms_description").val('');
      $("#cms_meta_keywords").val('');
    }
   
  }

  $("#page_id").change(function() {
    let $this = $(this);
    getCMSData($this);
  });
</script>
<script>
  $('#cms_btn').click(function(event) {
    var values = $('.note-editable').html();
    $('#cms_content').val(values);
  });

  jQuery(document).ready(function($) {
    var values = $('.note-editable').html();
    $('#cms_content').val(values);
  });
</script>