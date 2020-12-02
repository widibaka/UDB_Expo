<?php 
/**
 * Dashboard
 */
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_expo');
	}

	public function index()
	{
		var_dump( 
			$this->session->userdata()
		);
	}
}