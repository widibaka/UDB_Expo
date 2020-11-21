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

}