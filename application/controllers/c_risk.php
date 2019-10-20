<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_risk extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_risk');
		$this->load->library('form_validation');
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('c_userview/home'));  
		} 
	}
	public function viewall()
	{
		$data['d_risk']=$this->m_risk->view()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_risk', $data);
		$this->load->view('template/footer');
	}



	public function view($id_process)
	{
		$data['d_risk']=$this->m_risk->viewbyid($id_process)->result();
		$data['id_process']=$id_process;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_risk', $data);
		$this->load->view('template/footer');
	}// function

	public function add(){
		
		$this->form_validation->set_rules('name', 'Nama File', 'required|trim');
		$this->form_validation->set_rules('file', 'File', 'required|trim');
		if($this->form_validation->run() == false){
		$upload=$this->m_risk->upload();
		if($upload['result']=="success"){
		$idr = $this->input->post('');
		$idn = $this->input->post('id_process');
		$nm = $this->input->post('name');
		$fl = $this->input->post('file');

		$data_ar = array(
		'id_risk' => $idr,
		'id_process' => $idn,
		'name' => $nm,
		'file' => $upload['file']['file_name']
		);

			$this->m_risk->input_data($data_ar, 'risk');
			redirect('c_risk/view/'.$idn);
		}
		else {

			$idn = $this->input->post('id_process');
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Isi Data File</div>');
			redirect('c_risk/view/'.$idn);		
		
			} 
		}
	}

			public function hapus($idn){
				$data=array(
				'id_process'=>$idn
			);
				$where = array ('id_process' => $idn);
				$this->m_risk->hapus_data($where, 'risk');
				redirect('c_risk/view/'.$idn);

		}


		}
?>