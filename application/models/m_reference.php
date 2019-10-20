<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reference extends CI_Model
{
	public function view(){
		return $this->db->get('reference');
	}

	public function viewbyid($id_process){
		// return $this->db->get('reference');
		$this->db->select('*');
		$this->db->from('reference');
		$this->db->where('id_process', $id_process);
		return $this->db->get();

	}


	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

		public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}


public function upload(){
		$config['upload_path']='./upload/reference/'; //folder foto
		$config['allowed_types']='pdf';
		$config['max_size']='3074';
		$config['remove_space']=TRUE;

		$this->load->library('upload', $config);//konfig upload
		if($this->upload->do_upload('file')){
			//jika berhasil upload
			$return = array('result'=>'success','file'=>$this->upload->data(),'error'=>'');
			return $return;
		}else{  
		// Jika gagal :  
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());  
			return $return;
		}
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