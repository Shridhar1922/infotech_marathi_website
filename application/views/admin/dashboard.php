<!-- Content Wrapper. Contains page content -->
<style>
   .table>tbody>tr>td {
      font-size: 16px !important;
   }
</style>
<div class="content-wrapper" style="">
   <!-- Main content -->
   <section class="content">
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <h1>Dashboard</h1>
      </section>
      <!-- Info boxes -->
      <div class="col-md-12 no-pad">
         <div class="box box-primary">
            <div class="box-body no-height">
               <div class="row" style="margin: 5px 5px 5px 5px;">
                  <div class="col-sm-6 col-lg-3 no-pad">
                     <div class="overview-item overview-item--c1">
                        <a href="<?= site_url('shubham/registered-user') ?>" class="overview__inner">
                           <div class="overview-box clearfix">
                              <div class="icon">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                              </div>
                              <div class="text">
                                 <h2><?php echo !empty($all_count) ? $all_count : '0'; ?></h2>
                                 <span>All Registered Users</span>

                              </div>

                           </div>

                        </a>
                        <div class="view-more">
                           <p class=""><a href="<?= site_url('shubham/registered-user') ?>">View More <i class="fa fa-eye" aria-hidden="true"></i> </a> </p>
                        </div>
                     </div>
                  </div>



               </div>
               <!-- /.row -->
            </div>
         </div>
      </div>

      <div class="col-md-12 no-pad">
         <div class="box box-primary">
            <div class="box-body no-height" style="background-color: #F6FAFC;">
               <div class="col-md-12 no-pad mb-15">
                  <div class="genius-cap">
                     <p class="mb-0">By District</p>
                  </div>
               </div>
               <div class="form-group col-md-3 pull-right" style="display: inline-flex; ">
                  <!-- <label for="">Sort By</label> -->
                  <select class="form-control" id="sort_by">
                     <option value="alpha">Alphabet</option>
                     <option value="number">Number</option>
                  </select>
                  <span id="order_type" onclick="asc_desc();" data-order-type="desc" style="position: relative; top:.5rem;left:5px">
                     <i class="fa fa-sort"></i>
                  </span>
               </div>


               <div class="clearfix"></div>
               <div class="counter_sort">
                  <?php if (!empty($city)) {
                     foreach ($city as $key => $value) : ?>
                        <div class="col-md-3">
                           <a href="<?= site_url('shubham/district-list') ?>/<?php echo $value['city_id']; ?>" class="d-flex align-items-center">
                              <div class="cardbox">
                                 <div class="cardboxbody">
                                    <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                       <div class="avatar-content">
                                          <i class="fa fa-user"></i>
                                       </div>
                                    </div>
                                    <div class="total-amount">
                                       <h5 class="mb-0"><?php echo $value['count']; ?></h5>
                                       <span class="text-muted"><?php echo $value['city']; ?></span>
                                    </div>
                                    <a href="<?= site_url('shubham/district-list') ?>/<?php echo $value['city_id']; ?>" class="view-icon"><i class="fa fa-eye" aria-hidden="true"></i> </a>
                                    <input type="hidden" id="city_id" value="">
                                    <!-- <a href="<?= site_url('shubham/district-list') ?>/<?php echo $value['city_id']; ?>" class="view-icon"><i class="fa fa-eye" aria-hidden="true"></i> </a>
                                 <input type="hidden" id="city_id" value="<?php echo $value['city_id']; ?>"> -->
                                 </div>
                              </div>
                           </a>
                        </div>
                     <?php endforeach ?>
                  <?php } ?>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
   $(".s_menu").removeClass("active");
   $(".dashboard_active").addClass("active");
</script>
<script>
   $('#sort_by').change(function(e) {
      var sort = $('#sort_by').val();
      if (sort != '') {
         $.ajax({
            type: "POST",
            url: base_url + "change-sort",
            data: {
               sort: sort,
            },
            success: function(data) {
               $(".counter_sort").html(data);
            },
         });

      }
   });

   function asc_desc() {
      var sort = $('#sort_by').val();
      var asc_type = $("#order_type").attr('data-order-type');
      if (sort != '') {
         $.ajax({
            type: "POST",
            url: base_url + "change-sort",
            data: {
               sort: sort,
               asc_type: asc_type,
            },
            success: function(data) {
               $(".counter_sort").html(data);
               if (asc_type == 'asc') {
                  $("#order_type").attr('data-order-type', 'desc');
               } else {
                  $("#order_type").attr('data-order-type', 'asc');
               }
            },
         });

      }
   }
</script>