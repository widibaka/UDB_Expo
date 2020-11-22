<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_expo');
	}

	public function index()
	{
		$data['content'] = 'main_content';
		$this->load->view('layer1/template/head');
		$this->load->view('layer1/template/topbar');
		$this->load->view('layer1/template/navbar');
		$this->load->view('layer1/template/hero');

		$this->load->view('layer1/template/open_main');
		$this->load->view('layer1/home');
		$this->load->view('layer1/template/close_main');

		$this->load->view('layer1/template/footer');
	}
}
