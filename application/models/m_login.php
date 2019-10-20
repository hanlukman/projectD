<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	function cek_login($nik, $password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('nik', $nik);
		$this->db->where('pass', md5($password));
		return $this->db->get()->row();
	}

	function getIdUser($nik) {
		$this->db->select('id');
		$this->db->from('user');
		$this->db->where('nik', $nik);
		return $this->db->get()->row();
	}
	function getNamaUser($nama) {
		$this->db->select('id');
		$this->db->from('user');
		$this->db->where('nama', $nama);
		return $this->db->get()->row();
	}

}
 ?>
