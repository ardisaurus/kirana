<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Masuk - KIRANA</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Masuk - KIRANA</div>
      <div class="card-body">
        <?php if ($this->session->flashdata('message')) { ?>
          <div class="alert alert-danger">
            <?php echo $this->session->flashdata('message');?>                  
          </div>
        <?php }?>
        <?php if ($this->session->flashdata('notif')) { ?>
          <div class="alert alert-info">
            <?php echo $this->session->flashdata('notif');?>                  
          </div>
        <?php }?>
        <form action="<?php echo site_url('login/proses');?>" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kata Sandi</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Kata Sandi">
          </div>          
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.html">Lupa Kata Sandi?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
</body>

</html>
