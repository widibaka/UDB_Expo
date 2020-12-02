
<?php 
  
  $website_settings = $this->Model_expo->get_website_settings();
  // var_dump($hero); die();
?>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="javascript:void(0)"><span><?php echo $website_settings['judul'] ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?php echo base_url() ?>assets/Mamba/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class=""><a href="<?php echo base_url() ?>">Home</a></li>

          <?php if ( !empty( $this->session->userdata('username') ) ): ?>

            <li class="drop-down"><a href="javascript:void(0)"><?php echo $this->session->userdata('username') ?></a>
              <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="<?php echo base_url() ?>auth/logout">Logout</a></li>
                <!-- <li class="drop-down"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>

          <?php else: ?>

            <li><a href="<?php echo base_url() ?>auth">Login</a></li>

          <?php endif ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->