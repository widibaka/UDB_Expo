<?php 
  
  $socmed = $this->Model_expo->get_socmed();
  // var_dump($hero); die();
?>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +62 80101010101
      </div>
      <div class="social-links float-right">

        <?php if (!empty($socmed['twitter'])): ?>
          <a target="_blank" href="<?php echo $socmed['twitter'] ?>" class="twitter"><i class="icofont-twitter"></i></a>
        <?php endif ?>

        <?php if (!empty($socmed['facebook'])): ?>
          <a target="_blank" href="<?php echo $socmed['facebook'] ?>" class="facebook"><i class="icofont-facebook"></i></a>
        <?php endif ?>

        <?php if (!empty($socmed['instagram'])): ?>
          <a target="_blank" href="<?php echo $socmed['instagram'] ?>" class="instagram"><i class="icofont-instagram"></i></a>
        <?php endif ?>

        <?php if (!empty($socmed['skype'])): ?>
          <a target="_blank" href="<?php echo $socmed['skype'] ?>" class="skype"><i class="icofont-skype"></i></a>
        <?php endif ?>

        <?php if (!empty($socmed['linkedin'])): ?>
          <a target="_blank" href="<?php echo $socmed['linkedin'] ?>" class="linkedin"><i class="icofont-linkedin"></i></a>
        <?php endif ?>
        
      </div>
    </div>
  </section>