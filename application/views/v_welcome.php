<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">

    <title>Selamat Datang - KIRANA</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/jumbotron.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/sticky-footer.css'); ?>" rel="stylesheet">

    <style type="text/css">
      .jumbotron {
          background-image: url("<?php echo base_url('assets/img/bg-welcome.jpg'); ?>");
          background-color: #17234E;
          margin-bottom: 0;`enter code here`
          min-height: 50%;
          background-repeat: no-repeat;
          background-position: center;
          -webkit-background-size: cover;
          background-size: cover;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('welcome');?>">KIRANA</a>
    </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3 text-white">Selamat Datang</h1>
        <p class="text-white">KIRANA (KuIsioneR sederhANA) adalah sistem kuisioner berbasis web yang mengutamakan kemudahan pada sisi pengunaan.</p>
      </div>
    </div>
    <br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row" align="center">
        <div class="col-lg-6">
          <img class="rounded-circle" src="<?php echo base_url('assets/img/surveyor.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Surveyor</h2>
          <p><a class="btn btn-success" href="<?php echo site_url('beranda');?>" role="button">Masuk &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
          <img class="rounded-circle" src="<?php echo base_url('assets/img/responden.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Responden</h2>
          <p><a class="btn btn-primary" href="<?php echo site_url('kuisioner');?>" role="button">Mulai &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div> <!-- /container -->

    <footer class="footer">
      <div class="container">
        <span class="text-muted"><a href="<?php echo base_url('tentang');?>">Copyright</a> © Universitas Negeri Malang 2017</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.slim.min.js'); ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"><\/script>')</script>
    <script src="<?php echo base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
  </body>
</html>
