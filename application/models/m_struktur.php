<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_struktur extends CI_Model
{


public function view(){
		return $this->db->get('divisi');
	}
	
	public function viewprocessbyid($id_divisi){
		$this->db->select('detail_divisi.*, turtle.process_name as nama');
		$this->db->from('detail_divisi');
		$this->db->join('turtle','detail_divisi.id_process=turtle.id_process');
		$this->db->where('id_divisi', $id_divisi);
		return $this->db->get();
	}

	public function getProcessById($id_process){
		$this->db->select('*');
		$this->db->from('turtle');
		// $this->db->join('turtle','detail_divisi.id_process=turtle.id_process');
		$this->db->where('id_process', $id_process);
		return $this->db->get();
	}
	public function getReferenceById($id_process){
		$this->db->select('*');
		$this->db->from('reference');
		// $this->db->join('turtle','detail_divisi.id_process=turtle.id_process');
		$this->db->where('id_process', $id_process);
		return $this->db->get();
	}
	public function getRiskById($id_process){
		$this->db->select('*');
		$this->db->from('risk');
		// $this->db->join('turtle','detail_divisi.id_process=turtle.id_process');
		$this->db->where('id_process', $id_process);
		return $this->db->get();
	}
	public function getResById($id_process){
		$this->db->select('*');
		$this->db->from('resource');
		// $this->db->join('turtle','detail_divisi.id_process=turtle.id_process');
		$this->db->where('id_process', $id_process);
		return $this->db->get();
	}

	public function getpersonById($id_process){
		$this->db->select('*');
		$this->db->from('personel');
		// $this->db->join('turtle','detail_divisi.id_process=turtle.id_process');
		$this->db->where('id_process', $id_process);
		return $this->db->get();
	}


	public function getOwnerById($id_process){
		$this->db->select('detail_divisi.*, divisi.nama as name');
		$this->db->from('detail_divisi');
		$this->db->join('divisi','detail_divisi.id_divisi=divisi.id_divisi');
		$this->db->where('id_process', $id_process);
		return $this->db->get();
	}



}

?>