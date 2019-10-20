<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('M_login');
		$this->load->library(array('session'));
		$this->load->library('user_agent'); //deklarasi mengaktifkan library pagination 
	} 
	
	public function login(){
		// $this->load->view('usertemplate/header');
		if($this->session->userdata('level') == "1") {  
			redirect(base_url('c_admin/home'));  
		} else if ($this->session->userdata('level') == "2") {
			redirect(base_url('c_userview/home')); 
		}
		$this->load->view('user/login');


	}

	function aksi_login(){
		$nik=$this->input->post('nik');
		$password=$this->input->post('password');
		$cek=$this->M_login->cek_login($nik,$password);
		if($cek>0) {   //jika ada ditabel
			$data_session=array(
					'nik'=>$cek->nik,
					'level'=> $cek->level,
					'nama'=>$cek->nama
				);
			$this->session->set_userdata($data_session);  
			if($this->session->userdata('level')==1) {   
				redirect('c_admin/home');  
			}else if($this->session->userdata('level')==2) {   
				redirect('c_userview/homeuser');  
		}
	}
		else {
			// echo "<script type=\"text/javascript\"> alert('nik dan password salah!'); </script>";
			// redirect('C_login');
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIK atau Password Salah</div>');
			redirect('C_login/login');

		}		
	}
}