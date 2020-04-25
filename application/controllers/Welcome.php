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
	function __construct()
	{
		parent::__construct();
		$this->load->model("loginmodel");
	}
	public function index()
	{
		// $this->load->view('welcome_message');
		if (!isset($_SESSION)) {
			echo "aaaaaaaaaaaaaaaaa";
			if ($_SESSION['status'] == 1){
				$this->load->view('Users/Template/HeaderAdmin');
				$this->load->view('Users/Home/Home');
				
			}else{
				$this->load->view('Users/Template/header');
				$this->load->view('Users/Home/Home');
			}
			echo "aaaaaaaaaaaaaaaaa";
		}else{
			$_SESSION['username'] = 'null';
			echo "zzzzzzzzzzzzzzz";
			$this->load->view('Users/Template/header');
			$this->load->view('Users/Home/Home');
		}
		// $this->load->view('Users/Template/header');
		// $this->load->view('Users/Home/Home');
	}
	public function Login()
	{
		
		// $this->load->view('Users/Login/Login');
		$_SESSION['username'] = 'null';
		$message = "Invalid username or password";
		if ($this->input->method() == 'post') {
			$data = ['username' => $this->input->post('uname'), 'password' => $this->input->post('psw')];
			if ($this->loginmodel->loginuser($data)) {
				$userid = $this->loginmodel->GetUserId($data['username']);
				$_SESSION['username'] = $data['username'];
				$_SESSION['status'] = $userid->status;
				$this->session->set_userdata('username', $data['username']);
				//redirect('/');
				if ($_SESSION['status'] != 1) {
					$this->load->view('Users/Template/header');
					$this->load->view('Users/Home/Home');
				}else{
					$this->load->view('Users/Template/HeaderAdmin');
					$this->load->view('Users/Home/Home');
				}
			} else {
				$this->load->view('Users/Template/header');

				$this->load->view('Users/Login/Login', ['error_msg' => 'Invalid username or password']);
			}
		} else {
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
		} else {
			$this->load->view('Users/Template/header');
			$this->load->view('Users/Register/Register');
		}
	}
	public function Contactus()
	{
		$url = "./application/views/Users/Author/Auth.json";
		$get_url = file_get_contents($url);
		$data = json_decode($get_url);

		$data_array = array(
			'datalist' => $data
		);
		$this->load->view('Users/Author/ViewAuthor', $data_array);
		//$this->load->view('Users/Author/ViewAuthor');
	}
}
