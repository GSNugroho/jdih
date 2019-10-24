<?php
    $this->load->view('jdih/jdih');
?>
    <script src="<?php echo base_url('assets/bower_components/chart.js/Chart.js')?>"></script>
    <script src="<?php echo base_url('assets/bower_components/highchart/highcharts.js')?>"></script>
    <div class="container">
    <section class="content-header">
      <h1>
        Beranda
      </h1>
    </section>
        <!-- Main content -->
        <section class="content">
      
          <div class="row">
            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Jumlah Peraturan Per Jenis</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                <div class="chart">
                  <!-- <canvas id="pieChart" style="height:250px"></canvas> -->
                  <div id="pieChart" style="min-width: 400px; height: 400px; max-width: auto; margin: 0 auto"></div>
                  <!-- <div id="js-legend" class="chart-legend"></div> -->
                </div>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Jumlah Peraturan Per Ruang Lingkup</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                <div class="chart">
                  <!-- <canvas id="pieChart2" style="height:250px"></canvas> -->
                  <div id="pieChart2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                  <!-- <div id="js-legend2" class="chart-legend"></div> -->
                </div>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.nm_jdih_jns
           TABLE: LATEST ORDERS -->
          <div class="row">
          <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Peraturan Terakhir Ditambahkan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dt_prtn_akhir">
                  <thead>
                  <tr>
                    <th>Jenis Peraturan</th>
                    <th>Nomor Peraturan</th>
                    <th>Tahun</th>
                    <th>Tentang</th>
                    <th>Ruang Lingkup</th>
                    <th>Tanggal Upload</th>
                    <th>Pdf</th>
                  </tr>
                  <tbody>
                    <?php 
                      foreach($prtn as $row){
                        $en_kd = base64_encode($row->kd_jdih);
                        if($row->r_lingkup == 1){ $lingkup = 'Nasional';}else{$lingkup = 'Internal RS';}
                        echo '<tr><td>'.$row->nm_jdih_jns.'</td><td>'.$row->nmr_prtn.'</td><td>'.$row->th_prtn.'</td><td>'.$row->nm_prtn.'</td><td>'.$lingkup.'</td><td>'.date('d-m-Y', strtotime($row->date_create)).'</td><td><a href="Jdih/read_pdf/'.$row->kd_jdih.'" target="_blank">
                        <i class="fa fa-file-pdf-o"></i>
                        </a></td></tr>';
                      }
                    ?>
                  </tbody>
                  </thead>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-footer -->
          </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- <div class="col-md-4"> -->
          <!-- Info Boxes Style 2 -->
          <!-- <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Inventory</span>
              <span class="info-box-number">5,200</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
          <!-- <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">92,050</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
              <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
          <!-- <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Downloads</span>
              <span class="info-box-number">114,381</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
              <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
          <!-- <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Messages</span>
              <span class="info-box-number">163,921</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->

          <!-- <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Browser Usage</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div> -->
            <!-- /.box-header -->
            <!-- <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="150"></canvas>
                  </div> -->
                  <!-- ./chart-responsive -->
                <!-- </div> -->
                <!-- /.col -->
                <!-- <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                    <li><i class="fa fa-circle-o text-green"></i> IE</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                    <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                    <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                  </ul>
                </div> -->
                <!-- /.col -->
              <!-- </div> -->
              <!-- /.row -->
            <!-- </div> -->
            <!-- /.box-body -->
            <!-- <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">United States of America
                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                </li>
                <li><a href="#">China
                  <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
              </ul>
            </div> -->
            <!-- /.footer -->
          <!-- </div> -->
          <!-- /.box -->

          <!-- PRODUCT LIST -->
          <!-- <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Terakhir Jadwal Ditambahkan</h3> -->

              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div> -->
            <!-- </div> -->
            <!-- /.box-header -->
            <!-- <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item"> -->
                  <!-- <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div> -->
                  <!-- <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Samsung TV
                      <span class="label label-warning pull-right">$1800</span></a>
                    <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                  </div>
                </li> -->
                <!-- /.item -->
                <!-- <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Bicycle
                      <span class="label label-info pull-right">$700</span></a>
                    <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                  </div>
                </li> -->
                <!-- /.item -->
                <!-- <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Xbox One <span
                        class="label label-danger pull-right">$350</span></a>
                    <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                  </div>
                </li> -->
                <!-- /.item -->
                <!-- <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">PlayStation 4
                      <span class="label label-success pull-right">$399</span></a>
                    <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                  </div>
                </li> -->
                <!-- /.item -->
              <!-- </ul>
            </div> -->
            <!-- /.box-body -->
            <!-- <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div> -->
            <!-- /.box-footer -->
          <!-- </div> -->
          <!-- /.box -->
        <!-- </div> -->
        <!-- /.col -->
      <!-- </div> -->
      <!-- /.row -->
    </section>
    
    </div>
    </div>
  </div>
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Copyright &copy; 2019 <a href="https://adminlte.io"></a>.</strong> All rights
      reserved.
	</div>
   </footer>
   </div>
  <script>
    
    Highcharts.chart('pieChart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>',
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    legend: {
                enabled: true,
                align: 'center',
                // width: '100%',
                // verticalAlign: 'bottom',
                // useHTML: true,
                labelFormatter: function() {
                    return ' ' + this.name + ' : ' + this.percentage.toFixed (1) + '%';
				        }
    },
    series: [{
        name: 'Jumlah Peraturan',
        colorByPoint: true,
        data: [
          <?php 
            foreach($grafik as $row){
              echo "{name: '".$row->nm_jdih_jns."', y: ".$row->total."},";
            }
          ?>
        ]
    }]
});

Highcharts.chart('pieChart2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    credits: {
        enabled: false
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    legend: {
                enabled: true,
                align: 'center',
                // width: '800px',
                // verticalAlign: 'bottom',
                // useHTML: true,
                float: 'left',
                labelFormatter: function() {
                    return ' ' + this.name + ' : ' + this.percentage.toFixed (1) + '%';
				        }
    },
    series: [{
        name: 'Jumlah Peraturan',
        colorByPoint: true,
        data: [
          <?php
          foreach($grafik2 as $row){
          switch($row->r_lingkup){ case 1: $rl = 'Nasional';break; 
            case 2: $rl = 'Internal RS';break;}
          echo "{name: '".$rl."', y: ".$row->total."},";
        }
      ?>
        ]
    }]
});

  </script>
</body>
</html>