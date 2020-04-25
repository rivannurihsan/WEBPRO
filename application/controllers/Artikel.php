<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
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
		$this->load->view('Users/Artikel/Artikel');
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

		$timestamp = strtotime($this->input->post('birthday'));

// Creating new date format from that timestamp
		$ttl = date("y-m-d", $timestamp);
		if ($this->input->method() == 'post') {
			$data = ['email' => $this->input->post('email'), 'username' => $this->input->post('username'), 'password' => $this->input->post('password'), 'TTL' => $ttl, 'alamat' => $this->input->post('alamat'), 'gender' => $this->input->post('Gender'), 'status' => 0];
			if ($this->loginmodel->insert_new_profle($data)) {
				$this->session->set_userdata('username', $data['username']);
                redirect('/');
            } else {
				$this->load->view('Users/Template/header');
                $this->load->view('Users/Login/Login', ['error_msg' => 'Invalid username or password']);
            }
		}else{
			$this->load->view('Users/Template/header');
			$this->load->view('Users/Register/Register');
		}
	}
	
}