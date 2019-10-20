<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('form_validation');
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('c_userview/home'));  
		} 
	}
	public function home(){		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/homeadmin');
		$this->load->view('template/footer');

	}

	public function viewall(){
		$data['d_admin']=$this->m_admin->view()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_admin', $data);
		$this->load->view('template/footer');

	}


	public function add(){
		$this->form_validation->set_rules('nik', 'nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim');
		$this->form_validation->set_rules('pass', 'pass', 'required|trim');
		$this->form_validation->set_rules('level', 'level', 'required|trim');
		
		if($this->form_validation->run() == false){
		$id = $this->input->post('');
		$nik = $this->input->post('nik');
		$nm = $this->input->post('nama');
		$nt = $this->input->post('no_telp');
		$pass = md5($this->input->post('pass'));
		$lv = $this->input->post('level');


		$data_ar = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nm,
			'no_telp' => $nt,
			'pass' => $pass,
			'level' => $lv
		);

		$this->m_admin->input_data($data_ar, 'user');
		redirect('C_admin/viewall');

		}
		else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Isi Data File</div>');
			redirect('c_admin/viewall');		
		
			} 


	}

	public function hapus($id){

				$where = array ('id' => $id);
				$this->m_admin->hapus_data($where, 'user');
				redirect('c_admin/viewall');

		}

		public function edit($id){
			$where = array('id'=>$id);
			$data['d_admin'] = $this->m_admin->update($where,'user')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/e_admin', $data);
		$this->load->view('template/footer');
		}

		public function update(){
			$id = $this->input->post('id2');
			$nik = $this->input->post('nik2');
			$nm = $this->input->post('nama2');
			$nt = $this->input->post('no_telp2');
			$pass = $this->input->post('pass2');
			$lv = $this->input->post('level2');


		$data_ar = array(
			'id' => $id,
			'nik' => $nik,
			'nama'=> $nm,
			'no_telp' => $nt,
			'pass' => $pass,
			'level' => $lv

		);
			$where = array(
				'id' => $id
			);

			$this->m_admin->update_data($where,$data_ar,'user');
			redirect('C_admin/viewall');

		}



}
 ?>