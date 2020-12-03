    <section class="about-lists">
      <div class="container">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari karya ...">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="button">Search</button>
          </div>          
        </div>


        <div class="float-right dropdown mt-2">
          <a href="javascript:void(0)" class="h6 dropdown-toggle" data-toggle="dropdown" style="color: #999">urutkan dari</i></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Like terbanyak</a>
            <a class="dropdown-item" href="#">Like tersedikit</a>
            <a class="dropdown-item" href="#">Terbaru</a>
            <a class="dropdown-item" href="#">Tertua</a>
          </div>
        </div>

      </div>
    </section>
    


    <!-- ======= About Lists Section ======= -->
    <section class="about-lists section-bg">
      <div class="container">

      	<!-- Tampilan -->
      	<div class="col-12 navbar navbar-expand mb-2">
      	  <div class="float-right mt-0" style="position: absolute; right: 0px; float: right;">
      	    <ul type="none" class="navbar-nav mt-0">
      	      <li list-style-type="none" class="ml-3 nav-item"><a class="h4" href=""><i class="fa fa-th"></i></a></li>
      	      <li list-style-type="none" class="ml-3 nav-item"><a class="h4" href=""><i class="fa fa-th-list"></i></a></li>
              
            </ul>
      	  </div>
      	</div>

        <!-- kumpulan projects -->
        <div class="row no-gutters">
        <?php if ( !empty($karya) ): ?>
          <?php foreach ($karya as $key => $value): ?>
            <?php 
                $time = $key*100;
                $delay = 'data-aos-delay="'.$time.'"';
                
                $gambar = explode('[@pemisah]', $value['gambar'])[0];
                if ( strlen($value['deskripsi']) > 120 ) {
                  $deskripsi = substr($value['deskripsi'], 0, 119) . '...';
                }else{
                  $deskripsi = $value['deskripsi'];
                }
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" <?php echo $delay ?>>
              <div class="card my-2 mx-1">
                <div class="gambar-preview" style="background-image: url('<?php echo base_url( 'gambar/' . $gambar ) ?>'); background-size: cover; background-position: center;">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $value['nama'] ?></h5>
                  <p class="card-text"><?php echo $deskripsi ?></p>

                  <?php $nama_karya = str_replace(' ', '_', $value['nama']); ?>
                  <a href="<?php echo base_url() ?>karya/detail/<?php echo $nama_karya ?>" class="btn btn-primary">See detail</a>
                  <p><small class="float-right"><?php echo $this->Model_expo->get_count_like_karya($value['id_karya']) ?> Likes</small></p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        <?php endif ?>
          



          

        </div>

        <?php 

          // pagination 
          $config['full_tag_open'] = '<nav class="mt-4" aria-label="Page navigation"><ul class="pagination justify-content-center">';
          $config['full_tag_close'] = '</ul></nav>';
          $config['num_tag_open'] = '<li class="page-item">';
          $config['num_tag_close'] = '</li>';

          $config['first_link'] = '<<';
          $config['first_tag_open'] = '<li class="page-item">';
          $config['first_tag_close'] = '</li>';

          $config['last_link'] = '>>';
          $config['last_tag_open'] = '<li class="page-item">';
          $config['last_tag_close'] = '</li>';

          $config['next_link'] = 'Berikutnya';
          $config['next_tag_open'] = '<li class="page-item">';
          $config['next_tag_close'] = '</li>';

          $config['prev_link'] = 'Sebelumnya';
          $config['prev_tag_open'] = '<li class="page-item">';
          $config['prev_tag_close'] = '</li>';

          $config['cur_tag_open'] = '<li class="page-item page-link bg-secondary" style="color:#fff">';
          $config['cur_tag_close'] = '</li>';

          $config['attributes'] = array('class' => 'page-link');

          $config['base_url'] = base_url() . 'karya/index/halaman';
          $config['total_rows'] = $total_rows;
          $config['per_page'] = $per_page;

          $this->pagination->initialize($config);

          echo $this->pagination->create_links();
          // pagination 

        ?>

      </div>
    </section><!-- End About Lists Section -->