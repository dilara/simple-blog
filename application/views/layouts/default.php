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

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin.min.js');?>"></script>
  </head>

  <body class="bg-dark" id="page-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="<?php echo base_url(); ?>">Simple Blog</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
    </nav>

    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>"><i class="fas fa-fw fa-home"></i><span>Dashboard</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('posts'); ?>"><i class="fas fa-fw fa-quote-right"></i><span>Posts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/home/logout'); ?>"><i class="fas fa-fw fa-sign-out-alt"></i><span>Logout</span></a>
        </li>
      </ul>

      <!-- Content Wrapper -->
      <div id="content-wrapper" style="background-color:#fff !important;">
        <!-- Container Fluid -->
        <div class="container-fluid">
          <?php echo $contents; ?>
        </div>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span><?php echo '© '.date('Y').' SIMPLE BLOG'; ?></span>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  </body>
</html>