<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="overflow:hidden">
   <!-- Content Header (Page header) -->
   <section class="content">
      <div class="row no-margin">
         <div class="col-md-12 no-pad">
            <section class="content-header">
               <h1>
                  Visual Settings
               </h1>

            </section>
            <!-- Main content -->
            <section class="content" style="padding:5px 0px;">
               <div class="row">
                  <div class="col-sm-12 col-xs-12 col-md-12">
                     <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                        <?php
                        $attribute = array('role' => 'form', 'id' => 'save-visual-setting', 'enctype' => 'multipart/form-data');
                        echo form_open('save-visual-setting', $attribute);
                        ?>
                        <div class="box-body">
                           <!-- include message block -->
                           <!--print error messages-->
                           <!--print custom error message-->
                           <!--print custom success message-->
                           <!-- <div class="form-group">
                        <label>Color</label>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="visual-color-box" data-color="default" style="background-color: #222;"><i class="fa fa-check"></i></div>
                              <div class="visual-color-box" data-color="pacific_blue" style="background-color: #09b1ba;"></div>
                              <div class="visual-color-box" data-color="violet" style="background-color: #6770B7;"></div>
                              <div class="visual-color-box" data-color="meadow" style="background-color: #1abc9c;"></div>
                              <div class="visual-color-box" data-color="blue" style="background-color: #1da7da;"></div>
                              <div class="visual-color-box" data-color="amaranth" style="background-color: #e91e63;"></div>
                              <div class="visual-color-box" data-color="red" style="background-color: #e74c3c;"></div>
                              <div class="visual-color-box" data-color="orange" style="background-color: #f86923;"></div>
                              <div class="visual-color-box" data-color="yellow" style="background-color: #ffbb02;"></div>
                              <div class="visual-color-box" data-color="bayoux" style="background-color: #495d7f;"></div>
                              <div class="visual-color-box" data-color="cascade" style="background-color: #95a5a6;"></div>
                              <div class="visual-color-box" data-color="royal_blue" style="background-color: #2a41e8;"></div>
                              <input type="hidden" name="site_color" id="input_user_site_color" value="default">
                           </div>
                        </div>
                     </div> -->
                           <div class="form-group">
                              <label class="control-label">Logo (180x50px)</label>
                              <div style="margin-bottom: 10px;">
                                 <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['logo']) ? $visualSettings[0]['logo'] : 'assets/commonarea/dist/img/default.png'; ?>" id="logoImg" alt="logo" style="max-width: 160px; max-height: 160px;">
                              </div>
                              <div class="display-block">
                                 <a class="btn btn-success btn-sm btn-file-upload">
                                    Select Logo <input type="file" name="logo" id="logo" size="40" accept=".png, .jpg, .jpeg, .gif, .svg" onchange="change_img('logo','logoImg');">
                                 </a>
                                 (.png, .jpg, .jpeg, .gif, .svg)
                              </div>
                              <!-- <span class="label label-info" id="upload-file-info1"></span> -->
                           </div>
                           <div class="form-group">
                              <label class="control-label">Logo Email</label>
                              <div style="margin-bottom: 10px;">
                                 <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['email_logo']) ? $visualSettings[0]['email_logo'] : 'assets/commonarea/dist/img/default.png'; ?>" alt="logo" id="previewImg" style="max-width: 160px; max-height: 160px;">
                              </div>
                              <div class="display-block">
                                 <a class="btn btn-success btn-sm btn-file-upload">
                                    Select Logo <input type="file" name="email_logo" id="email_logo" size="40" accept=".png, .jpg, .jpeg" onchange="change_img('email_logo','previewImg');">
                                 </a>
                                 (.png, .jpg, .jpeg)
                              </div>
                              <!-- <span class="label label-info" id="upload-file-info3"></span> -->
                           </div>
                           <div class="form-group">
                              <label class="control-label">Favicon (16x16px)</label>
                              <div style="margin-bottom: 10px;">
                                 <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['favicon']) ? $visualSettings[0]['favicon'] : 'assets/commonarea/dist/img/default.png'; ?>" alt="favicon" id="faviconImg" style="max-width: 100px; max-height: 100px;">
                              </div>
                              <div class="display-block">
                                 <a class="btn btn-success btn-sm btn-file-upload">
                                    Select Favicon <input type="file" name="favicon" id="favicon" size="40" accept=".png" onchange="change_img('favicon','faviconImg');">
                                 </a>
                                 (.png)
                              </div>
                              <!-- <span class="label label-info" id="upload-file-info2"></span> -->
                           </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                           <button type="submit" class="btn btn-primary pull-right submit">Save Changes</button>
                        </div>
                        <!-- /.box-footer -->
                        <?php echo form_close(); ?>
                        <!-- form end -->
                     </div>
                     <!-- /.box -->
                  </div>
               </div>
            </section>
         </div>
      </div>
   </section>
</div>
<script type="text/javascript">
   $(".s_meun").removeClass("active");

   $(".settings_active").addClass("active");
   $(".visual_settings_active").addClass("active");


   //select site color
   //   $(document).on('click', '.visual-color-box', function () {
   //       var data_color = $(this).attr('data-color');
   //       $('.visual-color-box').empty();
   //       $(this).html('<i class="fa fa-check"></i>');
   //       $('#input_user_site_color').val(data_color);
   //   });

   function change_img(img, preview_img) {
      var oFReader = new FileReader();
      oFReader.readAsDataURL($('#' + img)[0].files[0]);

      oFReader.onload = function(oFREvent) {
         $('#' + preview_img).attr('src', oFREvent.target.result);
      }
   }
</script>