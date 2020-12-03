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
	
	public function get_kategori()
	{
		return $this->db->get('kategori')->result_array();
	}
	
	public function get_karya($wildcard = false, $order_by = false)
	{
		if ( $wildcard != false ) {
			$kata_kunci = explode(' ', $wildcard);
			foreach ($kata_kunci as $key => $kata_kunci_satuan) {
				$this->db->or_like('nama', $kata_kunci_satuan); // kalau ada di judul
				$this->db->or_like('deskripsi', $kata_kunci_satuan); // kalau ada di judul
			}
		}
		if ( $order_by != false ) {
			$this->db->order_by($order_by);
		}
		return $this->db->get('karya');
	}
	
	public function get_karya_per_page()
	{
		$this->db->select('per_page');
		$this->db->limit(1);
		return $this->db->get('website_settings')->row_array()['per_page'];
	}
	
	public function get_count_like_karya($id_karya)
	{
		$this->db->where('id_karya', $id_karya);
		$result = $this->db->get('likes')->num_rows();
		if ( !empty($result) ) {
			return $result;
		}else{
			return 0;
		}
	}
	
	public function get_karya_by_id($nama_karya)
	{
		$this->db->where('nama', $nama_karya);
		$result = $this->db->get('karya')->row_array();
		if ( !empty($result) ) {
			return $result;
		}else{
			return 0;
		}
	}


	public function daftarkan_user($email)
	{
		$data = [
			'email' => $email,
		];
		$this->db->insert( 'user', $data );
	}

	public function set_alert($jenis, $pesan)
	{
		// jenis alert ada danger, warning, success
		$this->session->set_flashdata( $jenis, $pesan );
	}

	
	public function check_if_account_exist($email)
	{
		$this->db->where('email', $email);
		$result = $this->db->get('user')->row_array();
		if ( !empty($result) ) {
			return $result;
		}else{
			return false;
		}
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