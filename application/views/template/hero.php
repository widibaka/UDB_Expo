<?php 
  
  $hero = $this->Model_expo->get_hero();
  // var_dump($hero); die();
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <?php foreach ($hero as $key => $value): ?>

            <?php 
                if ( $key == 0 ) {
                  $active = 'active';
                }else{
                  $active = '';
                }
            ?>

            <!-- Slide <?php echo $key ?> -->
            <div class="carousel-item <?php echo $active ?>" style="background-image: url('assets/Mamba/assets/img/slide/<?php echo $value['gambar'] ?>');">
              <div class="carousel-container">
                <div class="carousel-content container">
                  <h2 class="animate__animated animate__fadeInDown"><?php echo $value['judul'] ?></h2>
                  <p class="animate__animated animate__fadeInUp"><?php echo $value['keterangan'] ?></p>
                  <a href="<?php echo $value['link'] ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
