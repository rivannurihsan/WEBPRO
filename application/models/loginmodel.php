<?php 
class loginmodel extends CI_Model{
	
	public function check_username($username){
		//check if username (from param) already exist in db or not, return true / false
		return $this->db->get_where('profile', ['username' => $username])->num_rows() > 0;
	}
	
	public function loginuser($data) {
		//check if data (consist of username and password) exist/found in db, return true / false
		return $this->db->get_where('profile', $data)->num_rows() == 1;
	}
	
	public function insert_new_profle($data){
		return $this->db->insert('profile', $data);
	}
	
	public function get_profile($username){
		//select 1 row profile based on username (from param) and return it, if the data is not found then return false
		return $this->check_username($username) ? $this->db->get_where('profile', ['username' => $username])->row_array() : false;
	}
}
?>