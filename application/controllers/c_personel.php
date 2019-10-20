<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_personel extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_personel');
		$this->load->library('form_validation');
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('c_userview/home'));  
		} 
	}
	public function viewall()
	{
		$data['d_personel']=$this->m_personel->view()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_personel', $data);
		$this->load->view('template/footer');
	}



		public function view($id_process)
	{
		$data['d_personel']=$this->m_personel->viewbyid($id_process)->result();
		$data['id_process']=$id_process;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_personel', $data);
		$this->load->view('template/footer');
	}// function

	public function add(){
		$this->form_validation->set_rules('name', 'Nama File', 'required|trim');
		$this->form_validation->set_rules('file', 'File', 'required|trim');
		if($this->form_validation->run() == false){
		$upload=$this->m_personel->upload();
		if($upload['result']=="success"){
		$idr = $this->input->post('');
		$idn = $this->input->post('id_process');
		$nm = $this->input->post('name');
		$fl = $this->input->post('file');

		$data_ar = array(
		'id_person' => $idr,
		'id_process' => $idn,
		'name' => $nm,
		'file' => $upload['file']['file_name']
		);

			$this->m_personel->input_data($data_ar, 'personel');
			redirect('c_personel/view/'.$idn);

			}
			else {
				$idn = $this->input->post('id_process');
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Isi Data File</div>');
				redirect('c_personel/view/'.$idn);				
			}

		}
	}

			public function hapus($id_person){
				$data=array(
				'id_process'=>$idn
			);
				$where = array ('id_person' => $id_person);
				$this->m_personel->hapus_data($where, 'personel');
				redirect('c_personel/view/'.$idn);

		}

}



?>