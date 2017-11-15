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
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><i class="fa fa-fw fa-plus"></i> Tambah Surveyor</div>
      <div class="card-body">
        <?php if (validation_errors()) { ?>
          <div class="alert alert-danger">
            <?php echo validation_errors();?>                 
          </div>
        <?php }?>
        <form action="<?php echo site_url('surveyor/prosestambah');?>" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" id="nama" name="nama" type="text" aria-describedby="nameHelp" placeholder="Masukan nama" value="<?php echo set_value('nama');?>">              
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Masukan email" value="<?php echo set_value('email');?>">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Kata Sandi</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Masukan Kata Sandi" value="<?php echo set_value('password');?>">
              </div>
              <div class="col-md-6">
                <label for="password2">Konfirmasi Kata Sandi</label>
                <input class="form-control" id="password2" name="password2" type="password" placeholder="Masukan Kata Sandi" value="<?php echo set_value('password2');?>">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-fw fa-check"></i>Simpan</button>
        </form>
          <br>
          <a class="btn btn-secondary btn-flat btn-block pull-right" href="<?php echo site_url('surveyor');?>">
            <i class="fa fa-fw fa-remove"></i> Batal
          </a>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js'); ?>"></script>
</body>

</html>
