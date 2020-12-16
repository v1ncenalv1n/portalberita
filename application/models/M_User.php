<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
	function read()
	{
		$this->db->order_by('namauser', 'Desc');
		return $this->db->get('tbl_pengguna')->result_array();
	}
	function get_row($id)
	{
		return $this->db->get_where('tbl_pengguna', ['id'=>$id])->row_array();
	}

	function create()
	{
		$id_user = random_string('alnum', 255);
		$username = $this->input->post('username');
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$name = $this->input->post('nama');
		$role = $this->input->post('role');

		$data = [
			'id' => $id_user,
			'username' => $username,
			'password' => $password,
			'namauser' => $name,
			'user_role' => $role,
		];
		$this->db->insert('tbl_pengguna',$data);
		if ($this->db->affected_rows() > 0){
			redirect('user','refresh');
		}
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_pengguna');
		if ($this->db->affected_rows() > 0){
			redirect('user','refresh');
		}
	}
	function update()
	{
		$username = $this->input->post('username');
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$name = $this->input->post('nama');

		$data = [
			'username' => $username,
			'password' => $password,
			'namauser' => $name,
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_pengguna',$data);
		if ($this->db->affected_rows() > 0){
			redirect('user','refresh');
		}
	}
}
?>