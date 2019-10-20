<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_turtel extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_turtel');
		$this->load->library('form_validation');
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('c_userview/home'));  
		} 
	}


	public function turtel()
	{
		$data['d_turtel']=$this->m_turtel->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/d_turtel', $data);
		$this->load->view('template/footer');

	}

	public function tambah_aksi(){
		
		$this->form_validation->set_rules('proc_name', 'Process Name', 'required|trim');
		$this->form_validation->set_rules('critical_fact', 'Critical Fact', 'required|trim');
		$this->form_validation->set_rules('proc_own', 'Process Owner', 'required|trim');
		$this->form_validation->set_rules('start_ev', 'Start Event', 'required|trim');
		$this->form_validation->set_rules('end_ev', 'End Event', 'required|trim');
		$this->form_validation->set_rules('input_proc', 'Input Process', 'required|trim');
		$this->form_validation->set_rules('proc_input', 'Process', 'required|trim');
		$this->form_validation->set_rules('int_inp', 'Interface Input', 'required|trim');
		$this->form_validation->set_rules('material', 'Material / Tools', 'required|trim');
		$this->form_validation->set_rules('human', 'Material / Tools', 'required|trim');
		$this->form_validation->set_rules('process_do', 'Process', 'required|trim');
		$this->form_validation->set_rules('proc_indi', 'Process Indicator', 'required|trim');
		$this->form_validation->set_rules('proc_obj', 'Process Objectives', 'required|trim');
		$this->form_validation->set_rules('risk', 'Risk Analysis', 'required|trim');
		$this->form_validation->set_rules('proc_outp', 'Process Output', 'required|trim');
		$this->form_validation->set_rules('int_outp', 'interface Output', 'required|trim');
		$this->form_validation->set_rules('proc_impro', 'Process Improvement', 'required|trim');
		$this->form_validation->set_rules('outp_proc', 'Output Process', 'required|trim');

		if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap Isi Dengan Benar</div>');
				redirect('c_turtel/turtel');
		} else {
				$id = $this->input->post('');
				$pn = $this->input->post('proc_name');				
				$cf = $this->input->post('critical_fact');
				$pown = $this->input->post('proc_own');
				$sev = $this->input->post('start_ev');
				$eev = $this->input->post('end_ev');
				$iproc = $this->input->post('input_proc');
				$pi = $this->input->post('proc_input');
				$inip = $this->input->post('int_inp');
				$material = $this->input->post('material');
				$hmn = $this->input->post('human');
				$proc = $this->input->post('process_do');
				$pind = $this->input->post('proc_indi');
				$pobj = $this->input->post('proc_obj');
				$risk = $this->input->post('risk');
				$pout = $this->input->post('proc_outp');
				$iout = $this->input->post('int_outp');
				$pimpro = $this->input->post('proc_impro');
				$ouproc = $this->input->post('outp_proc');



			$data_turtle = array(
			'id_process' => $id,
			'process_name' => $pn,
			'critical' => $cf,
			'process_owner' => $pown,
			'start_event' => $sev,
			'end_event' => $eev,
			'input' => $iproc,
			'process_input' => $pi,
			'int_for_input' => $inip,
			'material' => $material,
			'human' => $hmn,
			'process' => $proc,
			'process_indicator' => $pind,
			'process_obj' => $pobj,
			'risk' => $risk,
			'process_output' => $pout,
			'int_for_output' => $iout,
			'process_improv' => $pimpro,
			'output' => $ouproc
		
			);	

				$this->m_turtel->input_data($data_turtle,'turtle');
				redirect('c_turtel/turtel');	
			}
	

		

		
    }



			public function hapus($id){
				$where = array ('id_process' => $id);
				$this->m_turtel->hapus_data($where, 'turtle');
				redirect('c_turtel/turtel');

		}

		public function edit($id){
			$where = array('id_process'=>$id);
			$data['d_turtel'] = $this->m_turtel->update($where,'turtle')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/e_turtle', $data);
		$this->load->view('template/footer');
		}

		public function update(){
			$id2 = $this->input->post('id_bidang2');
			$pn2 = $this->input->post('proc_name2');
			$cf2 = $this->input->post('critical_fact2');
			$pown2 = $this->input->post('proc_own2');
			$sev2 = $this->input->post('start_ev2');
			$eev2 = $this->input->post('end_ev2');
			$iproc2 = $this->input->post('input_proc2');
			$pi2 = $this->input->post('proc_input2');
			$inip2 = $this->input->post('int_inp2');
			$material2 = $this->input->post('material2');
			$hmn2 = $this->input->post('human2');
			$proc2 = $this->input->post('process_do2');
			$pind2 = $this->input->post('proc_indi2');
			$pobj2 = $this->input->post('proc_obj2');
			$risk2 = $this->input->post('risk2');
			$pout2 = $this->input->post('proc_outp2');
			$iout2 = $this->input->post('int_outp2');
			$pimpro2 = $this->input->post('proc_impro2');
			$ouproc2 = $this->input->post('outp_proc2');

			$data = array(
			'id_process' => $id2,
			'process_name' => $pn2,
			'critical' => $cf2,
			'process_owner' => $pown2,
			'start_event' => $sev2,
			'end_event' => $eev2,
			'input' => $iproc2,
			'process_input' => $pi2,
			'int_for_input' => $inip2,
			'material' => $material2,
			'human' => $hmn2,
			'process' => $proc2,
			'process_indicator' => $pind2,
			'process_obj' => $pobj2,
			'risk' => $risk2,
			'process_output' => $pout2,
			'int_for_output' => $iout2,
			'process_improv' => $pimpro2,
			'output' => $ouproc2
		);


			$where = array(
				'id_process' => $id2
			);

			$this->m_turtel->update_data($where,$data,'turtle');
			redirect('c_turtel/turtel');

		}


}
?>