<?php
class Obat extends CI_Model{

	public function insert_new_product($data){
		//insert data (consist of username, password, and profile pic filename) to table, return true if insert works and vice versa
		return $this->db->insert('Product', $data);
    }
    public function GetObat(){
		$this->db->select('*');
		$this->db->from('Product');
		$query = $this->db->get();
		return $query->result();
	}
}
?>