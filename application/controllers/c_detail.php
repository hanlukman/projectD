<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detail extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_detail');
		$this->load->model('m_divisi');
		$this->load->model('m_turtel');
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('c_userview/home'));  
		} 
	}
	public function viewall(){
		$data['d_detail']=$this->m_detail->viewall()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_detail', $data);
		$this->load->view('template/footer');
	}
		
		public function viewbyid($id_process){
		$data['d_detail']=$this->m_detail->viewbyid($id_process)->result();
		$data['d_divisi']=$this->m_divisi->view()->result();
		$data['d_process']=$this->m_turtel->viewbyid($id_process)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_detail', $data);
		$this->load->view('template/footer');
	}

	public function add(){
		$idp = $this->input->post('id_process');
		$idd = $this->input->post('id_divisi');

		$data_ar = array(
			'id'			=> $this->input->post(''),
			'id_divisi' 	=> $idd,
			'id_process'	=> $idp
		);
		$this->m_divisi->input_data($data_ar, 'detail_divisi');
		redirect('c_detail/viewbyid/'.$idp);
	}

		public function hapus($id, $id_process){
				$data=array(
				'id_divisi'=>$id
			);
				$where = array ('id_divisi' => $id);
				$this->m_detail->hapus_data($where, 'detail_divisi');
				redirect('c_detail/viewbyid/'.$id_process);

		}

		


	












}
 ?>