<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_resource extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_resource');
		$this->load->library('form_validation');
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('c_userview/home'));  
		} 
	}
	public function viewall()
	{
		$data['d_resource']=$this->m_resource->view()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_resource', $data);
		$this->load->view('template/footer');
	}



	public function view($id_process)
	{
		$data['d_resource']=$this->m_resource->viewbyid($id_process)->result();
		$data['id_process']=$id_process;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_resource', $data);
		$this->load->view('template/footer');
	}// function

	public function add(){
		$this->form_validation->set_rules('name', 'Nama File', 'required|trim');
		$this->form_validation->set_rules('file', 'File', 'required|trim');
		if($this->form_validation->run() == false){
		$upload=$this->m_resource->upload();
		if($upload['result']=="success"){
		$idr = $this->input->post('');
		$idn = $this->input->post('id_process');
		$nm = $this->input->post('name');
		$fl = $this->input->post('file');

		$data_ar = array(
		'id_res' => $idr,
		'id_process' => $idn,
		'name' => $nm,
		'file' => $upload['file']['file_name']
		);

			$this->m_resource->input_data($data_ar, 'resource');
			redirect('c_resource/view/'.$idn);

		}
		else {

			$idn = $this->input->post('id_process');
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Isi Data File</div>');
			redirect('c_resource/view/'.$idn);		
		
			} 
	}
		

		}

			public function hapus($id_res,$id_process){
				$data['d_resource']=$this->m_resource->viewbyid($id_process)->result();
				$data=array(
				'id_process'=>$id_process
			);
				$where = array ('id_res' => $id_res);
				$this->m_resource->hapus_data($where, 'resource');
				redirect('c_resource/view/'.$id_process);

		}

}



?>