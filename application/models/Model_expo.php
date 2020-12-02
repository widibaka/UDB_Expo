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


	public function set_alert($jenis, $pesan)
	{
		// jenis alert ada danger, warning, success
		$this->session->set_flashdata( $jenis, $pesan );
	}

	public function check_email_pemilih($email)
	{
		$yuukensha = $this->db->get('pemilwa_hmp_yuukensha')->result_array();
		$status['email'] = false;
		$status['kosong'] = false;
		foreach ($yuukensha as $key => $value) {
			if ( $value['email'] == $email ) {
				$status['email'] = true;

				if ( $value['kohousha_index'] == 'karappo' ) {
					$status['kosong'] = true;
				}

			}
			
		}
		return $status;
	}

	public function refresh()
	{
		redirect( $this->uri->uri_string() );
	}
	public function add_yuukensha( $email, $nama, $pilihan )
	{
		$data = [
			'kohousha_index' => base64_encode($nama . '[-spt-]' . $pilihan),
			'jikan' => time(),
		];
		$this->db->where('email', $email);
		$this->db->update('pemilwa_hmp_yuukensha', $data);
	}

}