<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == "login"){
			redirect('page');
		}

		$this->load->model('Model_Login');
	}

	public function index(){
		$this->load->view('login');
	}

	public function in(){
		$username = $this->input->post('email');
		// $password = $this->input->post('password');
		// $where = array('username'=>$username, 'password'=>$password);
		$cek = $this->Model_Login->in();
		if($cek > 0){
			$data_session = array('status'=>"login");
			$this->session->set_userdata($data_session);
			redirect('page');
		}else{
			echo "failed";
		}
	}

	// public function out(){		
	// 	$this->session->sess_destroy();
	// 	redirect('login');
	// }
}
