<!-- Content Wrapper. Contains page content -->
<style type="text/css">
   .swal-icon--error {
      border-color: #f27474;
      -webkit-animation: animateErrorIcon .5s;
      animation: animateErrorIcon .5s
   }

   .swal-icon--error__x-mark {
      position: relative;
      display: block;
      -webkit-animation: animateXMark .5s;
      animation: animateXMark .5s
   }

   .swal-icon--error__line {
      position: absolute;
      height: 5px;
      width: 47px;
      background-color: #f27474;
      display: block;
      top: 37px;
      border-radius: 2px
   }

   .swal-icon--error__line--left {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      left: 17px
   }

   .swal-icon--error__line--right {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      right: 16px
   }

   @-webkit-keyframes animateErrorIcon {
      0% {
         -webkit-transform: rotateX(100deg);
         transform: rotateX(100deg);
         opacity: 0
      }

      to {
         -webkit-transform: rotateX(0deg);
         transform: rotateX(0deg);
         opacity: 1
      }
   }

   @keyframes animateErrorIcon {
      0% {
         -webkit-transform: rotateX(100deg);
         transform: rotateX(100deg);
         opacity: 0
      }

      to {
         -webkit-transform: rotateX(0deg);
         transform: rotateX(0deg);
         opacity: 1
      }
   }

   @-webkit-keyframes animateXMark {
      0% {
         -webkit-transform: scale(.4);
         transform: scale(.4);
         margin-top: 26px;
         opacity: 0
      }

      50% {
         -webkit-transform: scale(.4);
         transform: scale(.4);
         margin-top: 26px;
         opacity: 0
      }

      80% {
         -webkit-transform: scale(1.15);
         transform: scale(1.15);
         margin-top: -6px
      }

      to {
         -webkit-transform: scale(1);
         transform: scale(1);
         margin-top: 0;
         opacity: 1
      }
   }

   @keyframes animateXMark {
      0% {
         -webkit-transform: scale(.4);
         transform: scale(.4);
         margin-top: 26px;
         opacity: 0
      }

      50% {
         -webkit-transform: scale(.4);
         transform: scale(.4);
         margin-top: 26px;
         opacity: 0
      }

      80% {
         -webkit-transform: scale(1.15);
         transform: scale(1.15);
         margin-top: -6px
      }

      to {
         -webkit-transform: scale(1);
         transform: scale(1);
         margin-top: 0;
         opacity: 1
      }
   }

   .swal-icon--warning {
      border-color: #f8bb86;
      -webkit-animation: pulseWarning .75s infinite alternate;
      animation: pulseWarning .75s infinite alternate
   }

   .swal-icon--warning__body {
      width: 5px;
      height: 47px;
      top: 10px;
      border-radius: 2px;
      margin-left: -2px
   }

   .swal-icon--warning__body,
   .swal-icon--warning__dot {
      position: absolute;
      left: 50%;
      background-color: #f8bb86
   }

   .swal-icon--warning__dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      margin-left: -4px;
      bottom: -11px
   }

   @-webkit-keyframes pulseWarning {
      0% {
         border-color: #f8d486
      }

      to {
         border-color: #f8bb86
      }
   }

   @keyframes pulseWarning {
      0% {
         border-color: #f8d486
      }

      to {
         border-color: #f8bb86
      }
   }

   .swal-icon--success {
      border-color: #a5dc86
   }

   .swal-icon--success:after,
   .swal-icon--success:before {
      content: "";
      border-radius: 50%;
      position: absolute;
      width: 60px;
      height: 120px;
      background: #fff;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg)
   }

   .swal-icon--success:before {
      border-radius: 120px 0 0 120px;
      top: -7px;
      left: -33px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 60px 60px;
      transform-origin: 60px 60px
   }

   .swal-icon--success:after {
      border-radius: 0 120px 120px 0;
      top: -11px;
      left: 30px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 0 60px;
      transform-origin: 0 60px;
      -webkit-animation: rotatePlaceholder 4.25s ease-in;
      animation: rotatePlaceholder 4.25s ease-in
   }

   .swal-icon--success__ring {
      width: 80px;
      height: 80px;
      border: 4px solid hsla(98, 55%, 69%, .2);
      border-radius: 50%;
      box-sizing: content-box;
      position: absolute;
      left: -4px;
      top: -4px;
      z-index: 2
   }

   .swal-icon--success__hide-corners {
      width: 5px;
      height: 90px;
      background-color: #fff;
      padding: 1px;
      position: absolute;
      left: 28px;
      top: 8px;
      z-index: 1;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg)
   }

   .swal-icon--success__line {
      height: 5px;
      background-color: #a5dc86;
      display: block;
      border-radius: 2px;
      position: absolute;
      z-index: 2
   }

   .swal-icon--success__line--tip {
      width: 25px;
      left: 14px;
      top: 46px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      -webkit-animation: animateSuccessTip .75s;
      animation: animateSuccessTip .75s
   }

   .swal-icon--success__line--long {
      width: 47px;
      right: 8px;
      top: 38px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-animation: animateSuccessLong .75s;
      animation: animateSuccessLong .75s
   }

   @-webkit-keyframes rotatePlaceholder {
      0% {
         -webkit-transform: rotate(-45deg);
         transform: rotate(-45deg)
      }

      5% {
         -webkit-transform: rotate(-45deg);
         transform: rotate(-45deg)
      }

      12% {
         -webkit-transform: rotate(-405deg);
         transform: rotate(-405deg)
      }

      to {
         -webkit-transform: rotate(-405deg);
         transform: rotate(-405deg)
      }
   }

   @keyframes rotatePlaceholder {
      0% {
         -webkit-transform: rotate(-45deg);
         transform: rotate(-45deg)
      }

      5% {
         -webkit-transform: rotate(-45deg);
         transform: rotate(-45deg)
      }

      12% {
         -webkit-transform: rotate(-405deg);
         transform: rotate(-405deg)
      }

      to {
         -webkit-transform: rotate(-405deg);
         transform: rotate(-405deg)
      }
   }

   @-webkit-keyframes animateSuccessTip {
      0% {
         width: 0;
         left: 1px;
         top: 19px
      }

      54% {
         width: 0;
         left: 1px;
         top: 19px
      }

      70% {
         width: 50px;
         left: -8px;
         top: 37px
      }

      84% {
         width: 17px;
         left: 21px;
         top: 48px
      }

      to {
         width: 25px;
         left: 14px;
         top: 45px
      }
   }

   @keyframes animateSuccessTip {
      0% {
         width: 0;
         left: 1px;
         top: 19px
      }

      54% {
         width: 0;
         left: 1px;
         top: 19px
      }

      70% {
         width: 50px;
         left: -8px;
         top: 37px
      }

      84% {
         width: 17px;
         left: 21px;
         top: 48px
      }

      to {
         width: 25px;
         left: 14px;
         top: 45px
      }
   }

   @-webkit-keyframes animateSuccessLong {
      0% {
         width: 0;
         right: 46px;
         top: 54px
      }

      65% {
         width: 0;
         right: 46px;
         top: 54px
      }

      84% {
         width: 55px;
         right: 0;
         top: 35px
      }

      to {
         width: 47px;
         right: 8px;
         top: 38px
      }
   }

   @keyframes animateSuccessLong {
      0% {
         width: 0;
         right: 46px;
         top: 54px
      }

      65% {
         width: 0;
         right: 46px;
         top: 54px
      }

      84% {
         width: 55px;
         right: 0;
         top: 35px
      }

      to {
         width: 47px;
         right: 8px;
         top: 38px
      }
   }

   .swal-icon--info {
      border-color: #c9dae1
   }

   .swal-icon--info:before {
      width: 5px;
      height: 29px;
      bottom: 17px;
      border-radius: 2px;
      margin-left: -2px
   }

   .swal-icon--info:after,
   .swal-icon--info:before {
      content: "";
      position: absolute;
      left: 50%;
      background-color: #c9dae1
   }

   .swal-icon--info:after {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      margin-left: -3px;
      top: 19px
   }

   .swal-icon {
      width: 80px;
      height: 80px;
      border-width: 4px;
      border-style: solid;
      border-radius: 50%;
      padding: 0;
      position: relative;
      box-sizing: content-box;
      margin: 20px auto
   }

   .swal-icon:first-child {
      margin-top: 32px
   }

   .swal-icon--custom {
      width: auto;
      height: auto;
      max-width: 100%;
      border: none;
      border-radius: 0
   }

   .swal-icon img {
      max-width: 100%;
      max-height: 100%
   }

   .swal-title {
      color: rgba(0, 0, 0, .65);
      font-weight: 600;
      text-transform: none;
      position: relative;
      display: block;
      padding: 13px 16px;
      font-size: 27px;
      line-height: normal;
      text-align: center;
      margin-bottom: 0
   }

   .swal-title:first-child {
      margin-top: 26px
   }

   .swal-title:not(:first-child) {
      padding-bottom: 0
   }

   .swal-title:not(:last-child) {
      margin-bottom: 13px
   }

   .swal-text {
      font-size: 16px;
      position: relative;
      float: none;
      line-height: normal;
      vertical-align: top;
      text-align: left;
      display: inline-block;
      margin: 0;
      padding: 0 10px;
      font-weight: 400;
      color: rgba(0, 0, 0, .64);
      max-width: calc(100% - 20px);
      overflow-wrap: break-word;
      box-sizing: border-box
   }

   .swal-text:first-child {
      margin-top: 45px
   }

   .swal-text:last-child {
      margin-bottom: 45px
   }

   .swal-footer {
      text-align: right;
      padding-top: 13px;
      margin-top: 13px;
      padding: 13px 16px;
      border-radius: inherit;
      border-top-left-radius: 0;
      border-top-right-radius: 0
   }

   .swal-button-container {
      margin: 5px;
      display: inline-block;
      position: relative
   }

   .swal-button {
      background-color: #7cd1f9;
      color: #fff;
      border: none;
      box-shadow: none;
      border-radius: 5px;
      font-weight: 600;
      font-size: 14px;
      padding: 10px 24px;
      margin: 0;
      cursor: pointer
   }

   .swal-button[not:disabled]:hover {
      background-color: #78cbf2
   }

   .swal-button:active {
      background-color: #70bce0
   }

   .swal-button:focus {
      outline: none;
      box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
   }

   .swal-button[disabled] {
      opacity: .5;
      cursor: default
   }

   .swal-button::-moz-focus-inner {
      border: 0
   }

   .swal-button--cancel {
      color: #555;
      background-color: #efefef
   }

   .swal-button--cancel[not:disabled]:hover {
      background-color: #e8e8e8
   }

   .swal-button--cancel:active {
      background-color: #d7d7d7
   }

   .swal-button--cancel:focus {
      box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
   }

   .swal-button--danger {
      background-color: #e64942
   }

   .swal-button--danger[not:disabled]:hover {
      background-color: #df4740
   }

   .swal-button--danger:active {
      background-color: #cf423b
   }

   .swal-button--danger:focus {
      box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
   }

   .swal-content {
      padding: 0 20px;
      margin-top: 20px;
      font-size: medium
   }

   .swal-content:last-child {
      margin-bottom: 20px
   }

   .swal-content__input,
   .swal-content__textarea {
      -webkit-appearance: none;
      background-color: #fff;
      border: none;
      font-size: 14px;
      display: block;
      box-sizing: border-box;
      width: 100%;
      border: 1px solid rgba(0, 0, 0, .14);
      padding: 10px 13px;
      border-radius: 2px;
      transition: border-color .2s
   }

   .swal-content__input:focus,
   .swal-content__textarea:focus {
      outline: none;
      border-color: #6db8ff
   }

   .swal-content__textarea {
      resize: vertical
   }

   .swal-button--loading {
      color: transparent
   }

   .swal-button--loading~.swal-button__loader {
      opacity: 1
   }

   .swal-button__loader {
      position: absolute;
      height: auto;
      width: 43px;
      z-index: 2;
      left: 50%;
      top: 50%;
      -webkit-transform: translateX(-50%) translateY(-50%);
      transform: translateX(-50%) translateY(-50%);
      text-align: center;
      pointer-events: none;
      opacity: 0
   }

   .swal-button__loader div {
      display: inline-block;
      float: none;
      vertical-align: baseline;
      width: 9px;
      height: 9px;
      padding: 0;
      border: none;
      margin: 2px;
      opacity: .4;
      border-radius: 7px;
      background-color: hsla(0, 0%, 100%, .9);
      transition: background .2s;
      -webkit-animation: swal-loading-anim 1s infinite;
      animation: swal-loading-anim 1s infinite
   }

   .swal-button__loader div:nth-child(3n+2) {
      -webkit-animation-delay: .15s;
      animation-delay: .15s
   }

   .swal-button__loader div:nth-child(3n+3) {
      -webkit-animation-delay: .3s;
      animation-delay: .3s
   }

   @-webkit-keyframes swal-loading-anim {
      0% {
         opacity: .4
      }

      20% {
         opacity: .4
      }

      50% {
         opacity: 1
      }

      to {
         opacity: .4
      }
   }

   @keyframes swal-loading-anim {
      0% {
         opacity: .4
      }

      20% {
         opacity: .4
      }

      50% {
         opacity: 1
      }

      to {
         opacity: .4
      }
   }

   .swal-overlay {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      text-align: center;
      font-size: 0;
      overflow-y: auto;
      background-color: rgba(0, 0, 0, .4);
      z-index: 10000;
      pointer-events: none;
      opacity: 0;
      transition: opacity .3s
   }

   .swal-overlay:before {
      content: " ";
      display: inline-block;
      vertical-align: middle;
      height: 100%
   }

   .swal-overlay--show-modal {
      opacity: 1;
      pointer-events: auto
   }

   .swal-overlay--show-modal .swal-modal {
      opacity: 1;
      pointer-events: auto;
      box-sizing: border-box;
      -webkit-animation: showSweetAlert .3s;
      animation: showSweetAlert .3s;
      will-change: transform
   }

   .swal-modal {
      width: 478px;
      opacity: 0;
      pointer-events: none;
      background-color: #fff;
      text-align: center;
      border-radius: 5px;
      position: static;
      margin: 20px auto;
      display: inline-block;
      vertical-align: middle;
      -webkit-transform: scale(1);
      transform: scale(1);
      -webkit-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
      z-index: 10001;
      transition: opacity .2s, -webkit-transform .3s;
      transition: transform .3s, opacity .2s;
      transition: transform .3s, opacity .2s, -webkit-transform .3s
   }

   @media (max-width:500px) {
      .swal-modal {
         width: calc(100% - 20px)
      }
   }

   @-webkit-keyframes showSweetAlert {
      0% {
         -webkit-transform: scale(1);
         transform: scale(1)
      }

      1% {
         -webkit-transform: scale(.5);
         transform: scale(.5)
      }

      45% {
         -webkit-transform: scale(1.05);
         transform: scale(1.05)
      }

      80% {
         -webkit-transform: scale(.95);
         transform: scale(.95)
      }

      to {
         -webkit-transform: scale(1);
         transform: scale(1)
      }
   }

   @keyframes showSweetAlert {
      0% {
         -webkit-transform: scale(1);
         transform: scale(1)
      }

      1% {
         -webkit-transform: scale(.5);
         transform: scale(.5)
      }

      45% {
         -webkit-transform: scale(1.05);
         transform: scale(1.05)
      }

      80% {
         -webkit-transform: scale(.95);
         transform: scale(.95)
      }

      to {
         -webkit-transform: scale(1);
         transform: scale(1)
      }
   }
</style>
<div class="content-wrapper">
   <!-- Main content -->
   <section class="content">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="padding: 0px 0px 15px 0;">
         <h1>
            General Settings
         </h1>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><i class="fa fa-sliders"></i> General Settings</li>
         </ol> -->
      </section>
      <!-- /.row start -->
      <div class="row">
         <!-- col-start -->
         <div class="col-md-12">
            <!-- form start -->

            <!-- <input type="hidden" name="csrf_modesy_token" value="488058d105c0feaeac8fc89c78d54f2a">                                                             -->
            <!-- <div class="form-group">
                  <label>Settings Language</label>
                    <select name="lang_id" class="form-control" onchange="window.location.href = '' style="max-width: 600px;">
                        <option value="1" selected="">English</option>
                    </select>
                  </div> 
                  -->
            <!-- Custom Tabs Start-->
            <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                  <!-- <li><a href="#tab_1" data-toggle="tab" aria-expanded="true">General Settings</a></li> -->
                  <li class="active"><a href="#tab_2" data-toggle="tab" aria-expanded="true">Contact Settings</a></li>
                  <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Social Media Settings</a></li>
                  <!-- <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Facebook Comments</a></li> -->
                  <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Custom CSS Codes</a></li>
                  <li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false">Custom JavaScript Codes</a></li>
                  <li class=""><a href="#tab_7" data-toggle="tab" aria-expanded="false">Cookies Warning</a></li>
                  <li class=""><a href="#tab_8" data-toggle="tab" aria-expanded="false">Header Footer </a></li>
               </ul>
               <!-- /.tab-content Start -->
               <div class="tab-content settings-tab-content">
                  <!-- include message block -->
                  <!-- tab_1 start -->
                  <!-- <div class="tab-pane active" id="tab_1">
                        <div class="form-group">
                          <label class="control-label">Application Name</label>
                          <input type="text" class="form-control" name="application_name" placeholder="Application Name" value="">
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label">Site Title</label>
                        <input type="text" class="form-control" name="site_title" placeholder="Site Title" value="">
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label">Pages</label>
                          <select class="form-control" name="section_id" id="section_id">
                            <option value="" selected="selected">Select Pages</option>
                            <option value="1">About Us</option>
                            <option value="2">Who We Are</option>
                            <option value="3">How To Take In Competition</option>
                            <option value="4">Terms And Conditions</option>
                            <option value="5">Privacy Policy</option>
                            <option value="6">Our Fronts Instructions</option>
                            <option value="7">Forgot Password Instructions</option>
                            <option value="8">Dashboard Instructions</option>
                            <option value="9">Become Official Co-ordinator Instructions</option>
                            <option value="10">Your Refrral Instructions</option>
                          </select>
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label">Homepage Title</label>
                        <input type="text" class="form-control" name="homepage_title" placeholder="Homepage Title" value="">
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label">Site Description</label>
                        <input type="text" class="form-control" name="site_description" placeholder="Site Description" value="">
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label">Keywords</label>
                        <textarea class="form-control text-area" name="keywords" placeholder="Keywords" style="min-height: 100px;"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Footer About Section</label>
                            <textarea class="form-control text-area" name="about_footer" placeholder="Footer About Section" style="min-height: 140px;"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Copyright</label>
                            <input type="text" class="form-control" name="copyright" placeholder="Copyright" value="Copyright 2021 Mplus Market - All Rights Reserved.">
                        </div>
                        
                        </div> -->
                  <!-- tab_1 end -->
                  <!-- tab_2 start -->
                  <div class="tab-pane active" id="tab_2">

                     <?php $attributes = array('method' => 'post', 'class' => 'email', 'id' => 'frmName', 'name' => 'frmName', 'enctype' => 'multipart/form-data'); ?>
                     <?= form_open('contact-setting-action', $attributes); ?>

                     <input type="hidden" name="pk_id_sec1" id="pk_id_sec1" value="<?php echo !empty($result[0]['id']) ? $result[0]['id'] : ''; ?>">

                     <div class="form-group">
                        <label class="control-label">Address</label>
                        <input type="text" class="form-control" name="contact_address" placeholder="Address" value="<?php echo !empty($result[0]['contact_address']) ? $result[0]['contact_address'] : ''; ?>">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <input type="text" class="form-control" name="contact_email" placeholder="Email Address" value="<?php echo !empty($result[0]['contact_email']) ? $result[0]['contact_email'] : ''; ?>">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Phone</label>
                        <input type="text" class="form-control" name="contact_phone" placeholder="Phone" value="<?php echo !empty($result[0]['contact_phone']) ? $result[0]['contact_phone'] : ''; ?>" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Contact Text</label>
                        <!-- <div class="summernote-1" name="contact_text"> -->

                        <textarea class="summernote-1" name="contact_text" id="contact_text"><?php echo !empty($result[0]['contact_text']) ? $result[0]['contact_text'] : ''; ?></textarea>
                        <!-- </div> -->
                     </div>

                     <div class="box-footer">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary submit pull-right">Save Changes</button>
                     </div>
                     <?= form_close(); ?>

                  </div>
                  <!-- tab_2 end -->
                  <!-- tab_3 start -->
                  <div class="tab-pane" id="tab_3">
                     <?php $attributes = array('method' => 'post', 'class' => 'email', 'id' => 'frmName', 'name' => 'frmName', 'enctype' => 'multipart/form-data'); ?>
                     <?= form_open('social-media-action', $attributes); ?>

                     <input type="hidden" name="pk_id_sec1" id="pk_id_sec1" value="<?php echo !empty($result[0]['id']) ? $result[0]['id'] : ''; ?>">

                     <div class="form-group">
                        <label class="control-label">Facebook URL</label>
                        <input type="text" class="form-control" name="facebook_url" placeholder="Facebook URL" value="<?php echo !empty($result[0]['facebook_url']) ? $result[0]['facebook_url'] : ''; ?>">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Twitter URL</label>
                        <input type="text" class="form-control" name="twitter_url" placeholder="Twitter URL" value="<?php echo !empty($result[0]['twitter_url']) ? $result[0]['twitter_url'] : ''; ?>">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Youtube URL</label>
                        <input type="text" class="form-control" name="youtube_url" placeholder="Youtube URL" value="<?php echo !empty($result[0]['youtube_url']) ? $result[0]['youtube_url'] : ''; ?>">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Instagram URL</label>
                        <input type="text" class="form-control" name="instagram_url" placeholder="Instagram URL" value="<?php echo !empty($result[0]['instagram_url']) ? $result[0]['instagram_url'] : ''; ?>">
                     </div>

                     <div class="form-group">
                        <label class="control-label">linkedin URL</label>
                        <input type="text" class="form-control" name="linkedin_url" placeholder="linkedin URL" value="<?php echo !empty($result[0]['linkedin_url']) ? $result[0]['linkedin_url'] : ''; ?>">
                     </div>

                     <div class="box-footer">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary submit pull-right">Save Changes</button>
                     </div>

                     <?= form_close(); ?>
                  </div>
                  <!-- tab_3 end -->
                  <!-- tab_4 start -->
                  <!-- <div class="tab-pane" id="tab_4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-xs-12">
                                    <label>Facebook Comments</label>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                                    <div class="iradio_square-purple" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="facebook_comment_status" value="1" id="facebook_comment_status_1" class="square-purple" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="facebook_comment_status_1" class="option-label">Enable</label>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                                    <div class="iradio_square-purple checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="facebook_comment_status" value="0" id="facebook_comment_status_2" class="square-purple" checked="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="facebook_comment_status_2" class="option-label">Disable</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Facebook Comments Plugin Code</label>
                            <textarea class="form-control text-area" name="facebook_comment" placeholder="Facebook Comments Plugin Code" style="min-height: 140px;"></textarea>
                        </div>
                        </div> -->
                  <!-- tab_4 end -->
                  <!-- tab_5 start -->
                  <div class="tab-pane" id="tab_5">

                     <?php $attributes = array('method' => 'post', 'class' => 'email', 'id' => 'frmName', 'name' => 'frmName', 'enctype' => 'multipart/form-data'); ?>

                     <?= form_open('admin/setting/general-setting/custom-css-setting', $attributes); ?>

                     <input type="hidden" name="pk_id_sec1" id="pk_id_sec1" value="<?php echo !empty($result[0]['id']) ? $result[0]['id'] : ''; ?>">

                     <div class="form-group">
                        <label class="control-label">Custom CSS Codes</label>&nbsp;<small class="small-title-inline">(These codes will be added to the header of the site.)</small>
                        <textarea class="form-control text-area" name="custom_css_codes" placeholder="Custom CSS Codes" style="min-height: 200px;"><?php echo !empty($result[0]['custom_css_codes']) ? $result[0]['custom_css_codes'] : ''; ?></textarea>
                     </div>
                     E.g. &lt;style&gt; body {background-color: #00a65a;} &lt;/style&gt;

                     <?= form_close(); ?>

                  </div>
                  <!-- tab_5 end -->
                  <!-- tab_6 start -->
                  <div class="tab-pane" id="tab_6">
                     <div class="form-group">
                        <label class="control-label">
                           Custom JavaScript Codes
                        </label>
                        &nbsp;
                        <small class="small-title-inline">
                           (These codes will be added to the footer of the site.)
                        </small>
                        <textarea class="form-control text-area" name="custom_javascript_codes" placeholder="Custom JavaScript Codes" style="min-height: 200px;">
                           </textarea>
                     </div>
                     E.g. &lt;script&gt; alert('Hello!'); &lt;/script&gt;
                  </div>
                  <!-- tab_6 end -->
                  <!-- tab_7 start -->
                  <div class="tab-pane" id="tab_7">
                     <div class="form-group">
                        <div class="row">
                           <div class="col-sm-3 col-xs-12 col-lang">
                              <label>Show Cookies Warning</label>
                           </div>
                           <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                              <div class="iradio_square-purple" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="cookies_warning" value="1" id="cookies_warning_1" class="square-purple" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="cookies_warning_1" class="option-label">Yes</label>
                           </div>
                           <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                              <div class="iradio_square-purple checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="cookies_warning" value="0" id="cookies_warning_2" class="square-purple" checked="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="cookies_warning_2" class="option-label">No</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label"></label>
                        <div class="summernote-2"></div>
                     </div>
                  </div>
                  <!-- tab_7 End -->
                  <!-- tab_8 start -->
                  <div class="tab-pane" id="tab_8">
                     <?php $attributes = array('method' => 'post', 'class' => 'email', 'id' => 'frmName', 'name' => 'frmName', 'enctype' => 'multipart/form-data'); ?>
                     <?= form_open('header-footer-action', $attributes); ?>

                     <input type="hidden" name="pk_id_sec1" id="pk_id_sec1" value="<?php echo !empty($result[0]['id']) ? $result[0]['id'] : ''; ?>">

                     <div class="form-group">
                        <div class="row">
                           <div class="form-group col-md-12">
                              <label class="control-label">Header</label>
                              <textarea class="form-control text-area" placeholder="Header" name="header_content" style="min-height: 100px;"><?php echo !empty($result[0]['header_content']) ? $result[0]['header_content'] : ''; ?></textarea>
                           </div>
                           <div class="form-group col-md-12">
                              <label class="control-label">Footer About Section</label>
                              <textarea class="form-control text-area" placeholder="Footer about section" name="footer_content" style="min-height: 100px;"><?php echo !empty($result[0]['footer_content']) ? $result[0]['footer_content'] : ''; ?></textarea>
                           </div>
                           <div class="form-group col-md-12">
                              <label class="control-label">Copyright</label>
                              <input type="text" class="form-control" name="copylight_content" placeholder="Copyright © 2021 Mplussoft All right reserved" value="<?php echo !empty($result[0]['copylight_content']) ? $result[0]['copylight_content'] : ''; ?>">
                           </div>

                           <div class="box-footer">
                              <button type="submit" name="submit" value="submit" class="btn btn-primary submit pull-right">Save Changes</button>
                           </div>
                        </div>
                     </div>
                     <?= form_close(); ?>

                  </div>
                  <!-- tab_8 end -->
               </div>
               <!-- /.tab-content End -->
               <!-- <div class="box-footer">
                     <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
                  </div> -->
               <?= form_close(); ?>

            </div>
            <!-- Custom Tabs End-->
            </form>
            <!-- form end -->
         </div>
         <!-- col-end -->
      </div>
      <!-- /.row end -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
   //active sidebar menu start
   $(".s_meun").removeClass("active");
   $(".settings_active").addClass("active");
   $(".general_settings_active").addClass("active");
   //active sidebar menu end

   //summernote start
   $(document).ready(function() {
      $('.summernote-1').summernote({
         height: 200,
      });
   });
   $(document).ready(function() {
      $('.summernote-2').summernote({
         height: 200,
      });
   });
   //summernote end

   //#$hri redio button functionality start
   $('.col-option').hover(
      function() {
         $(this).parent().find(".iradio_square-purple").removeClass("hover")
         $(this).find(".iradio_square-purple").addClass("hover");
      },
      function() {
         $(this).parent().find(".iradio_square-purple").removeClass("hover")
      });

   $('.col-option').click(function() {
      console.log("abc....................", $(this).parent().find(".iradio_square-purple"));
      $(this).parent().find(".iradio_square-purple").removeClass("checked");
      $(this).find(".iradio_square-purple").addClass("checked");
   });

   //#$hri redio button functionality end

   $(document).ready(function() {
      var hash = window.location.hash.replace('#', '');

      if (hash && $('.' + hash).length) {
         var point = $('.' + hash).offset().top - 40;

         if (window.Zepto) {
            window.scrollTo(0, point);
         } else {
            $(window).scrollTop($('.' + hash).offset().top - 40);
         };
      };

      $('.skin dt').click(function() {
         $(this).siblings().removeClass('selected').end().prev('dd').andSelf().addClass('selected');
      });

      $('.arrows .top, .arrows .bottom, .features .self, .skins-info .self, .usage .self').click(function(event) {
         var target = $(this).data('to'),
            target_offset = $('.' + target).offset().top;

         event.preventDefault();
         window.location.hash = target;

         if (window.Zepto) {
            window.scrollTo(0, target_offset - 40);
         } else {
            $('html, body').stop().animate({
               scrollTop: target_offset - 40
            }, 600);
         };
      });




      $('.colors li').click(function() {
         var self = $(this);

         if (!self.hasClass('active')) {
            self.siblings().removeClass('active');

            var skin = self.closest('.skin'),
               color = self.attr('class') ? '-' + self.attr('class') : '',
               checkbox = skin.data('icheckbox'),
               radio = skin.data('iradio'),
               checkbox_default = 'icheckbox_minimal',
               radio_default = 'iradio_minimal';

            if (skin.hasClass('skin-square')) {
               checkbox_default = 'icheckbox_square', radio_default = 'iradio_square';
               checkbox == undefined && (checkbox = 'icheckbox_square-green', radio = 'iradio_square-green');
            };

            if (skin.hasClass('skin-flat')) {
               checkbox_default = 'icheckbox_flat', radio_default = 'iradio_flat';
               checkbox == undefined && (checkbox = 'icheckbox_flat-red', radio = 'iradio_flat-red');
            };

            if (skin.hasClass('skin-line')) {
               checkbox_default = 'icheckbox_line', radio_default = 'iradio_line';
               checkbox == undefined && (checkbox = 'icheckbox_line-blue', radio = 'iradio_line-blue');
            };

            checkbox == undefined && (checkbox = checkbox_default, radio = radio_default);

            skin.find('input, .skin-states .state').each(function() {
               var element = $(this).hasClass('state') ? $(this) : $(this).parent(),
                  element_class = element.attr('class').replace(checkbox, checkbox_default + color).replace(radio, radio_default + color);

               element.attr('class', element_class);
            });

            skin.data('icheckbox', checkbox_default + color);
            skin.data('iradio', radio_default + color);
            self.addClass('active');
         };
      });

      $('.demo-methods dt .self').click(function() {
         var self = $(this),
            self_class = self.attr('class').replace('self ', '');

         switch (self_class) {
            case 'do-check':
               $('#input-1, #input-3').iCheck('check');
               break;
            case 'do-uncheck':
               $('#input-1, #input-3').iCheck('uncheck');
               break;
            case 'do-disable':
               $('#input-2, #input-4').iCheck('disable');
               break;
            case 'do-enable':
               $('#input-2, #input-4').iCheck('enable');
               break;
            case 'do-destroy':
               $('.demo-list input').iCheck('destroy');
               break;
            default:
               var text = self.hasClass('active') ? 'show code' : 'hide code';

               self.toggleClass('active').text(text);

               if (window.Zepto) {
                  $(this).closest('dt').next().toggle();
               } else {
                  $(this).closest('dt').next().slideToggle(200);
               };

               break;
         };
      });
   });
</script>
<script type="text/javascript">
   $('#linksubmit').click(function(e) {
      //e.preventDefault();
      var flag = 0;
      var fb_regex = /(?:https?:\/\/)?(?:www\.)?(?:facebook|fb|m\.facebook)\.(?:com|me)\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-\.]+)(?:\/)?/i;
      var facebook_link = $('#facebook_url').val();
      if (facebook_link != '') {
         if (!fb_regex.test(facebook_link)) {
            $('#facebook_link_error').addClass('text-danger').html('Enter valid facebook profile url.');
            flag = 1;
         }
      }



      var instagram_regex = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
      var instagram_link = $('#instagram_url').val();
      if (instagram_link != '') {
         if (!instagram_regex.test(instagram_link)) {
            $('#instagram_link_error').addClass('text-danger').html('Enter valid instagram profile url.');
            flag = 1;
         }
      }

      var reg_ex_twitter = /https?:\/\/(?:www\.)?twitter\.com\/([a-zA-Z0-9_]+)/i;
      var twitter_link = $('#twitter_url').val();
      if (twitter_link != '') {
         if (!reg_ex_twitter.test(twitter_link)) {
            $('#twitter_link_error').addClass('text-danger').html('Enter valid twitter profile url.');
            flag = 1;
         }
      }

      var reg_ex_youtube = /^(http(s)?:\/\/)?((w){3}.)?youtu(be|.be)?(\.com)?\/.+/gm;
      var youtube_link = $('#youtube_url').val();
      if (youtube_link != '') {
         if (!reg_ex_youtube.test(youtube_link)) {
            $('#youtube_link_error').addClass('text-danger').html('Enter valid youtube link url.');
            flag = 1;
         }
      }
      var reg_ex_linkedin = /^(http(s)?:\/\/)?((w){3}.)?youtu(be|.be)?(\.com)?\/.+/gm;
      var linkedin_link = $('#youtube_url').val();
      if (linkedin_link != '') {
         if (!reg_ex_linkedin.test(linkedin_link)) {
            $('#linkedin_link_error').addClass('text-danger').html('Enter valid linked link url.');
            flag = 1;
         }
      }



      if (flag == 1) {
         return false;
      }
   });
   $('#facebook_url').keyup(function(e) {
      $('#facebook_link_error').html('');
   });

   $('#instagram_url').keyup(function(e) {
      $('#instagram_link_error').html('');
   });
   $('#twitter_url').keyup(function(e) {
      $('#twitter_link_error').html('');
   });

   $('#youtube_url').keyup(function(e) {
      $('#youtube_link_error').html('');
   });
</script>