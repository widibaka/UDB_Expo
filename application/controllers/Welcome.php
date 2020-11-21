<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_expo');
	}

	public function index()
	{
		$data['content'] = 'blank';
		$this->load->view('template/layout', $data);
	}
}
