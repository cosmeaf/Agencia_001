<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}


	private function logged_in(){
		if( ! $this->session->userdata('authenticated')){
			redirect('auth/login');
		}
	}

	public function index(){
		$this->login();
	}

	public function login(){
		$this->form_validation->set_rules('email', 'E-mail', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error text-danger" style="font-size: 14px;">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('danger', validation_errors());
			$this->load->view('main');
		}else{
			$data = $this->auth_model->doLogin();

			if($data){
				$userdata = array(
					'user_id' => $data->user_id,
					'email' => $data->email,
					'status' => 1,
					'authenticated' => TRUE
				);
				$this->session->set_userdata($userdata);
				$this->session->set_flashdata('success', 'Bem vindo: ');
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('danger', 'Usuário ou senha inválidos');
				$this->load->view('main');
			}
		}
	}

	public function recovery(){

	}

	public function create(){

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('main');
	}


}

/* End of file Auth.php */
	/* Location: ./application/controllers/Auth.php */