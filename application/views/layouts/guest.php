<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Simple Blog</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css');?>">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/sb-admin.css');?>">
  </head>

  <body class="bg-dark">
    <!-- Container Fluid -->
    <div class="container-fluid">
      <?php echo $contents; ?>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js');?>"></script>
  </body>
</html>
