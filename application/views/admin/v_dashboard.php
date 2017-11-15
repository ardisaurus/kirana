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
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
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
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Responden</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
            <li>              
              <a href="#"><i class="fa fa-fw fa-user"></i>Peserta</a>
            </li>
            <li>              
              <a href="#"><i class="fa fa-fw fa-th-large"></i>Kelompok</a>
            </li>
          </ul>
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

  <!-- =============================================== -->

  <?php $this->load->view($page) ?>

  <!-- =============================================== -->  
    
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
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js'); ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('assets/js/sb-admin-datatables.min.js'); ?>"></script>
  </div>
</body>

</html>
