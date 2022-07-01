<style>
  .content-wrapper{
    min-height: unset !important;
  }
</style>
<link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/select2.css">

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>Report
                    </h1>
                </section>
                <div class="box box-primary">
                    <div class="box-body left-box-body">
                        <div class="col-md-12 no-pad text-right">
                        <div class=" col-md-4 form-group no-pad-right text-left" style="margin-top:30px;margin-bottom:30px">
    <p>All Registered Users: <b><?php echo $all_count; ?></b></p><p>
    </p></div>
                           <div class="col-md-offset-3 col-md-3 form-group no-pad text-right" style="margin-top:30px;margin-bottom:30px">
                                    
                                   <div class="cus_radio_btns">
                                       <div class="radio_btn">
                                         <input type="radio"class="radioBtnClass" checked="checked"  name="week" value="week" id="week"> Weekly                                       
                                       </div>
                                       <div class="radio_btn">
                                         <input type="radio"class="radioBtnClass"  name="week" value="last_month" id="last_month"> last 30 days                                       
                                       </div>
                                       <div class="radio_btn">
                                         <input type="radio" class="radioBtnClass" name="week" value="month" id="month"> Monthly                                       
                                       </div>

                                   </div>
                                   
                                </div>
                                 <div class="col-md-2 form-group no-pad text-left" style="margin-top:30px;margin-bottom:30px">
                                       <select class="form-control select2" id="city_id" name="city_id">
                                      <option value="0">All City</option>
                                      <?php if (!empty($city)) : ?>
                                          <?php foreach ($city as $key => $value) : ?>
                                              <option value="<?php echo ($value['city_id']); ?>"<?php if(!empty($this->input->get('city_id'))){
                                                  if($value['city_id'] == $this->input->get('city_id')){
                                                      echo "selected";
                                                    }
                                              }?>><?php echo ucwords($value['city']); ?></option>
                                              <?php endforeach ?>
                                      <?php endif ?>

                                      </select>
                                </div>
                               
                        </div>
                        

                        <div id="divGraph" class="col-md-12 no-pad">
                            <canvas id="chart"></canvas>
                        </div>
                    </div>
                    <!-- End box-body -->
                </div>
                <!-- End box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>

<script>
$('#city_id').change(function (e) { 
    var city_id = $('#city_id').val(); 
    if($("input[type='radio'].radioBtnClass").is(':checked')) {
      var radio_btn = $("input[type='radio'].radioBtnClass:checked").val();
    }else{
      var radio_btn = '';
    }
    $.ajax({
          url: "<?php echo base_url('bar-chart') ?>",
          type: "POST",
          data: {
              city_id: city_id,
              radio_btn:radio_btn
          },
          dataType: "json",
          beforeSend: function() {

          },
          success: function(data) {

            console.log(data.length);
            if(data.length == 7){
              <?php
              $date = array();
              for ($i = 6; $i > 0; $i--) {
                $date[$i] =  date('l', strtotime("-$i days"));
              }
              $date[0] = date('l');
              $result = "'" . implode ( "', '", $date ) . "'";
              ?>
              var dataObj =  JSON.parse(JSON.stringify(data.reverse()))
              myBar.data.datasets[0].data = dataObj;
              myBar.data.labels.pop();
              myBar.data.labels=[<?php echo $result;?>];
              // myBar.data.datasets[0].data = [result];
              myBar.update();
            }else if(data.length == 30){
              <?php
              $date = array();
              for ($i = 29; $i > 0; $i--) {
                $date[$i] =  date('d-m', strtotime("-$i days"));
              }
              $date[0] = date('d-m');
              $result = "'" . implode ( "', '", $date ) . "'";
              ?>
              var dataObj =  JSON.parse(JSON.stringify(data.reverse()))
              myBar.data.datasets[0].data = dataObj;
              myBar.data.labels.pop();
              myBar.data.labels=[<?php echo $result;?>];
              // myBar.data.datasets[0].data = [result];
              myBar.update();
            }else{
              <?php
            $date = array();
            for ($i = 11; $i > 0; $i--) {
              $date[$i] =  date('M', strtotime("-$i month"));
            }
            $date[0] = date('M');
            $result = "'" . implode ( "', '", $date ) . "'";
            ?>
            var dataObj =  JSON.parse(JSON.stringify(data.reverse()))
            myBar.data.datasets[0].data = dataObj;
            myBar.data.labels.pop();
            myBar.data.labels=[<?php echo $result;?>];
            // myBar.data.datasets[0].data = [result];
            myBar.update();
            }
            
          }
    });
});
</script>

<script>
$("input[type='radio']").change(function (e) { 

    var city_id = $('#city_id').val(); 
    if($("input[type='radio'].radioBtnClass").is(':checked')) {
      var radio_btn = $("input[type='radio'].radioBtnClass:checked").val();
    }else{
      var radio_btn = '';
    }
    // alert(radio_btn);
    $.ajax({
          url: "<?php echo base_url('bar-chart') ?>",
          type: "POST",
          data: {
              city_id: city_id,
              radio_btn:radio_btn
          },
          dataType: "json",
          beforeSend: function() {

          },
          success: function(data) {
            console.log(data.length);
            if(data.length == 7){
              <?php
              $date = array();
              for ($i = 6; $i > 0; $i--) {
                $date[$i] =  date('l', strtotime("-$i days"));
              }
              $date[0] = date('l');
              $result = "'" . implode ( "', '", $date ) . "'";
              ?>
              var dataObj =  JSON.parse(JSON.stringify(data.reverse()))
              myBar.data.datasets[0].data = dataObj;
              myBar.data.labels.pop();
              myBar.data.labels=[<?php echo $result;?>];
              // myBar.data.datasets[0].data = [result];
              myBar.update();
            }else if(data.length == 30){
              <?php
              $date = array();
              for ($i = 29; $i > 0; $i--) {
                $date[$i] =  date('d-m', strtotime("-$i days"));
              }
              $date[0] = date('d-m');
              $result = "'" . implode ( "', '", $date ) . "'";
              ?>
              var dataObj =  JSON.parse(JSON.stringify(data.reverse()))
              myBar.data.datasets[0].data = dataObj;
              myBar.data.labels.pop();
              myBar.data.labels=[<?php echo $result;?>];
              // myBar.data.datasets[0].data = [result];
              myBar.update();
            }else{
              <?php
            $date = array();
            for ($i = 11; $i > 0; $i--) {
              $date[$i] =  date('M', strtotime("-$i month"));
            }
            $date[0] = date('M');
            $result = "'" . implode ( "', '", $date ) . "'";
            ?>
            var dataObj =  JSON.parse(JSON.stringify(data.reverse()))
            myBar.data.datasets[0].data = dataObj;
            myBar.data.labels.pop();
            myBar.data.labels=[<?php echo $result;?>];
            // myBar.data.datasets[0].data = [result];
            myBar.update();
            }
          }
    });
});
</script>


<script src="<?= site_url('assets/commonarea/'); ?>dist/js/chart.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>dist/js/select2.js"></script>
<script>
  $(".select2").select2(); 
</script>

<script>
  <?php
         $date = array();
         for ($i = 6; $i > 0; $i--) {
           $date[$i] =  date('l', strtotime("-$i days"));
         }
         $date[0] = date('l');
        $result = "'" . implode ( "', '", $date ) . "'";
      ?>
var color = Chart.helpers.color;

var barChartData = {

  labels: [<?php echo $result; ?>],
  datasets: [{

    label: 'Total Register user count',
    backgroundColor: '#1769aa',
    data: [
      <?php
        for ($i=6; $i >= 0 ; $i--) { ?>
       <?php echo $members_count[$i];?>,
       <?php } ?>
    ],
  }]
};

window.onload = function() {
  var ctx = document.getElementById('chart').getContext('2d');
  window.myBar = new Chart(ctx, {
    type: 'bar',
    data: barChartData,
    options: {
      responsive: true,
      legend: {
        position: 'top',
      },
      title: {
        display: false,
        text: 'Monthly Registered Users Count'
      },
      scales: {
        xAxes: [{
            barPercentage: 0.4,
            gridLines : {display : true}      
        }
        ],
        yAxes: [{
                gridLines : {display : true},
                ticks: {
                    suggestedMin: 50,
                    suggestedMax: 100
                }
            }]
    }
    }
  });
};
</script>


<script type="text/javascript">
    $(".s_meun").removeClass("active");

    $(".report_active").addClass("active");
</script>


</body>
</html>