<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_divisi extends CI_Model
{

	public function view(){
		return $this->db->get('divisi');
	}

	public function viewbyid($id_divisi){
		// return $this->db->get('reference');
		$this->db->select('*');
		$this->db->from('divisi');
		$this->db->where('id_divisi', $id_divisi);
		return $this->db->get();

	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}









}
 ?>