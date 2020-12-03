<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karya extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_expo');
        $this->load->library('pagination');
	}

	public function index($wildcard = false, $order_by = false)
	{
		$karya = $this->Model_expo->get_karya($wildcard, $order_by);

		$data['karya'] = $karya->result_array();
		$data['total_rows'] = $karya->num_rows();
		$data['per_page'] = $this->Model_expo->get_karya_per_page();
		// var_dump($data); die;
		$this->load->view('layer1/template/head');
		$this->load->view('layer1/template/topbar');
		$this->load->view('layer1/template/navbar');

		$this->load->view('layer1/template/open_main');
		$this->load->view('layer1/projects', $data);
		$this->load->view('layer1/template/close_main');

		$this->load->view('layer1/template/footer');
	}

	public function detail($nama_karya)
	{
		$nama_karya = str_replace('_', ' ', $nama_karya);
		$data = $this->Model_expo->get_karya_by_id($nama_karya);

		if ( empty($data) ) {
			$this->load->view('layer1/error404', $data);
		}else{

			$this->load->view('layer1/template/head');
			$this->load->view('layer1/template/topbar');
			$this->load->view('layer1/template/navbar');
			$this->load->view('layer1/template/open_main');
			
			$this->load->view('layer1/project_detail', $data);
			
			$this->load->view('layer1/template/close_main');
			$this->load->view('layer1/template/footer');
		}
		
	}


}
