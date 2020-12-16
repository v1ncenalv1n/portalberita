<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {
	function countberita()
	{
		$query = $this->db->get('tbl_berita');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
	function countpengguna()
	{
		$this->db->where('user_role',2);
		$query = $this->db->get('tbl_pengguna');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
}
