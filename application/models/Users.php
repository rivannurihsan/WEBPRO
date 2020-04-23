<?php
class Users extends CI_Model
{

	public function GetUsers()
	{
		$this->db->select('*');
		$this->db->from('Profile');
		$query = $this->db->get();
		return $query->result();
	}
	public function hapus_users($Personid)
	{
		return $this->db->delete("Profile", array("Personid" => $Personid));
	}


	public function edit_Users($Personid, $data)
	{
		$this->db->set($data);
		$this->db->where('Personid', $Personid);
		return $this->db->update('Profile');
	}
}
?>