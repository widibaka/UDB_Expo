<?php 

$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/navbar');
$this->load->view('template/hero');

if ( $content != 'blank' ) {
  $this->load->view('template/' . $content);
}

$this->load->view('template/footer');