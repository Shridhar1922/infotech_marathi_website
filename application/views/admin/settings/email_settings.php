<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="overflow:hidden">
   <!-- Main content -->   
   <section class="content">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="padding: 0px 0px 15px 0;">
         <h1>
            Email Settings
         </h1>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active"><i class="fa fa-envelope"></i> Email Settings</li>
            </ol> -->
      </section>
      <!-- form start -->
      <div class="row">
         <form action="" method="post" accept-charset="utf-8">
            <div class="col-lg-6 col-md-12">
               <div class="box box-primary">
                  <div class="box-header with-border">
                     <h3 class="box-title">Email Settings</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                     <!-- include message block -->
                     <div class="form-group">
                        <label class="control-label">Mail Library</label>
                        <select name="mail_library" class="form-control" onchange="">
                           <option value="swift" selected="">Swift Mailer</option>
                           <option value="php">PHP Mailer</option>
                           <option value="codeigniter">CodeIgniter Mail</option>
                        </select>
                     </div>
                     <div class=" form-group">
                        <label class="control-label">Mail Protocol</label>
                        <select name="mail_protocol" class="form-control">
                           <option value="smtp" selected="">SMTP</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label class="control-label">Mail Title</label>
                        <input type="text" class="form-control" name="mail_title" placeholder="Mail Title" value="Modesy">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Mail Host</label>
                        <input type="text" class="form-control" name="mail_host" placeholder="Mail Host" value="">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Mail Port</label>
                        <input type="text" class="form-control" name="mail_port" placeholder="Mail Port" value="">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Mail Username</label>
                        <input type="text" class="form-control" name="mail_username" placeholder="Mail Username" value="">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Mail Password</label>
                        <input type="password" class="form-control" name="mail_password" placeholder="Mail Password" value="">
                     </div>
                     <div class="callout" style="max-width: 500px;margin-top: 30px;">
                        <h4>Gmail SMTP</h4>
                        <p>To send e-mails with Gmail server, please read Email Settings section in our documentation.</p>
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" name="submit" value="email" class="btn btn-primary pull-right">Save Changes</button>
                  </div>
                  <!-- /.box-footer -->
               </div>
            </div>
         </form>
         <!-- form end -->
         <form action="" method="post" accept-charset="utf-8">
            <div class="col-lg-6 col-md-12">
               <div class="box box-primary">
                  <div class="box-header with-border">
                     <h3 class="box-title">Email Verification</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                     <!-- include message block -->
                     <div class="form-group">
                        <div class="row">
                           <div class="col-sm-12 col-xs-12">
                              <label>Email Verification</label>
                           </div>
                           <div class="col-sm-4 col-xs-12 col-option">
                              <div class="iradio_square-purple" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="email_verification" value="1" id="email_verification_1" class="square-purple" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="email_verification_1" class="option-label">Enable</label>
                           </div>
                           <div class="col-sm-4 col-xs-12 col-option">
                              <div class="iradio_square-purple checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="email_verification" value="0" id="email_verification_2" class="square-purple" checked="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="email_verification_2" class="option-label">Disable</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" name="submit" value="verification" class="btn btn-primary pull-right">Save Changes</button>
                  </div>
               </div>
            </div>
         </form>
         <!-- form end -->
         <!-- form end -->
         <form action="" method="post" accept-charset="utf-8">
            <div class="col-lg-6 col-md-12">
               <div class="box box-primary">
                  <div class="box-header with-border">
                     <h3 class="box-title">Send Test Email</h3>
                     <br>
                     <small class="small-title">You can send a test mail to check if your mail server is working.</small>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                     <!-- include message block -->
                     <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address" required="">
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" name="submit" value="contact" class="btn btn-primary pull-right">Send Email</button>
                  </div>
               </div>
            </div>
         </form>
         <!-- form end -->
      </div>
   </section>
</div>
<script type="text/javascript">
   $(".s_meun").removeClass("active");
     $(".settings_active").addClass("active");
     $(".email_settings_active").addClass("active");
   
   //#$hri redio button functionality start
     $('.col-option').hover(
     function() {
       $(this).parent().find(".iradio_square-purple").removeClass("hover")
       $(this).find(".iradio_square-purple").addClass("hover");
     },
     function() {
       $(this).parent().find(".iradio_square-purple").removeClass("hover")
     });
     
     $('.col-option').click(function(){
       console.log("abc....................", $(this).parent().find(".iradio_square-purple"));   
       $(this).parent().find(".iradio_square-purple").removeClass("checked");
       $(this).find(".iradio_square-purple").addClass("checked");
     });
   
   //#$hri redio button functionality end
   
   
</script>