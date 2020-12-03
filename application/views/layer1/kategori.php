<?php 
  
  $kategori = $this->Model_expo->get_kategori();

?>

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Kategori</h2>
    </div>

    <div class="row">
      <?php foreach ($kategori as $key => $kat): ?>
        <?php 
            $time = $key*100;
            $delay = 'data-aos-delay="'.$time.'"';
        ?>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" <?php echo $delay ?>>
          <div class="icon"><i class="icofont-computer"></i></div>
          <h4 class="title"><a href=""><?php echo $kat['nama_kategori'] ?></a></h4>
          <p class="description"><?php echo $kat['deskripsi_kategori'] ?></p>
        </div>
      <?php endforeach ?>
    </div>

  </div>
</section><!-- End Services Section -->