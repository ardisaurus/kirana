<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $title; ?> - Kuisioner Kirana</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo site_url('welcome');?>">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo site_url('beranda');?>">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li><li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Responden</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo site_url('surveyor');?>">
            <i class="fa fa-fw fa-credit-card"></i>
            <span class="nav-link-text">Surveyor</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Akun</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>              
              <a href="<?php echo site_url('akun');?>"><i class="fa fa-fw fa-cog"></i>Pengaturan</a>
            </li>
            <li>              
              <a href="<?php echo site_url('akun/logout');?>"><i class="fa fa-fw fa-remove"></i>Keluar</a>
            </li>
          </ul>
        </li>        
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
          <h1>Hasil</h1>
          <hr>
          <p class="text-primary">
            Pertanyaan : <?php echo $datapertanyaan[0]->pertanyaan; ?> 
          </p>
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
            <div class="card-body">
              <canvas id="myBarChart" width="100" height="50"></canvas>
            </div>
            <div class="card-footer small">Jumlah Responden : <?php echo $datajumlahresponden; ?></div>
          </div>

            <a class="btn btn-warning pull-right text-white" href="<?php echo site_url('beranda/kuisioner/'.$datapertanyaan[0]->id_kuisioner);?>">
              <i class="fa fa-fw fa-arrow-left"></i> Kembali
            </a>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js'); ?>"></script>
    <!-- Custom scripts for this page-->
    <script type="text/javascript">
      /*!
     * Start Bootstrap - SB Admin v4.0.0-beta (https://startbootstrap.com/template-overviews/sb-admin)
     * Copyright 2013-2017 Start Bootstrap
     * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-sb-admin/blob/master/LICENSE)
     */
    Chart.defaults.global.defaultFontFamily='-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif',Chart.defaults.global.defaultFontColor="#292b2c";
    var ctx=document.getElementById("myBarChart"),myLineChart=new Chart(ctx,{
      type:"bar",
      data:{labels:["Sangat Setuju","Setuju","Tidak Setuju","Sangat Tidak Setuju"],
      datasets:[{label:"Hasil",backgroundColor:["#007bff","#28a745","#ffc107","#dc3545"],
      borderColor:"rgba(2,117,216,1)",
      data:[
      <?php if($datajawaban1){echo $datajawaban1;}else{echo 0;} ?>,
      <?php if($datajawaban2){echo $datajawaban2;}else{echo 0;} ?>,
      <?php if($datajawaban3){echo $datajawaban3;}else{echo 0;} ?>,
      <?php if($datajawaban4){echo $datajawaban4;}else{echo 0;} ?>
      ]}]},
      options:{scales:{xAxes:[{time:{unit:"month"},
      gridLines:{display:!1},ticks:{maxTicksLimit:6}}],
      yAxes:[{ticks:{min:0,maxTicksLimit:5},
      gridLines:{display:!0}}]},
      legend:{display:!1}}});
    </script>
  </div>
</body>

</html>
