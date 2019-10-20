<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_struktur extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_struktur');
	}
	public function home(){


		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('home');
		$this->load->view('template/footer');
	}




	public function view(){
		$data['d_divisi']=$this->m_struktur->view()->result();
		$this->load->view('usertemplate/header');
		$this->load->view('usertemplate/sidebar');
		$this->load->view('user/struktur', $data);
		$this->load->view('usertemplate/footer');
	}

	public function viewprocessbyid($id_divisi){
		$data['d_divisi']=$this->m_struktur->viewprocessbyid($id_divisi)->result();
		$data['id_divisi']=$id_divisi;
		$this->load->view('usertemplate/header');
		$this->load->view('usertemplate/sidebar');
		$this->load->view('user/userprocess', $data);
		$this->load->view('usertemplate/footer');
			}

	public function viewdiagram($id_process){
		$data['d_process']=$this->m_struktur->getProcessById($id_process)->result();
		$data['d_divisi']=$this->m_struktur->getOwnerById($id_process)->result();
		$data['d_reference']=$this->m_struktur->getReferenceById($id_process)->result();
		$data['d_resource']=$this->m_struktur->getResById($id_process)->result();
		$data['d_person']=$this->m_struktur->getPersonById($id_process)->result();
		$data['d_risk']=$this->m_struktur->getRiskById($id_process)->result();
		// $data['id_divisi']=$id_divisi;
		$this->load->view('usertemplate/header');
		$this->load->view('usertemplate/sidebar');
		$this->load->view('user/userdiagram', $data);
		$this->load->view('usertemplate/footer');

	}




}





?>

