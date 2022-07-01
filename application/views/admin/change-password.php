 <!-- Content Wrapper. Contains page content -->
 <style>
   .password_eye_icon_1 {
     position: absolute;
     top: 77px;
     right: 20px;
   }
 </style>
 <style>
   .password_eye_icon_2 {
     position: absolute;
     top: 145px;
     right: 20px;
   }
 </style>
 <style>
   .password_eye_icon_3 {
     position: absolute;
     top: 214px;
     right: 20px;
   }
 </style>
 <div class="content-wrapper">
   <section class="content">
     <div class="row no-margin">
       <div class="col-md-12 no-pad">
         <section class="content-header">
           <h1>
             Change Your Password
           </h1>

         </section>

         <!-- Main content -->
         <section class="content" style="padding:5px 0px;">

           <div class="row">
             <div class="col-md-12">
               <!-- general form elements -->
               <div class="box box-primary">
                 <div class="box-header with-border">
                   <h3 class="box-title">Change Password</h3>
                 </div>
                 <!-- /.box-header -->
                 <!-- form start -->
                 <?php
                  $attribute = array('role' => 'form', 'id' => 'adminChangePassowrd');
                  echo form_open('change-password-setting', $attribute);
                  ?>
                 <div class="box-body">
                   <div class="form-group">
                     <label for="oldpass">Old Password</label>
                     <input type="password" class="form-control" id="old_pass" name="old_pass" value="">
                     <span toggle="#old_pass" class="fa fa-fw fa-eye-slash field-icon toggle-password password_eye_icon_1"></span>
                   </div>
                   <div class="form-group">
                     <label for="newpass">New Passowrd</label>
                     <input type="password" class="form-control" id="new_pass" name="new_pass" value="">
                     <span toggle="#new_pass" class="fa fa-fw fa-eye-slash field-icon toggle-password password_eye_icon_2"></span>
                   </div>
                   <div class="form-group">
                     <label for="cpassword">Confirm Password</label>
                     <input type="password" class="form-control" id="cpassword" name="cpassword" value="">
                     <span toggle="#cpassword" class="fa fa-fw fa-eye-slash field-icon toggle-password password_eye_icon_3"></span>
                   </div>
                 </div>
                 <!-- /.box-body -->

                 <div class="box-footer">
                   <button type="submit" class="btn btn-primary">Continue</button>
                 </div>
                 <?php echo form_close(); ?>
               </div>
               <!-- /.box -->
             </div>
           </div>
           <!-- /.row -->
         </section>
       </div>
     </div>
   </section>
 </div>
 <script>
   $(".s_meun").removeClass("active");

   $(".settings_active").addClass("active");
   $(".change_password_active").addClass("active");

   $(".toggle-password").click(function() {
     $(this).toggleClass("fa-eye fa-eye-slash");
     var input = $($(this).attr("toggle"));
     if (input.attr("type") == "password") {
       input.attr("type", "text");
     } else {
       input.attr("type", "password");
     }
   });
 </script>
 <!-- /.content-wrapper -->