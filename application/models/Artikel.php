<?php
class Artikel extends CI_Model
{

	public function insert_new_Artikel($data)
	{
		//insert data (consist of username, password, and profile pic filename) to table, return true if insert works and vice versa
		return $this->db->insert('Artikel', $data);
	}
	public function GetArtikel()
	{
		$this->db->select('*');
		$this->db->from('Artikel');
		$query = $this->db->get();
		return $query->result();
    }
    public function GetArtikelFirst()
	{
		$this->db->select('*');
        $this->db->from('Artikel');
        $this->db->where('Judul','Selamat Datang');
		$query = $this->db->get();
		return $query->row();
	}
	public function GetArtikelId($id)
	{
		$this->db->select('*');
        $this->db->from('Artikel');
        $this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function edit_Artikel($id, $data)
	{
		$this->db->set($data);
		$this->db->where('id', $id);
		return $this->db->update('Artikel');
	}
	public function hapus_artikel($id)
	{
		return $this->db->delete("Artikel", array("id" => $id));
	}
}
