<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail extends CI_Model
{

	public function viewall(){
		return $this->db->get('detail_divisi');
	}

	public function viewbyid($id_process){
		$this->db->select('detail_divisi.*, turtle.process_name as ps, divisi.nama as dvs');
		$this->db->from('detail_divisi');
		$this->db->join('turtle', 'detail_divisi.id_process=turtle.id_process');
		$this->db->join('divisi', 'detail_divisi.id_divisi=divisi.id_divisi');
		$this->db->where('detail_divisi.id_process', $id_process);
		return $this->db->get();

	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}


	}

	// public function viewbyid($id_divisi){
	// 	// return $this->db->get('reference');
	// 	$this->db->select('*');
	// 	$this->db->from('divisi');
	// 	$this->db->where('id_divisi', $id_divisi);
	// 	return $this->db->get();

	// }
	?>