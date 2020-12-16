<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berita extends CI_Model {

	function read()
	{
		$this->db->order_by('waktu_upload', 'Desc');
		$this->db->order_by('tgl_upload', 'Desc');
		if($this->session->userdata('roles')==2){
			$this->db->where('id_author',$this->session->userdata('ses_id'));
		}
		return $this->db->get('tbl_berita')->result_array();
	}
	function readcategory()
	{
		$this->db->order_by('nama_kat', 'Desc');
		return $this->db->get('tbl_kategori')->result_array();
	}
	function get_row($id)
	{
		return $this->db->get_where('tbl_berita', ['id'=>$id])->row_array();
	}

	function create()
	{
		$id_berita = random_string('alnum', 255);
		$judulberita = $this->input->post('judul');
		$isiberita = $this->input->post('isi');
		$tglpublish = $this->input->post('tgl_pub');
		$wktpublish = $this->input->post('wkt_pub');
		$idauthor = $this->session->userdata('ses_id');
		$usernameauthor = $this->session->userdata('ses_username');
		$kat = $this->input->post('kategori');
		$slug = str_replace(' ', '-', strtolower($judulberita));

		$data = [
			'id' => $id_berita,
			'judul_berita' => $judulberita,
			'isi_berita' => $isiberita,
			'tgl_publish' => $tglpublish,
			'waktu_publish' => $wktpublish,
			'id_author' => $idauthor,
			'author_username' => $usernameauthor,
			'category' => $kat,
			'slug' => $slug,
		];
		$this->db->insert('tbl_berita',$data);
		if ($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan','Ditambah');
			redirect('berita','refresh');
		}
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_berita');
		if ($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan','Dihapus');
			redirect('berita','refresh');
		}
	}
	function update()
	{
		$judulberita = $this->input->post('judul');
		$isiberita = $this->input->post('isi');
		$tglpublish = $this->input->post('tgl_pub');
		$wktpublish = $this->input->post('wkt_pub');
		$kat = $this->input->post('kategori');

		$data = [
			'judul_berita' => $judulberita,
			'isi_berita' => $isiberita,
			'tgl_publish' => $tglpublish,
			'waktu_publish' => $wktpublish,
			'category' => $kat,
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_berita',$data);
		if ($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan','Diubah');
			redirect('berita','refresh');
		}
	}
}
