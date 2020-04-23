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
	}
	public function index()
	{
		// $this->load->view('welcome_message');
		// $this->load->view('Users/Template/header');
		$this->load->view('Admin/CRUDPRODUCT');
	}
	public function Create_Obat()
	{
		
		$config['upload_path']          = './assets';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		$this->upload->do_upload('uploadImage');
		
		if(!$this->upload->do_upload('uploadImage')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('Users/Home/Home',$error);
		} else {
			$data = [
				'Nama_Obat' => $this->input->post('Nama_Obat'),
				'Harga' => $this->input->post('Harga'),
				'Description' => $this->input->post('Description'),
				'pict' => $this->upload->data()['file_name']
			];
			$insert = $this->Obat->insert_new_product($data);
			if(!$insert){
				$error = array('error' => $this->upload->display_errors());
				redirect('Catalog');
			} else {
				redirect('/');
			}
		}
	}
}
