<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_reference extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_reference');
		$this->load->library('form_validation');
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('c_userview/home'));  
		}
	}
	public function viewall()
	{
		$data['d_reference']=$this->m_reference->view()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_reference', $data);
		$this->load->view('template/footer');
	}



	public function view($id_process)
	{
		$data['d_reference']=$this->m_reference->viewbyid($id_process)->result();
		$data['id_process']=$id_process;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_reference', $data);
		$this->load->view('template/footer');
	}// function

		public function add(){
			$this->form_validation->set_rules('name', 'Nama File', 'required|trim');
			$this->form_validation->set_rules('file', 'File', 'required|trim');
				if($this->form_validation->run() == false){
				$upload=$this->m_reference->upload();
				if($upload['result']=="success"){
				$idr = $this->input->post('');
				$idn = $this->input->post('id_process');
				$nm = $this->input->post('name');
				$fl = $this->input->post('file');

				$data_ar = array(
				'id_ref' => $idr,
				'id_process' => $idn,
				'name' => $nm,
				'file' => $upload['file']['file_name']
		);

			$this->m_reference->input_data($data_ar, 'reference');
			redirect('c_reference/view/'.$idn);

		}
		else {

			$idn = $this->input->post('id_process');
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Isi Data File</div>');
			redirect('c_reference/view/'.$idn);		
		
			} 

		}
	}

		public function hapus($id_ref,$id_process){
				$data['d_resource']=$this->m_reference->viewbyid($id_process)->result();
				$data=array(
				'id_process'=>$id_process
			);
				$where = array ('id_ref' => $id_ref);
				$this->m_reference->hapus_data($where, 'reference');
				redirect('c_reference/view/'.$id_process);

		}

}



?>