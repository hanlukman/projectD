<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class c_divisi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_divisi');
		$this->load->library('form_validation');
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('c_userview/home'));  
		} 
	}
	public function viewall(){
		$data['d_divisi']=$this->m_divisi->view()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_divisi', $data);
		$this->load->view('template/footer');

	}



	public function view($id_divisi){
		$data['d_divisi']=$this->m_divisi->viewbyid($id_divisi)->result();
		$data['id_divisi']=$id_divisi;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_divisi', $data);
		$this->load->view('template/footer');
	}

	public function add(){
		$this->form_validation->set_rules('id_divisi', 'id divisi', 'required|trim');
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');

		if($this->form_validation->run() == false){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Isi Data File</div>');
				redirect('c_divisi/viewall');

		
		} else {
				$idd = $this->input->post('id_divisi');
		$nm = $this->input->post('nama');

		$data_ar = array(
			'id_divisi' => $idd,
			'nama' => $nm
		);
		$this->m_divisi->input_data($data_ar, 'divisi');
		redirect('c_divisi/viewall');

		}



	}

		public function edit($id){
			$where = array('id_divisi'=>$id);
			$data['d_divisi'] = $this->m_divisi->update($where,'divisi')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/e_divisi', $data);
		$this->load->view('template/footer');
		}

		public function update(){
				$id2= $this->input->post('id_divisi2');
				$nama2= $this->input->post('nama2');

				$data_ar=array(
					'id_divisi' => $id2,
					'nama' => $nama2
				);

				$where = array(
					'id_divisi' => $id2
				);

				$this->m_divisi->update_data($where,$data_ar,'divisi');
			redirect('c_divisi/viewall');


		}
		public function hapus($id_divisi){
				$where = array ('id_divisi' => $id_divisi);
				$this->m_divisi->hapus_data($where, 'divisi');
				redirect('c_divisi/viewall');
			}

}
 ?>