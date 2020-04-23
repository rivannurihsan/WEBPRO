<?php
class Obat extends CI_Model{

	public function insert_new_product($data){
		//insert data (consist of username, password, and profile pic filename) to table, return true if insert works and vice versa
		return $this->db->insert('Product', $data);
	}

	public function get_obat($username){
		//select 1 row profile based on username (from param) and return it, if the data is not found then return false
		$this->db->where('username', $username);
		$data = $this->db->get($this->_table)->result_array();
		return $data;
	}
}
?>