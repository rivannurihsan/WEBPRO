<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	function __construct(){
		parent::__construct();
		$this->load->model("loginmodel");
	}
	public function index()
	{
		// $this->load->view('welcome_message');
		// $this->load->view('Users/Template/header');
		$this->load->view('Users/Home/Home');
	}
	public function Login(){
		// $this->load->view('Users/Login/Login');
		$message="Invalid username or password";
		if ($this->input->method() == 'post') {
			$data = ['username' => $this->input->post('uname'), 'password' => $this->input->post('psw')];
			if ($this->loginmodel->loginuser($data)) {
				$this->session->set_userdata('username', $data['username']);
                redirect('/');
            } else {
				$this->load->view('Users/Template/header');
		
                $this->load->view('Users/Login/Login', ['error_msg' => 'Invalid username or password']);
            }
		}else{
			$this->load->view('Users/Template/header');
			$this->load->view('Users/Login/Login');
		}
		
	}
	public function Registrasi()
	{
		$this->load->view('Users/Template/header');
		$this->load->view('Users/Register/Register');
	}
	
}

