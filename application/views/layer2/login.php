<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Halaman Login</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assets/NiceAdmin/') ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Sweetalert -->
  <link href="<?php echo base_url('assets/sweetalert/') ?>sweetalert2.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/NiceAdmin/') ?>css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assets/NiceAdmin/') ?>css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url('assets/NiceAdmin/') ?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/NiceAdmin/') ?>css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url('assets/NiceAdmin/') ?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/NiceAdmin/') ?>css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body" style="background-image: url('<?php echo base_url('assets/NiceAdmin/img/') ?>gunung.jpg');">

  <div class="container">

    <form class="login-form" action="index.html" style="border: 0px; border-radius: 5px;">
      <div class="login-wrap">
        <p class="login-img"><img style="width: 60px;" src="<?php echo base_url('assets/google_api/google.png') ?>"></p>
        <a href="<?php echo $auth_url ?>" class="btn btn-success btn-lg btn-block" style="border-radius: 5px;" type="submit"><span style="color: #FFF">Login dengan Google</span></a>
        <a href="<?php echo base_url() ?>" class="btn btn-info btn-lg btn-block" style="border-radius: 5px;" type="submit"><span style="color: #FFF"> <i class="fa fa-arrow-left"></i> Kembali ke home</span></a>
      </div>
    </form>
    <div class="text-center mt-4">
      <div class="credits pt-4">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <br>
          <br>
          <br>
          <span style="color: #ccc">Desain tampilan oleh</span> <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>

  <script type="text/javascript" src="<?php echo base_url() ?>assets/sweetalert/sweetalert2.all.min.js"></script>
  <?php 
    $jenis = '';
    $text = '';
    if ( !empty($this->session->flashdata('error')) ) {
      $jenis = 'error';
      $text = $this->session->flashdata('error');
    }elseif( !empty($this->session->flashdata('success')) ){
      $jenis = 'success';
      $text = $this->session->flashdata('success');
    }
  ?>
  
  <?php if ( !empty( $this->session->flashdata() ) ): ?>
    <script type="text/javascript">
      function fire() {
        Swal.fire({
          icon: '<?php echo $jenis ?>',
          text: '<?php echo $text ?>',
        })
      }
      // jalankan
      fire();
    </script>
  <?php endif ?>


</body>

</html>
