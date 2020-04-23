<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
		$this->load->model("Obat");
		$this->load->model("Users");
		$this->load->model("loginmodel");
	}
	public function index()
	{
		$data_obat = $this->Obat->GetObat();
		$this->load->view('Admin/CRUDPRODUCT', ['dataobat' => $data_obat]);
		//$this->load->view('page_mahasiswa',['data'=>$data_mahasiswa]);

	}
	public function Create_Obat()
	{

		$config['upload_path']          = './assets';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 1000;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('uploadImage')) {
			$error = array('error' => $this->upload->display_errors());
			//$this->load->view('Users/Home/Home',$error);
		} else {
			$data = [
				'Nama_Obat' => $this->input->post('Nama_Obat'),
				'Harga' => $this->input->post('Harga'),
				'Description' => $this->input->post('Description'),
				'pict' => $this->upload->data()['file_name']
			];
			$insert = $this->Obat->insert_new_product($data);
			if (!$insert) {
				$error = array('error' => $this->upload->display_errors());
				redirect('Catalog');
			} else {
				redirect('/Admin');
			}
		}
	}
	public function hapusobat($idobat)
	{

		//Load function hapus_mahasiswa from M_web
		// make it to index.php/web/mahasiswa after delete complete
		if (!isset($idobat)) show_404();
		var_dump($idobat);
		if ($this->Obat->hapus_obat($idobat)) {
			redirect('/Admin');
		}
	}
	public function editobat()
	{

		// Create variabel and use it for add data from database.
		// Load edit_jurusan($id_obat,$data) from M_web
		// Redirect to index.php/web/jurusan after add data.
		$config['upload_path']          = './assets';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 1000;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		$id_obat = $this->input->post('id_Obat', true);
		if (!$this->upload->do_upload('uploadImage')) {
			$data = [
				'Nama_Obat' => $this->input->post('Nama_Obat'),
				'Harga' => $this->input->post('Harga'),
				'Description' => $this->input->post('Description')
			];
			$result = $this->Obat->edit_Obat($id_obat, $data);
			if ($result) {
				//$this->session->set_flashdata('flash', 'Added success');				
				redirect('/Admin');
			} else {
				$error = array('error' => $this->upload->display_errors());
				redirect('Catalog');
			}
		} else {
			$data = [
				'Nama_Obat' => $this->input->post('Nama_Obat'),
				'Harga' => $this->input->post('Harga'),
				'Description' => $this->input->post('Description'),
				'pict' => $this->upload->data()['file_name']
			];
			$result = $this->Obat->edit_Obat($id_obat, $data);
			if ($result) {
				//$this->session->set_flashdata('flash', 'Added success');				
				redirect('/Admin');
			} else {
				$error = array('error' => $this->upload->display_errors());
				redirect('Catalog');
			}
		}
	}
	public function Usersview()
	{
		$data_User = $this->Users->GetUsers();
		$this->load->view('Admin/CRUDUSERS', ['data' => $data_User]);

	}
	public function RegistrasiAdmin()
	{	

		$timestamp = strtotime($this->input->post('TTL'));

// Creating new date format from that timestamp
		$ttl = date("y-m-d", $timestamp);
		if ($this->input->method() == 'post') {
			$data = ['email' => $this->input->post('email'), 'username' => $this->input->post('username'), 'password' => $this->input->post('password'), 'TTL' => $ttl, 'alamat' => $this->input->post('alamat'), 'gender' => $this->input->post('Gender'), 'status' => 1];
			if ($this->loginmodel->insert_new_profle($data)) {
				$this->session->set_userdata('username', $data['username']);
                redirect('/Admin/UsersView');
            } else {
				$this->load->view('Users/Template/header');
                
            }
		}else{
			$this->load->view('Users/Template/header');
		}
	}
	public function hapususers($Personid)
	{

		//Load function hapus_mahasiswa from M_web
		// make it to index.php/web/mahasiswa after delete complete
		if (!isset($Personid)) show_404();
		var_dump($Personid);
		if ($this->Users->hapus_users($Personid)) {
			redirect('/Admin/Usersview');
		}
	}
}
