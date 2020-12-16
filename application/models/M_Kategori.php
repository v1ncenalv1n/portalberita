<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model {
	function read()
	{
		$this->db->order_by('nama_kat', 'Desc');
		return $this->db->get('tbl_kategori')->result_array();
	}
	function get_row($id)
	{
		return $this->db->get_where('tbl_kategori', ['id_kat'=>$id])->row_array();
	}

	function create()
	{
		$id_kategori = random_string('alnum', 255);
		$name_kat = $this->input->post('nama_kategori');

		$data = [
			'id_kat' => $id_kategori,
			'nama_kat' => $name_kat,
		];
		$this->db->insert('tbl_kategori',$data);
		if ($this->db->affected_rows() > 0){
			redirect('kategori','refresh');
		}
	}

	function delete($id)
	{
		$this->db->where('id_kat',$id);
		$this->db->delete('tbl_kategori');
		if ($this->db->affected_rows() > 0){
			redirect('kategori','refresh');
		}
	}
	function update()
	{
		$nama_kat = $this->input->post('nama_kategori');

		$data = [
			'nama_kat' => $nama_kat,
		];

		$this->db->where('id_kat', $this->input->post('id'));
		$this->db->update('tbl_kategori',$data);
		if ($this->db->affected_rows() > 0){
			redirect('kategori','refresh');
		}
	}
}
?>