<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model EXPO
 */
class Model_expo extends CI_Model
{
	
	public function get_hero()
	{
		return $this->db->get('hero')->result_array();
	}
	
	public function get_socmed()
	{
		return $this->db->get('socmed')->row_array();
	}
	
	public function get_website_settings()
	{
		return $this->db->get('website_settings')->row_array();
	}

}