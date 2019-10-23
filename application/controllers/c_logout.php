<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_logout extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('M_login');
		$this->load->library(array('session'));
		$this->load->library('user_agent'); //deklarasi mengaktifkan library pagination 
	} 

	function index(){
		$this->session->sess_destroy();
		redirect('c_userview/home');
	}
}
