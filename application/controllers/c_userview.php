<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_userview extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_struktur');

	}

	public function home(){
			$this->load->view('usertemplate/headerhome');
			$this->load->view('home');
			$this->load->view('usertemplate/footer');
	}
	public function homeuser(){
		if($this->session->userdata('level')=="1"){
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
		} elseif($this->session->userdata('level')=="2"){
			$this->load->view('usertemplate/header');
			$this->load->view('usertemplate/sidebar');
		}
		$this->load->view('home');
		$this->load->view('usertemplate/footer');
	}

	public function view(){
		if($this->session->userdata('level')=="1"){
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
		} elseif($this->session->userdata('level')=="2"){
			$this->load->view('usertemplate/header');
			$this->load->view('usertemplate/sidebar');
		}
		$data['d_divisi']=$this->m_struktur->view()->result();
		$this->load->view('user/struktur',$data);
		$this->load->view('usertemplate/footer');
}

}
	 ?>