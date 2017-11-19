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
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/jumbotron.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/sticky-footer.css'); ?>" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('welcome');?>">Navbar</a>
    </div>
    </nav>    

    <div class="container">
    <br>
      <?php $this->load->view($page) ?>
    </div>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright © Your Website 2017</span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('assets/js/sb-admin-datatables.min.js'); ?>"></script>
</body>

</html>
